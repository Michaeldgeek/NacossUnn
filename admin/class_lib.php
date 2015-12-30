<?php
/*
 * Global definition of constants 
 * used throughout the entire webpage
 */
/**
 * Copyright 2015 NACOSS UNN Developers Group (NDG).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 */
define("DEFAULT_DB_NAME", "nacossu1_default"); //Default database name (Assuming there might be need for multiple databases)
define("DB_HOSTNAME", "localhost"); //Database hostname
define("DB_USERNAME", "root"); //Database username
define("DB_PASSWORD", ""); //Database password
define("HOSTNAME", "http://localhost/nacoss/");

/* Document root
 * If this change, 
 * you should also check /cpanel/class_lib.php. Modify required constants.php path appropriately
 */
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/");

define("NDG_HOMEPAGE", "http://ndg.nacossunn.org"); //NDG Homepage
define("CPANEL_URL", HOSTNAME . "admin/"); //Location of cpanel
define("LIBRARY_UPLOAD_DIR", 'uploads/files/');
define("ALUMNI_HOMEPAGE", "http://alumni.nacossunn.org"); //Alumni Homepage
define("FORUM_HOMEPAGE", "http://forum.nacossunn.org"); //ForumHomepage 
?>
<?php

/*
 * Copyright 2015 NACOSS UNN Developers Group (NDG).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

//require_once "../constants.php";
require_once 'AdminUtility.php';
require_once 'Admin.php';