<?php
namespace LicenseUpdater;

try {
    $apiManager = require 'ApiManager.php';
    $apiManager->serverStoreLicense();
    $apiManager->restartPhp();
}
catch (\Exception $e) {
    echo $e->getMessage();
    exit(1);
}