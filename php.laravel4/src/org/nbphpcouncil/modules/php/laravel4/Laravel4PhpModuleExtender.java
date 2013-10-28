/*
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS HEADER.
 *
 * Copyright 2013 Oracle and/or its affiliates. All rights reserved.
 *
 * Oracle and Java are registered trademarks of Oracle and/or its affiliates.
 * Other names may be trademarks of their respective owners.
 *
 * The contents of this file are subject to the terms of either the GNU
 * General Public License Version 2 only ("GPL") or the Common
 * Development and Distribution License("CDDL") (collectively, the
 * "License"). You may not use this file except in compliance with the
 * License. You can obtain a copy of the License at
 * http://www.netbeans.org/cddl-gplv2.html
 * or nbbuild/licenses/CDDL-GPL-2-CP. See the License for the
 * specific language governing permissions and limitations under the
 * License.  When distributing the software, include this License Header
 * Notice in each file and include the License file at
 * nbbuild/licenses/CDDL-GPL-2-CP.  Oracle designates this
 * particular file as subject to the "Classpath" exception as provided
 * by Oracle in the GPL Version 2 section of the License file that
 * accompanied this code. If applicable, add the following below the
 * License Header, with the fields enclosed by brackets [] replaced by
 * your own identifying information:
 * "Portions Copyrighted 2013 NetBeans PHP Community Council"
 *
 * If you wish your version of this file to be governed by only the CDDL
 * or only the GPL Version 2, indicate your decision by adding
 * "[Contributor] elects to include this software in this distribution
 * under the [CDDL or GPL Version 2] license." If you do not indicate a
 * single choice of license, a recipient has the option to distribute
 * your version of this file under either the CDDL, the GPL Version 2 or
 * to extend the choice of license to its licensees as provided above.
 * However, if you add GPL Version 2 code and therefore, elected the GPL
 * Version 2 license, then the option applies only if the new code is
 * made subject to such option by the copyright holder.
 *
 * Contributor(s):
 *
 * Portions Copyrighted 2013 Sun Microsystems, Inc.
 */
package org.nbphpcouncil.modules.php.laravel4;

import java.io.File;
import java.io.IOException;
import java.util.HashSet;
import java.util.Set;
import java.util.concurrent.ExecutionException;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.zip.ZipEntry;
import javax.swing.JComponent;
import javax.swing.event.ChangeListener;
import org.netbeans.modules.php.api.executable.InvalidPhpExecutableException;
import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.netbeans.modules.php.api.util.FileUtils;
import org.netbeans.modules.php.api.util.UiUtils;
import org.netbeans.modules.php.composer.api.Composer;
import org.nbphpcouncil.modules.php.laravel4.options.Laravel4Options;
import org.nbphpcouncil.modules.php.laravel4.support.Laravel4Support;
import org.nbphpcouncil.modules.php.laravel4.ui.options.Laravel4OptionsPanelController;
import org.nbphpcouncil.modules.php.laravel4.ui.wizards.NewProjectConfigurationPanel;
import org.netbeans.modules.php.spi.framework.PhpModuleExtender;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.util.HelpCtx;
import org.openide.util.NbBundle;

/**
 * PHP module extender for Laravel4 PHP framework.
 */
public class Laravel4PhpModuleExtender extends PhpModuleExtender {

    private static final String SKELETON_ZIP_ENTRY_PREFIX = "laravel-master/"; // NOI18N
    
    private static final Logger LOGGER = Logger.getLogger(Laravel4PhpModuleExtender.class.getName());
    //@GuardedBy(this)
    private NewProjectConfigurationPanel panel = null;

    @Override
    public void addChangeListener(ChangeListener listener) {
        getPanel().addChangeListener(listener);
    }

    @Override
    public void removeChangeListener(ChangeListener listener) {
        getPanel().removeChangeListener(listener);
    }

