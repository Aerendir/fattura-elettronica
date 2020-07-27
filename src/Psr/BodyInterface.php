<?php

declare(strict_types=1);

/*
 * This file is part of the Serendipity HQ Fattura Elettronica Component.
 *
 * Copyright (c) Adamo Aerendir Crespi <aerendir@serendipityhq.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
