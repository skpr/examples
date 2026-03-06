<?php

namespace App\Route;

class Headers {

  public static function render(): int {
    $headers = getallheaders();
    header('Content-Type: application/json');
    echo json_encode($headers);

    return 0;
  }

}
