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

use SerendipityHQ\Component\FatturaElettronica\Psr\Body\AllegatiInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\BeniServiziInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiGeneraliInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiPagamentoInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiVeicoliInterface;

/**
 * Represents the Body of an italian electronic invoice.
 */
interface BodyInterface
{
    /**
     * @return DatiGeneraliInterface
     */
    public function getDatiGenerali(): DatiGeneraliInterface;

    /**
     * @return BeniServiziInterface
     */
    public function getDatiBeniServizi(): BeniServiziInterface;

    /**
     * @return DatiVeicoliInterface|null
     */
    public function getDatiVeicoli(): ?DatiVeicoliInterface;

    /**
     * @return DatiPagamentoInterface|null
     */
    public function getDatiPagamento(): ?DatiPagamentoInterface;

    /**
     * @return AllegatiInterface|null
     */
    public function getAllegati(): ?AllegatiInterface;
}
