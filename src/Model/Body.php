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

namespace SerendipityHQ\Component\FatturaElettronica\Model;

use SerendipityHQ\Component\FatturaElettronica\Psr\BodyInterface;

/**
 * {@inheritdoc}
 */
final class Body implements BodyInterface
{
    private $datiGenerali;
    private $beniServizi;
    private $datiVeicoli;
    private $datiPagamento;
    private $allegati;

    /**
     * {@inheritdoc}
     */
    public function getDatiGenerali(): DatiGeneraliInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiBeniServizi(): BeniServiziInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiVeicoli(): ?DatiVeicoliInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiPagamento(): ?DatiPagamentoInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getAllegati(): ?AllegatiInterface
    {
    }
}
