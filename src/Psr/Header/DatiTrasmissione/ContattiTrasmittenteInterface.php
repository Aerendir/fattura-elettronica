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

namespace SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione;

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

/**
 * Represents Contatti Trasmittente.
 */
interface ContattiTrasmittenteInterface
{
    /**
     * @return TelefonoTypeInterface|null
     */
    public function getTelefono(): ?TelefonoTypeInterface;

    /**
     * @return EmailTypeInterface|null
     */
    public function getEmail(): ?EmailTypeInterface;
}
