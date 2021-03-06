<?php
namespace Robusto\Enum;

/**
 * Interface for enumerations.
 *
 * @author Jarddel Antunes
 * @package Robusto\Enum
 * @copyright 2017 Robusto Enum
 */
interface EnumInterface
{
    public function getValue();

    public function setValue($value);
}
