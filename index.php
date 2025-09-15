<?php

use Util\RotasUtil;
use Validator\RequestValidator;

include 'bootstrap.php';

try {
    $RequestValidator = new RequestValidator(RotasUtil::getRotas());
} catch (Exception $exception) {
    echo $exception->getMessage();
}
