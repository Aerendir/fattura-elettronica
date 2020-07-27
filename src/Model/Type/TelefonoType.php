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

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

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
