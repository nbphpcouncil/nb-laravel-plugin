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
package org.nbphpcouncil.modules.php.laravel4.validation;

import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.netbeans.modules.php.api.util.StringUtils;
import org.netbeans.modules.php.api.validation.ValidationResult;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;
import org.openide.util.NbBundle;

/**
 * Customizer validator
 */
public class CustomizerValidator {

    private final PhpModule phpModule;
    private final ValidationResult result = new ValidationResult();

    public CustomizerValidator(PhpModule phpModule) {
        this.phpModule = phpModule;
    }

    public ValidationResult getResult() {
        return new ValidationResult(result);
    }

    public CustomizerValidator validate(String appDirectory) {
        String error = validateAppDirectory(appDirectory);

        if (error != null) {
            result.addError(new ValidationResult.Message("appDirectory", error)); // NOI18N
        }

        return this;
    }

    @NbBundle.Messages({
        "CustomizerValidator.error.sources.invalid=Source Files are invalid.",
        "CustomizerValidator.error.appDirectory.empty=App directory must be set.",
        "CustomizerValidator.error.appDirectory.notChild=App directory must be underneath Source Files.",})
    private String validateAppDirectory(String appDirectory) {
        FileObject sources = phpModule.getSourceDirectory();

        if (sources == null) {
            // broken project
            assert false : "Customizer extender for no sources of: " + phpModule.getName();

            return Bundle.CustomizerValidator_error_sources_invalid();
        }

        if (!StringUtils.hasText(appDirectory)) {
            return Bundle.CustomizerValidator_error_appDirectory_empty();
        }

        FileObject fo = sources.getFileObject(appDirectory);

        if (fo == null || !FileUtil.isParentOf(sources, fo)) {
            return Bundle.CustomizerValidator_error_appDirectory_notChild();
        }

        return null;
    }
}
