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

import java.util.EnumSet;
import javax.swing.JComponent;
import javax.swing.event.ChangeListener;
import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.netbeans.modules.php.api.validation.ValidationResult;
import org.nbphpcouncil.modules.php.laravel4.preferences.Laravel4Preferences;
import org.nbphpcouncil.modules.php.laravel4.ui.customizer.Laravel4CustomizerPanel;
import org.nbphpcouncil.modules.php.laravel4.validation.CustomizerValidator;
import org.netbeans.modules.php.spi.framework.PhpModuleCustomizerExtender;
import org.openide.util.HelpCtx;
import org.openide.util.NbBundle;

/**
 * PHP module customizer extender for Laravel4 PHP framework.
 *
 */
public class Laravel4PhpModuleCustomizerExtender extends PhpModuleCustomizerExtender {

    private final PhpModule phpModule;
    private final boolean originalEnabled;
    private final String originalAppDirectory;
    // @GuardedBy(EDT)  
    private Laravel4CustomizerPanel component;

    public Laravel4PhpModuleCustomizerExtender(PhpModule phpModule) {
        this.phpModule = phpModule;
        this.originalEnabled = Laravel4PhpFrameworkProvider.getInstance().isInPhpModule(phpModule);
        this.originalAppDirectory = Laravel4Preferences.getAppDirectory(phpModule);
    }

    @NbBundle.Messages("LBL_Laravel4=Laravel4")
    @Override
    public String getDisplayName() {
        return Bundle.LBL_Laravel4();
    }

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
        if (getPanel().isSupportEnabled()) {
            // validate
            ValidationResult validationResult = new CustomizerValidator(phpModule)
                    .validate(getPanel().getAppDirectory())
                    .getResult();

            if (validationResult.hasErrors()) {
                return validationResult.getErrors().get(0).getMessage();
            }
        }

        return null;
    }

    @Override
    public EnumSet<Change> save(PhpModule phpModule) {
        EnumSet<Change> changes = EnumSet.noneOf(Change.class);
        saveEnabled(changes);
        saveAppDirectory(changes);

        if (changes.isEmpty()) {
            return null;
        }

        return changes;
    }

    private void saveEnabled(EnumSet<Change> changes) {
        boolean newEnabled = getPanel().isSupportEnabled();

        if (newEnabled != originalEnabled) {
            Laravel4Preferences.setEnabled(phpModule, newEnabled);
            changes.add(Change.FRAMEWORK_CHANGE);
        }
    }

    private void saveAppDirectory(EnumSet<Change> changes) {
        String newAppDirectory = getPanel().getAppDirectory();

        if (!newAppDirectory.equals(originalAppDirectory)) {
            Laravel4Preferences.setAppDirectory(phpModule, newAppDirectory);
            changes.add(Change.FRAMEWORK_CHANGE);
        }
    }

    private Laravel4CustomizerPanel getPanel() {
        if (component == null) {
            component = new Laravel4CustomizerPanel(phpModule.getSourceDirectory());
            component.setSupportEnabled(originalEnabled);
            component.setAppDirectory(originalAppDirectory);
        }

        return component;
    }
}
