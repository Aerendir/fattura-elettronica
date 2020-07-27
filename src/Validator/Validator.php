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

namespace SerendipityHQ\Component\FatturaElettronica\Validator;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Validates the XML of a FatturaElettronica.
 */
final class Validator
{
    /** @var string[] $schemas */
    private $schemas = ['1.2'];

    /** @var array */
    private $errors = [];

    /**
     * @param \SimpleXMLElement $simpleXMLElement
     */
    public function validateSimpleXMLElement(\SimpleXMLElement $simpleXMLElement): void
    {
        $toXML = $simpleXMLElement->saveXML();

        $this->validateXMLString($toXML);
    }

    /**
     * @param string      $xml
     * @param string|null $schemaVersion
     */
    public function validateXMLString(string $xml, string $schemaVersion = null): void
    {
        \libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadXML($xml);

        $this->validate($dom, $schemaVersion);
    }

    /**
     * @param \DOMDocument $document
     * @param string|null  $schemaVersion
     */
    public function validate(\DOMDocument $document, ?string $schemaVersion = null): self
    {
        \libxml_use_internal_errors(true);

        if (false === $document->schemaValidate($this->getSchema($schemaVersion))) {
            $this->catchErrors();
        }
        \libxml_use_internal_errors(false);

        return $this;
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return empty($this->errors);
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Processes the XML errors found during validation.
     */
    private function catchErrors(): void
    {
        $this->errors = \libxml_get_errors();
        \libxml_clear_errors();
    }

    /**
     * @param string|null $schemaVersion
     *
     * @return string
     */
    private function getSchema(?string $schemaVersion): string
    {
        $schemaVersion = $schemaVersion ?? \end($this->schemas);
        $finder        = new Finder();
        $iterator      = $finder->name($schemaVersion . '.xsd')->in(__DIR__ . DIRECTORY_SEPARATOR . '../Schemas')->getIterator();
        $iterator->rewind();
        /** @var SplFileInfo $schema */
        $schema = $iterator->current();

        return $schema->getPathname();
    }
}
