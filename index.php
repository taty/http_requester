<?php
require_once 'HTTPClient.class.php';

$client = new HTTPClient();
echo $client->getContent();

