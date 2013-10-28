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
package org.nbphpcouncil.modules.php.laravel4.preferences;

import java.util.prefs.Preferences;
import org.netbeans.modules.php.api.phpmodule.PhpModule;
import org.nbphpcouncil.modules.php.laravel4.Laravel4PhpFrameworkProvider;

/**
 * Preferences for Laravel4 PHP framework.
 */
public class Laravel4Preferences {

    private static final String ENABLED = "enabled"; // NOI18N
    private static final String APP_DIRECTORY_PATH = "appDirectory-path"; // NOI18N
    private static final String DEFAULT_APP_DIRECTORY_PATH = "app"; // NOI18N

    private Laravel4Preferences() {
    }

    @org.netbeans.api.annotations.common.SuppressWarnings("NP_BOOLEAN_RETURN_NULL")
    public static Boolean isEnabled(PhpModule module) {
        String enabled = getPreferences(module).get(ENABLED, null);
        if (enabled == null) {
            return null;
        }
        return Boolean.valueOf(enabled);
    }

    public static void setEnabled(PhpModule module, boolean enabled) {
        getPreferences(module).putBoolean(ENABLED, enabled);
    }

    public static String getAppDirectory(PhpModule module) {
        return getPreferences(module).get(APP_DIRECTORY_PATH, DEFAULT_APP_DIRECTORY_PATH);
    }

    public static void setAppDirectory(PhpModule phpModule, String appDirectoryPath) {
        if (appDirectoryPath.equals(DEFAULT_APP_DIRECTORY_PATH)) {
            getPreferences(phpModule).remove(APP_DIRECTORY_PATH);
        } else {
            getPreferences(phpModule).put(APP_DIRECTORY_PATH, appDirectoryPath);
        }
    }

    private static Preferences getPreferences(PhpModule phpModule) {
        return phpModule.getPreferences(Laravel4PhpFrameworkProvider.class, true);
    }
}
