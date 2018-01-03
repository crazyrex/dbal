<?php

namespace Doctrine\DBAL;

/**
 * Contains statement parameter types.
 */
class ParameterType
{
    /**
     * Represents the SQL NULL data type.
     *
     * @see \PDO::PARAM_NULL
     */
    public const NULL = \PDO::PARAM_NULL;

    /**
     * Represents the SQL INTEGER data type.
     *
     * @see \PDO::PARAM_INT
     */
    public const INTEGER = \PDO::PARAM_INT;

    /**
     * Represents the SQL CHAR, VARCHAR, or other string data type.
     *
     * @see \PDO::PARAM_STR
     */
    public const STRING = \PDO::PARAM_STR;

    /**
     * Represents the SQL large object data type.
     *
     * @see \PDO::PARAM_LOB
     */
    public const LARGE_OBJECT = \PDO::PARAM_LOB;

    /**
     * Represents a boolean data type.
     *
     * @see \PDO::PARAM_BOOL
     */
    public const BOOLEAN = \PDO::PARAM_BOOL;

    /**
     * This class cannot be instantiated.
     */
    final private function __construct()
    {
    }
}