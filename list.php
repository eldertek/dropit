<?php

// Check if we are a user
if (!\OCP\Server::get(\OCP\IUserSession::class)->isLoggedIn()) {
	header('Location: ' . \OCP\Server::get(\OCP\IURLGenerator::class)->linkToRouteAbsolute('core.login.showLoginForm'));
	exit();
}

$tmpl = new OCP\Template('dropit', 'drop', '');
\OCP\Util::addScript('dropit', 'dist/dropzone');
\OCP\Util::addScript('dropit', 'drop');
\OCP\Util::addStyle('dropit', 'drop');
$tmpl->printPage();
