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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Header\DatiTrasmissione;

use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione\ContattiTrasmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

/**
 * {@inheritdoc}
 */
final class ContattiTrasmittente implements ContattiTrasmittenteInterface
{
    private $telefono;
    private $email;

    /**
     * @param TelefonoTypeInterface $telefono
     * @param EmailTypeInterface    $email
     */
    public function __construct(TelefonoTypeInterface $telefono, EmailTypeInterface $email)
    {
        $this->telefono = $telefono;
        $this->email    = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelefono(): ?TelefonoTypeInterface
    {
        return $this->telefono;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): ?EmailTypeInterface
    {
        return $this->email;
    }
}
