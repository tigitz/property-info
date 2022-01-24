<?php

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

class GenericDummy
{
    /**
     * @var TypeVariableDummy<string>
     */
    public $stringType;

    /**
     * @var TypeVariableDummy<\DateTime>
     */
    public $dateTimeType;

    /**
     * @var TypeVariableDummy<TypeVariableDummy<\DateTime>>
     */
    public $nestedGenericDateTimeType;

    /**
     * @var ?TypeVariableDummy<\DateTime>
     */
    public $nullableDateTimeType;

    /**
     * @var array<string, string>
     */
    public $arrayOfStringWithKeyAsStringType;
}
