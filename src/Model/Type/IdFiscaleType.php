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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Type;

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\IdFiscaleTypeInterface;

/**
 * {@inheritdoc}
 */
final class IdFiscaleType implements IdFiscaleTypeInterface
{
    /** @var string $idPaese */
    private $idPaese;

    /** @var string $idCodice */
    private $idCodice;

    /**
     * IdFiscaleType constructor.
     *
     * @param string $idPaese
     * @param string $idCodice
     */
    public function __construct(string $idPaese, string $idCodice)
    {
        $this->idPaese  = $idPaese;
        $this->idCodice = $idCodice;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdPaese(): string
    {
        return $this->idPaese;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdCodice(): string
    {
        return $this->idCodice;
    }
}