    @Override
    public JComponent getComponent() {
        return getPanel();
    }

    @Override
    public HelpCtx getHelp() {
        return null;
    }

    @Override
    public boolean isValid() {
        return getErrorMessage() == null;
    }

    @Override
    public String getErrorMessage() {
        String error = getPanel().getErrorMessage();

        if (error != null) {
            return error;
        }

        try {
            // validate composer
            Composer.getDefault();
        } catch (InvalidPhpExecutableException ex) {
            return ex.getLocalizedMessage();
        }

        return null;
    }

    @Override
    public String getWarningMessage() {
        return getPanel().getWarningMessage();
    }

    @NbBundle.Messages("Laravel4PhpModuleExtender.not.extended=<html>Laravel 4 project not created!<br>(verify <i>Laravel Application Skeleton</i> in Tools > Options > PHP > Laravel 4 or review IDE log)")
    @Override
    public Set<FileObject> extend(PhpModule phpModule) throws ExtendingException {
        try {
            unpackSkeleton(phpModule);
        } catch (IOException ex) {
            LOGGER.log(Level.INFO, "Cannot unpack Laravel Application Skeleton.", ex);
            throw new ExtendingException(Bundle.Laravel4PhpModuleExtender_not_extended(), ex);
        }
        
        // generate auto completion file.
        Laravel4Support.generateAutoCompletionFile(phpModule);

        // install framework via composer
        try {
            Composer.getDefault().install(phpModule).get();
        } catch (InvalidPhpExecutableException ex) {
            assert false : "Should not happen since Composer is validated in the wizard panel";
            LOGGER.log(Level.INFO, "Composer is not valid so no install cannot be done.", ex);
        } catch (InterruptedException ex) {
            Thread.currentThread().interrupt();
        } catch (ExecutionException ex) {
            UiUtils.processExecutionException(ex, Laravel4OptionsPanelController.OPTIONS_SUBPATH);
        }

        return getInitialFiles(phpModule);
    }

    private void unpackSkeleton(PhpModule phpModule) throws IOException {
        String skeleton = Laravel4Options.getInstance().getSkeleton();
        final File sourceDir = FileUtil.toFile(phpModule.getSourceDirectory());
        FileUtils.unzip(skeleton, sourceDir, new FileUtils.ZipEntryFilter() {
            @Override
            public boolean accept(ZipEntry zipEntry) {
                return !SKELETON_ZIP_ENTRY_PREFIX.equals(zipEntry.getName());
            }

            @Override
            public String getName(ZipEntry zipEntry) {
                String entryName = zipEntry.getName();
                if (entryName.startsWith(SKELETON_ZIP_ENTRY_PREFIX)) {
                    entryName = entryName.replaceFirst(SKELETON_ZIP_ENTRY_PREFIX, ""); // NOI18N
                }
                
                return entryName;
            }
        });
    }
    
    private Set<FileObject> getInitialFiles(PhpModule phpModule) {
        Set<FileObject> files = new HashSet<FileObject>();
        addSourceFile(files, phpModule, "app/config/app.php"); // NOI18N
        addSourceFile(files, phpModule, "app/controllers/HomeController.php"); // NOI18N
        addSourceFile(files, phpModule, "app/views/hello.php"); // NOI18N
        
        return files;
    }

    private void addSourceFile(Set<FileObject> files, PhpModule phpModule, String relativePath) {
        FileObject sourceDirectory = phpModule.getSourceDirectory();

        if (sourceDirectory == null) {
            // broken project
            assert false : "Module extender for no sources of: " + phpModule.getName();
            
            return;
        }

        FileObject fileObject = sourceDirectory.getFileObject(relativePath);

        if (fileObject != null) {
            files.add(fileObject);
        }
    }

    private synchronized NewProjectConfigurationPanel getPanel() {
        if (panel == null) {
            panel = new NewProjectConfigurationPanel();
        }

        return panel;
    }
}
