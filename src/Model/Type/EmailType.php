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

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;

/**
 * {@inheritdoc}
 */
final class EmailType implements EmailTypeInterface
{
    /** @var string $email */
    private $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
