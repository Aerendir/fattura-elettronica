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
