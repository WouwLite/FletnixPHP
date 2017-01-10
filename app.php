<?php

/*
 * config/app.php
*/

/* General */
// The title of the application
$title = 'Fletnix';

/* Environment & debugging */
// Environment stages: Development, Staging, Production
$environment = 'Development';
$debug = 'true';

/* Language & locale */
// Don't change unless there is a language file present in the database !!
$language = 'Dutch';
$locale = 'nl';

/* URL */
// Select root path (for correct routing)
// WARNING: Always add a slash (/) to the end of the path !!
// Domain
$abspath = 'https://fletnix.nl/demo';
// Relative path
$relpath = ($_SERVER["DOCUMENT_ROOT"] . '/demo');
define(BASE_PATH, dirname(__FILE__));

// Select the url that matches your case
// TRUE = absolute path (i.e.: https://www.yourdomain.com)
// FALSE = relative path (i.e.: /var/www/yourdomain.com/)
$pathtype = false;

// Image / style location
// Do you host your images on the locally or are they on an other server (like a CDN)?
// TRUE = Your images AND stylesheets are hosted on an external server (which functions as a Content Delivery Network)
// FALSE = Your images AND stylesheets are hosted on the local machine (/storage/OLD-css and /storage/images)
$cdn = true;
$cdnurl = 'https://cdn.wouwlite.eu/fletnix.nl/';


/*
 * DON'T EDIT DATA BELOW THIS LINE
 */

// Define which url path to choose
if ($pathtype = true) {
    $urlpath = $abspath;
} else {
    $urlpath = $relpath;
}