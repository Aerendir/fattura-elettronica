<?php
// Fattura singola verso soggetto privato con una sola linea di dettaglio
// https://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/IT01234567890_FPR01.xml

include '../vendor/autoload.php';

$root = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica
xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2"
xmlns:ds="http://www.w3.org/2000/09/xmldsig#"
versione="FPR12"
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd"
>
    <FatturaElettronicaHeader />
</p:FatturaElettronica>
XML;

$validator = new \SerendipityHQ\Component\FatturaElettronica\Validator\Validator();
$validator->validateXMLString($root);

dump($validator->getErrors(), $root);
