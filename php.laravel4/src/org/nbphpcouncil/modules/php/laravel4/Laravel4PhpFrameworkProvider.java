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
import org.netbeans.modules.php.api.framework.BadgeIcon;
import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.netbeans.modules.php.api.phpmodule.PhpModuleProperties;
import org.nbphpcouncil.modules.php.laravel4.commands.Artisan;
import org.nbphpcouncil.modules.php.laravel4.commands.Laravel4CommandSupport;
import org.nbphpcouncil.modules.php.laravel4.preferences.Laravel4Preferences;
import org.nbphpcouncil.modules.php.laravel4.ui.actions.Laravel4PhpModuleActionsExtender;
import org.netbeans.modules.php.spi.framework.PhpFrameworkProvider;
import org.netbeans.modules.php.spi.framework.PhpModuleActionsExtender;
import org.netbeans.modules.php.spi.framework.PhpModuleCustomizerExtender;
import org.netbeans.modules.php.spi.framework.PhpModuleExtender;
import org.netbeans.modules.php.spi.framework.PhpModuleIgnoredFilesExtender;
import org.netbeans.modules.php.spi.framework.commands.FrameworkCommandSupport;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.util.ImageUtilities;
import org.openide.util.NbBundle;

/**
 * PHP framework provider for Laravel4 PHP framework.
 */
public class Laravel4PhpFrameworkProvider extends PhpFrameworkProvider {

    private static final Laravel4PhpFrameworkProvider INSTANCE = new Laravel4PhpFrameworkProvider();
    private static final String ICON_PATH = "org/nbphpcouncil/modules/php/laravel4/ui/resources/laravel_badge_8.png"; // NOI18N
    private static final String CONFIG_DIRECTORY = "app/config"; // NOI18N
    private final BadgeIcon badgeIcon;

    @PhpFrameworkProvider.Registration(position = 201) // left after Zend
    public static Laravel4PhpFrameworkProvider getInstance() {
        return INSTANCE;
    }

    @NbBundle.Messages({
        "LBL_FrameworkName=Laravel4 PHP Web Framework",
        "LBL_FrameworkDescription=Laravel4 PHP Web Framework"
    })
    private Laravel4PhpFrameworkProvider() {
        super("Laravel4 PHP Web Framework", Bundle.LBL_FrameworkName(), Bundle.LBL_FrameworkDescription()); // NOI18N
        badgeIcon = new BadgeIcon(
                ImageUtilities.loadImage(ICON_PATH),
                Laravel4PhpFrameworkProvider.class.getResource("/" + ICON_PATH)); // NOI18N
    }

    @Override
    public BadgeIcon getBadgeIcon() {
        return badgeIcon;
    }

    @Override
    public boolean isInPhpModule(PhpModule phpModule) {
        Boolean enabled = Laravel4Preferences.isEnabled(phpModule);
        if (enabled != null) {
            // set manually
            return enabled;
        }

        // autodetection
        FileObject artisan = Artisan.getPath(phpModule);

        return artisan != null && artisan.isData();
    }

    @Override
    public File[] getConfigurationFiles(PhpModule phpModule) {
        FileObject sourceDirectory = phpModule.getSourceDirectory();

        if (sourceDirectory == null) {
            // broken project
            return new File[0];
        }

        FileObject configDirectory = sourceDirectory.getFileObject(CONFIG_DIRECTORY);

        if (configDirectory != null && configDirectory.isFolder() && configDirectory.isValid()) {
            File[] configFiles = FileUtil.toFile(configDirectory).listFiles();

            if (configFiles != null) {
                return configFiles;
            }
        }

        return new File[0];
    }

    @Override
    public PhpModuleExtender createPhpModuleExtender(PhpModule phpModule) {
        return new Laravel4PhpModuleExtender();
    }

    @Override
    public PhpModuleCustomizerExtender createPhpModuleCustomizerExtender(PhpModule phpModule) {
        return new Laravel4PhpModuleCustomizerExtender(phpModule);
    }

    @Override
    public PhpModuleProperties getPhpModuleProperties(PhpModule phpModule) {
        PhpModuleProperties properties = new PhpModuleProperties();
        FileObject sourceDirectory = phpModule.getSourceDirectory();

        if (sourceDirectory == null) {
            // broken project
            return properties;
        }

        FileObject publicDirectory = sourceDirectory.getFileObject("public"); // NOI18N

        if (publicDirectory != null) {
            properties = properties.setWebRoot(publicDirectory);
        }
        
        FileObject testsDirectory = sourceDirectory.getFileObject("app/tests"); // NOI18N
        
        if(testsDirectory != null) {
            properties = properties.setTests(testsDirectory);
        }

        return properties;
    }

    @Override
    public PhpModuleActionsExtender getActionsExtender(PhpModule phpModule) {
        return new Laravel4PhpModuleActionsExtender();
    }

    @Override
    public PhpModuleIgnoredFilesExtender getIgnoredFilesExtender(PhpModule phpModule) {
        return new Laravel4PhpModuleIgnoredFilesExtender(phpModule);
    }

    @Override
    public FrameworkCommandSupport getFrameworkCommandSupport(PhpModule phpModule) {
        return new Laravel4CommandSupport(phpModule);
    }
}
