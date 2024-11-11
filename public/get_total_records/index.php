<?php

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

$data = require_once __DIR__ . "../../../api_core/database.php";
echo Response::json(200, "sucess", ["total_records" => count($data)]);
