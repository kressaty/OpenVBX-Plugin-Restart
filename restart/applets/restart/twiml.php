<?php
$response = new Response();

$url = AppletInstance::getBaseURI();
$response->addRedirect($url.'/start');
$response->Respond();
?>