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

namespace SerendipityHQ\Component\FatturaElettronica\Psr\Type;

/**
 * Represents an italian electronic invoice.
 */
interface IdFiscaleTypeInterface
{
    /**
     * @return string
     */
    public function getIdPaese(): string;

    /**
     * @return string
     */
    public function getIdCodice(): string;
}
