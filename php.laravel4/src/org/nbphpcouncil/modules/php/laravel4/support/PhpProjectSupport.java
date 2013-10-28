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
import org.netbeans.api.project.FileOwnerQuery;
import org.netbeans.api.project.Project;
import org.netbeans.spi.project.support.ant.AntProjectHelper;
import org.netbeans.spi.project.support.ant.EditableProperties;
import org.netbeans.spi.project.support.ant.PropertyUtils;
import org.openide.filesystems.FileObject;
import org.openide.filesystems.FileUtil;

/**
 * PHP project support for Laravel4 PHP framework.
 */
public class PhpProjectSupport {

    private static final String NB_PROJECT_DIRECTORY = "nbproject"; // NOI18N
    private static final String INCLUDE_PATH = "include.path"; // NOI18N
    private static final String REFERENCE_ID_PREFIX = "file.reference.";

    public static Project getProject(FileObject fo) {
        return FileOwnerQuery.getOwner(fo);
    }

    public static FileObject getProjectDirectory(FileObject fo) {
        FileObject projectDirectory = null;

        Project project = getProject(fo);

        if (project != null) {
            projectDirectory = project.getProjectDirectory();
        }

        return projectDirectory;
    }

    public static FileObject getNbProjectDirectory(FileObject fo) {
        FileObject nbProjectDirectory = null;
        FileObject projectDirectory = getProjectDirectory(fo);

        if (projectDirectory != null) {
            nbProjectDirectory = projectDirectory.getFileObject(NB_PROJECT_DIRECTORY);
        }

        return nbProjectDirectory;
    }

    public static String getIncludePath(Project project) {
        assert project != null;

        String includePath = null;
        AntProjectHelper helper = getProjectHelper(project);

        if (helper != null) {
            EditableProperties properties = helper.getProperties(AntProjectHelper.PROJECT_PROPERTIES_PATH);

            if (properties != null) {
                includePath = properties.getProperty(INCLUDE_PATH);
            }
        }

        return includePath;
    }

    public static String[] getIncludePathArray(Project project) {
        String includePath = getIncludePath(project);

        return PropertyUtils.tokenizePath(includePath == null ? "" : includePath);
    }

    public static void setIncludePath(Project project, String includePath) {
        assert project != null;

        AntProjectHelper helper = getProjectHelper(project);

        if (helper != null) {
            EditableProperties properties = helper.getProperties(AntProjectHelper.PROJECT_PROPERTIES_PATH);

            if (properties != null) {
                String referencePath = createForeignFileReference(project, includePath);
                String referencePathProperty = "${" + referencePath + "}";
                String[] referencePathProperties = getIncludePathArray(project);

                if (!Utils.contains(referencePathProperties, referencePathProperty)) {
                    int length = referencePathProperties.length;
                    String[] newArray = new String[length + 1];
                    System.arraycopy(referencePathProperties, 0, newArray, 0, length);
                    newArray[length] = referencePathProperty;
                    referencePathProperties = newArray;
                }

                properties.setProperty(referencePath, includePath);
                properties.setProperty(INCLUDE_PATH, Utils.join(referencePathProperties, ":")); // NOI18N

                helper.putProperties(AntProjectHelper.PROJECT_PROPERTIES_PATH, properties);
            }
        }
    }

    private static AntProjectHelper getProjectHelper(Project project) {
        assert project != null;

        return project.getLookup().lookup(AntProjectHelper.class);
    }

    private static String createForeignFileReference(final Project project, final String path) {
        File projectDirectory = FileUtil.toFile(project.getProjectDirectory());
        File normalizedFile = FileUtil.normalizeFile(PropertyUtils.resolveFile(projectDirectory, path));

        String property = normalizedFile.getName();

        if (normalizedFile.isDirectory() && normalizedFile.getParentFile() != null) {
            property = normalizedFile.getParentFile().getName() + "-" + property;
        }

        return REFERENCE_ID_PREFIX + property;
    }
}
