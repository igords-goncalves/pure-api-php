<?php

class Response {
  public static function json($status = 200, $message = "success", $data = null) {
    header("Content-Type: application/json");

    // Chek if API is active
    if (!API_IS_ACTIVE) {
      return json_encode([
        "status" => 400,
        "message" => "Error: Api is not running",
        "api_version" => API_VERSION,
        "time_response" => time(),
        "date" => date("d-M-Y H:i:s"),
        "data" => null,
      ], JSON_PRETTY_PRINT); // Formatação automática do JSO, isso é opcional
    }

    return json_encode([
      "status" => $status,
      "message" => $message,
      "api_version" => API_VERSION,
      "time_response" => time(),
      "date" => date("d-M-Y H:i:s"),
      "data" => $data,
    ], JSON_PRETTY_PRINT);
  }
}
