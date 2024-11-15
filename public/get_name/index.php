<?php

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

$data = require_once __DIR__ . "../../../api_core/database.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];
} else {
  echo Response::json(400, "error", "missing parameter id");
  exit;
}

if ($id < 0 || $id > count($data) - 1) {
  echo Response::json(400, "error", "user not found");
}

echo Response::json(200, "success", $data[$id]);
