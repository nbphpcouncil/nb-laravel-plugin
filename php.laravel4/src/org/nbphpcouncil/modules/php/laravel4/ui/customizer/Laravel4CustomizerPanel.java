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
package org.nbphpcouncil.modules.php.laravel4.ui.customizer;

import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import java.io.File;
import javax.swing.event.ChangeListener;
import javax.swing.event.DocumentEvent;
import javax.swing.event.DocumentListener;
import org.openide.filesystems.FileChooserBuilder;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.util.ChangeSupport;
import org.openide.util.NbBundle;

/**
 * Customizer panel for Laravel4 PHP framework. 
 */
public class Laravel4CustomizerPanel extends javax.swing.JPanel {

    private final FileObject source;
    private final ChangeSupport changeSupport = new ChangeSupport(this);

    /**
     * Creates new form Laravel4CustomizerPanel
     */
    public Laravel4CustomizerPanel(FileObject source) {
        this.source = source;

        initComponents();
        init();
    }
    
    public boolean isSupportEnabled() {
        return enabledCheckBox.isSelected();
    }

    public void setSupportEnabled(boolean enabled) {
        enabledCheckBox.setSelected(enabled);
    }

    public String getAppDirectory() {
        return appDirectoryTextField.getText().replace(File.separatorChar, '/'); // NOI18N
    }

    public void setAppDirectory(String appDir) {
        appDirectoryTextField.setText(appDir.replace('/', File.separatorChar)); // NOI18N
    }
    
    public void addChangeListener(ChangeListener listener) {
        changeSupport.addChangeListener(listener);
    }

    public void removeChangeListener(ChangeListener listener) {
        changeSupport.removeChangeListener(listener);
    }
    
    final void setFieldsEnabled(boolean enabled) {
        appDirectoryTextField.setEnabled(enabled);
        appDirectoryBrowseButton.setEnabled(enabled);
    }

    void fireChange() {
        changeSupport.fireChange();
    }
    
    private void init() {
        enabledCheckBox.addItemListener(new ItemListener() {
            @Override
            public void itemStateChanged(ItemEvent e) {
                fireChange();
                setFieldsEnabled(e.getStateChange() == ItemEvent.SELECTED);
            }
        });
        appDirectoryTextField.getDocument().addDocumentListener(new DocumentListener() {
            @Override
            public void insertUpdate(DocumentEvent e) {
                processChange();
            }
            @Override
            public void removeUpdate(DocumentEvent e) {
                processChange();
            }
            @Override
            public void changedUpdate(DocumentEvent e) {
                processChange();
            }
            private void processChange() {
                fireChange();
            }
        });
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        enabledCheckBox = new javax.swing.JCheckBox();
        enabledInfoLabel = new javax.swing.JLabel();
        appDirectoryLabel = new javax.swing.JLabel();
        appDirectoryTextField = new javax.swing.JTextField();
        appDirectoryBrowseButton = new javax.swing.JButton();

        org.openide.awt.Mnemonics.setLocalizedText(enabledCheckBox, org.openide.util.NbBundle.getMessage(Laravel4CustomizerPanel.class, "Laravel4CustomizerPanel.enabledCheckBox.text")); // NOI18N

        org.openide.awt.Mnemonics.setLocalizedText(enabledInfoLabel, org.openide.util.NbBundle.getMessage(Laravel4CustomizerPanel.class, "Laravel4CustomizerPanel.enabledInfoLabel.text")); // NOI18N

        org.openide.awt.Mnemonics.setLocalizedText(appDirectoryLabel, org.openide.util.NbBundle.getMessage(Laravel4CustomizerPanel.class, "Laravel4CustomizerPanel.appDirectoryLabel.text")); // NOI18N

        appDirectoryTextField.setText(org.openide.util.NbBundle.getMessage(Laravel4CustomizerPanel.class, "Laravel4CustomizerPanel.appDirectoryTextField.text")); // NOI18N

        org.openide.awt.Mnemonics.setLocalizedText(appDirectoryBrowseButton, org.openide.util.NbBundle.getMessage(Laravel4CustomizerPanel.class, "Laravel4CustomizerPanel.appDirectoryBrowseButton.text")); // NOI18N
        appDirectoryBrowseButton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                appDirectoryBrowseButtonActionPerformed(evt);
            }
        });

        org.jdesktop.layout.GroupLayout layout = new org.jdesktop.layout.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(org.jdesktop.layout.GroupLayout.LEADING)
            .add(layout.createSequentialGroup()
                .add(layout.createParallelGroup(org.jdesktop.layout.GroupLayout.LEADING)
                    .add(enabledCheckBox)
                    .add(layout.createSequentialGroup()
                        .add(29, 29, 29)
                        .add(enabledInfoLabel)))
                .add(0, 101, Short.MAX_VALUE))
            .add(layout.createSequentialGroup()
                .add(appDirectoryLabel)
                .addPreferredGap(org.jdesktop.layout.LayoutStyle.RELATED)
                .add(appDirectoryTextField)
                .addPreferredGap(org.jdesktop.layout.LayoutStyle.RELATED)
                .add(appDirectoryBrowseButton))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(org.jdesktop.layout.GroupLayout.LEADING)
            .add(layout.createSequentialGroup()
                .add(enabledCheckBox)
                .addPreferredGap(org.jdesktop.layout.LayoutStyle.RELATED)
                .add(enabledInfoLabel)
                .addPreferredGap(org.jdesktop.layout.LayoutStyle.UNRELATED)
                .add(layout.createParallelGroup(org.jdesktop.layout.GroupLayout.BASELINE)
                    .add(appDirectoryLabel)
                    .add(appDirectoryTextField, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE, org.jdesktop.layout.GroupLayout.DEFAULT_SIZE, org.jdesktop.layout.GroupLayout.PREFERRED_SIZE)
                    .add(appDirectoryBrowseButton)))
        );
    }// </editor-fold>//GEN-END:initComponents

    @NbBundle.Messages("Laravel4CustomizerPanel.browseAppDir.title=Select \"app\" directory")
    private void appDirectoryBrowseButtonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_appDirectoryBrowseButtonActionPerformed
        // TODO add your handling code here:
        File appDirectory = new FileChooserBuilder(Laravel4CustomizerPanel.class)
                .setTitle(Bundle.Laravel4CustomizerPanel_browseAppDir_title())
                .setDirectoriesOnly(true)
                .setDefaultWorkingDirectory(FileUtil.toFile(source))
                .forceUseOfDefaultWorkingDirectory(true)
                .showOpenDialog();
        if (appDirectory != null) {
            appDirectory = FileUtil.normalizeFile(appDirectory);
            FileObject fo = FileUtil.toFileObject(appDirectory);
            
            if (FileUtil.isParentOf(source, fo)) {
                // it is ok
                String relativePath = FileUtil.getRelativePath(source, fo);
                assert relativePath != null : source + " not parent of " + fo;
                setAppDirectory(relativePath);
            } else {
                // not ok
                appDirectoryTextField.setText(appDirectory.getAbsolutePath());
            }
        }
    }//GEN-LAST:event_appDirectoryBrowseButtonActionPerformed

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton appDirectoryBrowseButton;
    private javax.swing.JLabel appDirectoryLabel;
    private javax.swing.JTextField appDirectoryTextField;
    private javax.swing.JCheckBox enabledCheckBox;
    private javax.swing.JLabel enabledInfoLabel;
    // End of variables declaration//GEN-END:variables

}
