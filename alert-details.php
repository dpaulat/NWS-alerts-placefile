<?php
$doShowDetails = true;
$doShowMarine  = false;
if (isset($_GET['include'])) {
    $includeAlerts = explode(",", $_GET['include']);
}
include("NWS_Placefile_Alerts.php");