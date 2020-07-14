<?php

include '../vendor/autoload.php';

$fpr12 = new \DOMDocument('1.0', 'UTF-8');
$fpr12->createElement('FatturaElettronica');

$validator = new \SerendipityHQ\Component\FatturaElettronica\Validator\Validator();

$validator->validate($fpr12);

dump($validator->getErrors());
