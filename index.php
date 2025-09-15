<?php

use Util\RoutesUtil;
use Validator\RequestValidator;

include 'bootstrap.php';

try {
    $RequestValidator = new RequestValidator(RoutesUtil::getRotas());
} catch (Exception $exception) {
    echo $exception->getMessage();
}
