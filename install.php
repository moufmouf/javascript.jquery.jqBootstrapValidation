<?php
require_once __DIR__."/../../autoload.php";

use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;
use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("javascript.jqBootstrapValidation",
array(
'vendor/mouf/javascript.jquery.jq-bootstrap-validation/lib/jqBootstrapValidation.js'
		), array(),	array(), false
);

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();
?>