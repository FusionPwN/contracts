<?php

declare(strict_types=1);
/**
 * Contains the Shippable interface.
 *
 * @copyright   Copyright (c) 2019 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2019-12-26
 *
 */

namespace Vanilo\Contracts;

use Illuminate\Support\Collection;

interface Shippable
{
    public function getShippingAddress(): ?Collection;

    public function getWeight(): float;

    public function getWeightUnit(): string;
}
