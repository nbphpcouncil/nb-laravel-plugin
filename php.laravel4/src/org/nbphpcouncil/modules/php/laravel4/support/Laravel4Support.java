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
package org.nbphpcouncil.modules.php.laravel4.support;

import java.io.File;
import java.io.IOException;
import java.util.HashMap;
import java.util.Map;
import org.netbeans.api.project.Project;
import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.loaders.DataFolder;
import org.openide.loaders.DataObject;
import org.openide.util.Exceptions;

/**
 * Support class for Laravel4 PHP framework.
 */
public class Laravel4Support {

    private static final String AUTO_COMPLETE_DIRECORY = "autocomplete"; // NOI18N
    private static final String AUTO_COMPLETE_FILE_NAME = "__l4_auto_complete__"; // NOI18N
    private static final String AUTO_COMPLETE_FILE = AUTO_COMPLETE_FILE_NAME + ".php"; // NOI18N
    private static final String AUTO_COMPLETE_TEMPLATE_PATH = "org-nbphpcouncil-modules-php-laravel4/__l4_auto_complete__.php"; // NOI18N

    public static void generateAutoCompletionFile(PhpModule phpModule) {
        Project project = PhpProjectSupport.getProject(phpModule.getSourceDirectory());
        FileObject projectDirectory = project.getProjectDirectory();
        FileObject nbProjectDirectory = PhpProjectSupport.getNbProjectDirectory(projectDirectory);

        if (nbProjectDirectory != null) {
            FileObject autoCompleteTemplateFile = FileUtil.getConfigFile(AUTO_COMPLETE_TEMPLATE_PATH);

            if (autoCompleteTemplateFile != null) {
                Map<String, Object> parameters = new HashMap<String, Object>();

                try {
                    FileObject autoCompleteDirectory = getAutoCompleteDirectory(nbProjectDirectory);
                    File autoCompleteFile = new File(autoCompleteDirectory.getPath(), AUTO_COMPLETE_FILE);

                    if (autoCompleteFile.exists()) {
                        autoCompleteFile.delete();
                    }

                    DataFolder autoCompleteDirectoryDataFolder = DataFolder.findFolder(autoCompleteDirectory);
                    DataObject autoCompleteTemplateDataObject = DataObject.find(autoCompleteTemplateFile);
                    autoCompleteTemplateDataObject.createFromTemplate(autoCompleteDirectoryDataFolder, AUTO_COMPLETE_FILE_NAME, parameters);
                    PhpProjectSupport.setIncludePath(project, FileUtil.getRelativePath(projectDirectory, autoCompleteDirectory));
                } catch (IOException ex) {
                    Exceptions.printStackTrace(ex);
                }
            }
        }
    }

    public static void removeAutoCompletionFile(PhpModule phpModule) {
        Project project = PhpProjectSupport.getProject(phpModule.getSourceDirectory());
        FileObject projectDirectory = project.getProjectDirectory();
        FileObject nbProjectDirectory = PhpProjectSupport.getNbProjectDirectory(projectDirectory);

        if (nbProjectDirectory != null) {
            try {
                FileObject autoCompleteDirectory = getAutoCompleteDirectory(nbProjectDirectory);

                if (autoCompleteDirectory != null) {
                    File autoCompleteFile = new File(autoCompleteDirectory.getPath(), AUTO_COMPLETE_FILE);

                    if (autoCompleteFile.exists()) {
                        autoCompleteFile.delete();

                    }

                    if (autoCompleteDirectory.getChildren().length == 0) {
                        autoCompleteDirectory.delete();
                    }
                }
            } catch (IOException ex) {
                Exceptions.printStackTrace(ex);
            }
        }
    }

    private static FileObject getAutoCompleteDirectory(FileObject nbProjectDirectory) throws IOException {
        FileObject autoCompleteDirectory = null;
        File directory = new File(nbProjectDirectory.getPath(), AUTO_COMPLETE_DIRECORY);

        if (directory.exists()) {
            try {
                autoCompleteDirectory = FileUtil.createFolder(nbProjectDirectory, AUTO_COMPLETE_DIRECORY);
            } catch (IOException ex) {
                Exceptions.printStackTrace(ex);
            }
        } else {
            FileUtil.createFolder(directory);
            autoCompleteDirectory = FileUtil.toFileObject(directory);
        }

        return autoCompleteDirectory;
    }
}
