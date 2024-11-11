<?php
// Arquivo de rotas

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

if (API_IS_ACTIVE) {
  echo Response::json(200, "success", [
    "version" => API_VERSION,
    "status" => API_IS_ACTIVE
  ]);
} else {
  echo Response::json(200, "success", [
    "version" => API_VERSION,
    "status" => "In maintence!"
  ]);
}
