<?php

namespace Src\dmitrii\creational_design_patterns\builder\sql_builder;

interface SqlBuilder
{
    /**
     * @param string $tableName
     * @return SqlBuilder
     */
    public static function table(string $tableName): self;

    /**
     * @param array $columns
     * @return SqlBuilder
     */
    public function select(array $columns): self;

    /**
     * @param string $column
     * @param string $condition
     * @param $var
     * @return SqlBuilder
     */
    public function where(string $column, string $condition, $var): self;

    /**
     * @return string
     */
    public function getSqlRaw(): string;

    /**
     * @param string $column
     * @param string $condition
     * @param $var
     * @return SqlBuilder
     */
    public function orWhere(string $column, string $condition, $var): self;
}
