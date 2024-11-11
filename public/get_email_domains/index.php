<?php

require_once __DIR__ . "../../../api_core/config.php";
require_once __DIR__ . "../../../api_core/Response.php";

$data = require_once __DIR__ . "../../../api_core/database.php";

$email_domains = [];
foreach ($data as $item) {
  if (filter_var($item["email"], FILTER_VALIDATE_EMAIL)) {
    $email_domain = explode("@", $item["email"])[1];

    if (!in_array($email_domain, $email_domains)) {
      $email_domains[] = $email_domain;
    }
  }
}

echo Response::json(200, "success", $email_domains);
