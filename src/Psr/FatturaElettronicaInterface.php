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

namespace SerendipityHQ\Component\FatturaElettronica\Psr;

/**
 * Represents an italian electronic invoice.
 */
interface FatturaElettronicaInterface
{
    /**
     * @return HeaderInterface
     */
    public function getHeader(): HeaderInterface;

    /**
     * @param int $position
     *
     * @return BodyInterface
     */
    public function getBody(int $position = 0);
}
