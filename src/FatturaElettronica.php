<?php

declare(strict_types=1);

/*
 * This file is part of PHP Fattura Elettronica.
 *
 * Copyright Adamo Aerendir Crespi 2018-2019.
 *
 * @author    Adamo Aerendir Crespi <hello@aerendir.me>
 * @copyright Copyright (C) 2018 - 2019 Aerendir. All rights reserved.
 * @license   MIT
 */

namespace SerendipityHQ\Component\FatturaElettronica;
use \SerendipityHQ\Component\FatturaElettronica\Model\FatturaElettronica as FatturaElettronicaModel;
/**
 * Validates the XML of a FatturaElettronica.
 */
class FatturaElettronica
{
    /**
     * Disable the constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Model\FatturaElettronica
     */
    public static function create(): Model\FatturaElettronica
    {
        $document = new \DOMDocument('1.0', 'UTF-8');

        $fatturaElettronicaElement = $document->createElementNS('http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2', 'p:FatturaElettronica');
        $fatturaElettronicaElement->setAttribute('versione', 'FPR12');
        $fatturaElettronicaElement->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $fatturaElettronicaElement->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'schemaLocation', 'http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd');

        $document->appendChild($fatturaElettronicaElement);
        $document->createAttributeNS('http://www.w3.org/2000/09/xmldsig#', 'ds:attr');

        $fatturaElettronica = new FatturaElettronicaModel($document, $fatturaElettronicaElement);

        return $fatturaElettronica;
    }
}
