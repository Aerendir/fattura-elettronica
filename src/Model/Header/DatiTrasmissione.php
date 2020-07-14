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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Header;

use SerendipityHQ\Component\FatturaElettronica\Property\DOMAware;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione\ContattiTrasmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissioneInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\IdFiscaleTypeInterface;

/**
 * {@inheritdoc}
 */
final class DatiTrasmissione implements DatiTrasmissioneInterface
{
    use DOMAware;

    /** @var IdFiscaleTypeInterface $idTrasmittente */
    private $idTrasmittente;

    /** @var string $progressivoInvio */
    private $progressivoInvio;

    /**
     * @var string One between
     *             DatiTrasmissioneInterface::FORMATO_TRASMISSIONE_FPA12 and
     *             DatiTrasmissioneInterface::FORMATO_TRASMISSIONE_FPR12
     */
    private $formatoTrasmissione;

    /** @var string $codiceDestinatario */
    private $codiceDestinatario;

    /** @var ContattiTrasmittenteInterface|null $contattiTrasmittente */
    private $contattiTrasmittente;

    /** @var EmailTypeInterface|null $pecDestinatario */
    private $pecDestinatario;

    /**
     * {@inheritdoc}
     */
    public function getIdTrasmittente(): IdFiscaleTypeInterface
    {
        return $this->idTrasmittente;
    }

    /**
     * {@inheritdoc}
     */
    public function getProgressivoInvio(): string
    {
        return $this->progressivoInvio;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatoTrasmissione(): string
    {
        return $this->formatoTrasmissione;
    }

    /**
     * {@inheritdoc}
     */
    public function getCodiceDestinatario(): string
    {
        return $this->codiceDestinatario;
    }

    /**
     * {@inheritdoc}
     */
    public function getContattiTrasmittente(): ? ContattiTrasmittenteInterface
    {
        return $this->contattiTrasmittente;
    }

    /**
     * {@inheritdoc}
     */
    public function getPecDestinatario(): ? EmailTypeInterface
    {
        return $this->pecDestinatario;
    }
}
