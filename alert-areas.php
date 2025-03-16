<?php
$doShowDetails = false;
$doShowMarine  = false;
if(isset($_GET['icons'])) {
    $showIcons = ($_GET['icons'] === 'y') ? true : false;
} else {
    $showIcons = false;  # default value is to not show icons
}
if (isset($_GET['include'])) {
    $includeAlerts = explode(",", $_GET['include']);
}
include("NWS_Placefile_Alerts.php");