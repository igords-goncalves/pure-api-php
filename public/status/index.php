<?php
// Arquivo de rotas

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

echo Response::json(200, "success", [
  "version" => API_VERSION,
  "status" => API_IS_ACTIVE
]);
