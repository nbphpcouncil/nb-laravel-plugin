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
package org.nbphpcouncil.modules.php.laravel4.ui.options;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import javax.swing.JComponent;
import javax.swing.event.ChangeEvent;
import javax.swing.event.ChangeListener;
import org.netbeans.modules.php.api.util.UiUtils;
import org.netbeans.modules.php.api.validation.ValidationResult;
import org.nbphpcouncil.modules.php.laravel4.options.Laravel4Options;
import org.nbphpcouncil.modules.php.laravel4.validation.OptionsValidator;
import org.netbeans.spi.options.OptionsPanelController;
import org.openide.util.HelpCtx;
import org.openide.util.Lookup;

@OptionsPanelController.SubRegistration(
        location = "org-netbeans-modules-php-project-ui-options-PHPOptionsCategory",
        displayName = "#AdvancedOption_DisplayName_Laravel4",
        keywords = "#AdvancedOption_Keywords_Laravel4",
        keywordsCategory = "org-netbeans-modules-php-project-ui-options-PHPOptionsCategory/Laravel4")
@org.openide.util.NbBundle.Messages({"AdvancedOption_DisplayName_Laravel4=Laravel4", "AdvancedOption_Keywords_Laravel4=laravel4 php web framework"})
public final class Laravel4OptionsPanelController extends OptionsPanelController implements ChangeListener {

    public static final String OPTIONS_SUBPATH = "Laravel4"; // NOI18N
    private Laravel4OptionsPanel panel;
    private final PropertyChangeSupport pcs = new PropertyChangeSupport(this);
    private boolean changed = false;

    public static String getOptionsPath() {
        return UiUtils.OPTIONS_PATH + "/" + OPTIONS_SUBPATH; // NOI18N
    }

    @Override
    public void update() {
        panel.setSkeleton(getOptions().getSkeleton());

        changed = false;
    }

    @Override
    public void applyChanges() {
        getOptions().setSkeleton(panel.getSkeleton());

        changed = false;
    }

    @Override
    public void cancel() {
        // need not do anything special, if no changes have been persisted yet
    }

    @Override
    public boolean isValid() {
        // clean up
        panel.setError(" "); // NOI18N

        // validate
        ValidationResult validationResult = new OptionsValidator()
                .validate(panel.getSkeleton())
                .getResult();
        String warning = null;
        // get first message
        if (validationResult.hasErrors()) {
            for (ValidationResult.Message message : validationResult.getErrors()) {
                warning = message.getMessage();
                break;
            }
        } else if (validationResult.hasWarnings()) {
            for (ValidationResult.Message message : validationResult.getWarnings()) {
                warning = message.getMessage();
                break;
            }
        }
        
        panel.setWarning(warning);

        // everything ok
        return true;
    }

    @Override
    public boolean isChanged() {
        return changed;
    }

    @Override
    public HelpCtx getHelpCtx() {
        return null; // new HelpCtx("...ID") if you have a help set
    }

    @Override
    public JComponent getComponent(Lookup masterLookup) {
        return getPanel();
    }

    @Override
    public void addPropertyChangeListener(PropertyChangeListener l) {
        pcs.addPropertyChangeListener(l);
    }

    @Override
    public void removePropertyChangeListener(PropertyChangeListener l) {
        pcs.removePropertyChangeListener(l);
    }

    @Override
    public void stateChanged(ChangeEvent ce) {
        if (!changed) {
            changed = true;
            pcs.firePropertyChange(OptionsPanelController.PROP_CHANGED, false, true);
        }

        pcs.firePropertyChange(OptionsPanelController.PROP_VALID, null, null);
    }

    private Laravel4OptionsPanel getPanel() {
        if (panel == null) {
            panel = new Laravel4OptionsPanel();
            panel.addChangeListener(this);
        }

        return panel;
    }

    void changed() {
        if (!changed) {
            changed = true;
            pcs.firePropertyChange(OptionsPanelController.PROP_CHANGED, false, true);
        }

        pcs.firePropertyChange(OptionsPanelController.PROP_VALID, null, null);
    }

    private Laravel4Options getOptions() {
        return Laravel4Options.getInstance();
    }
}
