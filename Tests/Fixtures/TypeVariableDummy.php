<?php

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

/**
 * @template TypeProperty
 * @template TypeGetter
 */
class TypeVariableDummy
{
    /**
     * @var TypeProperty
     */
    public $typeVariableProperty;

    public $typeVariableFromGetter;

    /**
     * @return TypeGetter
     */
    public function getTypeVariableFromGetter()
    {
        return $this->typeVariableFromGetter;
    }
}
