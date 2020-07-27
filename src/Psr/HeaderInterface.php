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

use SerendipityHQ\Component\FatturaElettronica\Psr\Header\CedentePrestatoreInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\CessionarioCommittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissioneInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\RappresentanteFiscaleInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\SoggettoEmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\TerzoIntermediarioOSoggettoEmittenteInterface;

/**
 * Represents the Header of an italian electronic invoice.
 */
interface HeaderInterface
{
    /**
     * @return DatiTrasmissioneInterface
     */
    public function getDatiTrasmissione(): DatiTrasmissioneInterface;

    /**
     * @return CedentePrestatoreInterface
     */
    public function getCedentePrestatore(): CedentePrestatoreInterface;

    /**
     * @return RappresentanteFiscaleInterface|null
     */
    public function getRappresentanteFiscale(): ?RappresentanteFiscaleInterface;

    /**
     * @return CessionarioCommittenteInterface
     */
    public function getCessionarioCommittente(): CessionarioCommittenteInterface;

    /**
     * @return TerzoIntermediarioOSoggettoEmittenteInterface|null
     */
    public function getTerzoIntermediarioOSoggettoEmittente(): ?TerzoIntermediarioOSoggettoEmittenteInterface;

    /**
     * @return SoggettoEmittenteInterface|null
     */
    public function getSoggettoEmittente(): ?SoggettoEmittenteInterface;
}
