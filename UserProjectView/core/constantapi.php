<?php
// URL to UserProjectView plugin
define ( 'USERPROJECTVIEW_PLUGIN_URL', config_get_global ( 'path' ) . 'plugins/' . plugin_get_current () . '/' );

// Path to UserProjectView plugin folder
define ( 'USERPROJECTVIEW_PLUGIN_URI', config_get_global ( 'plugin_path' ) . plugin_get_current () . DIRECTORY_SEPARATOR );

// Path to UserProjectView core folder
define ( 'USERPROJECTVIEW_CORE_URI', USERPROJECTVIEW_PLUGIN_URI . 'core' . DIRECTORY_SEPARATOR );

define ( 'PLUGINS_USERPROJECTVIEW_THRESHOLD_LEVEL_DEFAULT', ADMINISTRATOR );
define ( 'PLUGINS_USERPROJECTVIEW_MAX_COLUMNS', 20 );
define ( 'PLUGINS_USERPROJECTVIEW_COLUMN_STAT_DEFAULT', 50 );
define ( 'PLUGINS_USERPROJECTVIEW_COLUMN_IAMTHRESHOLD', 5 );
define ( 'PLUGINS_USERPROJECTVIEW_COLUMN_IAGTHRESHOLD', 30 );
define ( 'PLUGINS_USERPROJECTVIEW_COLUMN_CSTATIGN', OFF );
define ( 'PLUGINS_USERPROJECTVIEW_COLUMN_AMOUNT', 3 );
define ( 'PLUGINS_USERPROJECTVIEW_IAUHBGCOLOR', '#E67C7C' );
define ( 'PLUGINS_USERPROJECTVIEW_URIUHBGCOLOR', '#E67C7C' );
define ( 'PLUGINS_USERPROJECTVIEW_NUIHBGCOLOR', '#FCBDBD' );
define ( 'PLUGINS_USERPROJECTVIEW_ZIHBGCOLOR', '#F8FFCC' );
define ( 'PLUGINS_USERPROJECTVIEW_TAMHBGCOLOR', '#FAD785' );
define ( 'PLUGINS_USERPROJECTVIEW_IGNISSBGColor', '#C2A667' );

define ( 'USERPROJECTVIEW_FEEDBACK_STATUS', 20 );
define ( 'USERPROJECTVIEW_ASSIGNED_STATUS', 50 );
define ( 'USERPROJECTVIEW_RESOLVED_STATUS', 80 );
define ( 'USERPROJECTVIEW_CLOSED_STATUS', 90 );