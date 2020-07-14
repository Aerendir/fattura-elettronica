<?php
// Fattura singola verso soggetto privato con una sola linea di dettaglio
// https://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/IT01234567890_FPR01.xml

include '../vendor/autoload.php';

$fattura = \SerendipityHQ\Component\FatturaElettronica\FatturaElettronica::create();
$fattura->getHeader()->getDatiTrasmissione();

$validator = new \SerendipityHQ\Component\FatturaElettronica\Validator\Validator();
$validator->validate($fattura->getDOMDocument());

dump($validator->getErrors(), $fattura->getDOMDocument()->saveXML());
