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

use SerendipityHQ\Component\FatturaElettronica\Psr\Header\TelefonoTypeInterface;

/**
 * {@inheritdoc}
 */
final class TelefonoType implements TelefonoTypeInterface
{
    /** @var string $telefono */
    private $telefono;

    /**
     * @param string $telefono
     */
    public function __construct(string $telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelefono(): string
    {
        return $this->telefono;
    }
}
