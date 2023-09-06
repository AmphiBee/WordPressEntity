<?php

declare(strict_types=1);

namespace Pollen\Entity\Traits;

/**
 * The ArgumentHelper class is a trait that provides methods to extract arguments from properties using getter methods.
 */
trait ArgumentTranslater
{
    /**
     * Unused class. Need for the pollen framework.
     */
    protected function translateArguments(array $args, string $entity, array $keyToTranslate = [
        'label',
        'labels.*',
        'names.singular',
        'names.plural',
    ]): array
    {
        return $args;
    }
}
