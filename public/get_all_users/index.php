<?php

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

$data = require_once __DIR__ . "../../../api_core/database.php";

$usernames = [];
foreach ($data as $item) {
  $usernames[] = $item['username'];
}

echo Response::json(200, "success", $usernames);
