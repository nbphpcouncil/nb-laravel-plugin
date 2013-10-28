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
package org.nbphpcouncil.modules.php.laravel4.ui.wizards;

import java.awt.Cursor;
import java.beans.PropertyChangeEvent;
import java.beans.PropertyChangeListener;
import javax.swing.event.ChangeEvent;
import javax.swing.event.ChangeListener;
import org.netbeans.api.options.OptionsDisplayer;
import org.netbeans.modules.php.api.validation.ValidationResult;
import org.nbphpcouncil.modules.php.laravel4.options.Laravel4Options;
import org.nbphpcouncil.modules.php.laravel4.ui.options.Laravel4OptionsPanelController;
import org.nbphpcouncil.modules.php.laravel4.validation.OptionsValidator;
import org.openide.util.ChangeSupport;

/**
 * New project configuration panel for Laravel4 PHP framework.
 */
public class NewProjectConfigurationPanel extends javax.swing.JPanel implements ChangeListener {

    private final ChangeSupport changeSupport = new ChangeSupport(this);

    /**
     * Creates new form NewProjectConfigurationPanel
     */
    public NewProjectConfigurationPanel() {
        initComponents();

        init();
        initListeners();
    }

    public String getErrorMessage() {
        ValidationResult validationResult = new OptionsValidator()
                .validate(Laravel4Options.getInstance().getSkeleton())
                .getResult();

        if (validationResult.hasErrors()) {
            return validationResult.getErrors().get(0).getMessage();
        }

        return null;
    }

    public String getWarningMessage() {
        ValidationResult validationResult = new OptionsValidator()
                .validate(Laravel4Options.getInstance().getSkeleton())
                .getResult();

        if (validationResult.hasWarnings()) {
            return validationResult.getWarnings().get(0).getMessage();
        }

        return null;
    }

    public void addChangeListener(ChangeListener listener) {
        changeSupport.addChangeListener(listener);
    }

    public void removeChangeListener(ChangeListener listener) {
        changeSupport.removeChangeListener(listener);
    }

    @Override
    public void addNotify() {
        Laravel4Options.getInstance().addChangeListener(this);
        super.addNotify();
    }

    @Override
    public void removeNotify() {
        Laravel4Options.getInstance().removeChangeListener(this);
        super.removeNotify();
    }

    @Override
    public void stateChanged(ChangeEvent ce) {
        fireChange();
    }

    void enableOptionsLabel() {
        optionsLabel.setVisible(infoLabel.isEnabled());
    }

    void fireChange() {
        changeSupport.fireChange();
    }

    private void init() {
        // work around - keep the label on the right side
        optionsLabel.setMaximumSize(optionsLabel.getPreferredSize());
    }

    private void initListeners() {
        infoLabel.addPropertyChangeListener("enabled", new PropertyChangeListener() { // NOI18N
            @Override
            public void propertyChange(PropertyChangeEvent evt) {
                enableOptionsLabel();
            }
        });
        enableOptionsLabel();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        infoLabel = new javax.swing.JLabel();
        optionsLabel = new javax.swing.JLabel();

        org.openide.awt.Mnemonics.setLocalizedText(infoLabel, org.openide.util.NbBundle.getMessage(NewProjectConfigurationPanel.class, "NewProjectConfigurationPanel.infoLabel.text")); // NOI18N

        org.openide.awt.Mnemonics.setLocalizedText(optionsLabel, org.openide.util.NbBundle.getMessage(NewProjectConfigurationPanel.class, "NewProjectConfigurationPanel.optionsLabel.text")); // NOI18N
        optionsLabel.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                optionsLabelMouseClicked(evt);
            }
            public void mouseEntered(java.awt.event.MouseEvent evt) {
                optionsLabelMouseEntered(evt);
            }
        });

        org.jdesktop.layout.GroupLayout layout = new org.jdesktop.layout.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(org.jdesktop.layout.GroupLayout.LEADING)
            .add(layout.createSequentialGroup()
                .add(infoLabel, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(org.jdesktop.layout.LayoutStyle.RELATED, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .add(optionsLabel, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(org.jdesktop.layout.GroupLayout.LEADING)
            .add(layout.createSequentialGroup()
                .add(layout.createParallelGroup(org.jdesktop.layout.GroupLayout.BASELINE)
                    .add(infoLabel, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE)
                    .add(optionsLabel, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE))
                .add(0, 154, Short.MAX_VALUE))
        );
    }// </editor-fold>//GEN-END:initComponents

    private void optionsLabelMouseEntered(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_optionsLabelMouseEntered
        evt.getComponent().setCursor(Cursor.getPredefinedCursor(Cursor.HAND_CURSOR));
    }//GEN-LAST:event_optionsLabelMouseEntered

    private void optionsLabelMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_optionsLabelMouseClicked
        OptionsDisplayer.getDefault().open(Laravel4OptionsPanelController.getOptionsPath());
    }//GEN-LAST:event_optionsLabelMouseClicked

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel infoLabel;
    private javax.swing.JLabel optionsLabel;
    // End of variables declaration//GEN-END:variables
}
