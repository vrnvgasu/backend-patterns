<?php

namespace Src\dmitrii\creational_design_patterns\builder\sql_builder;

class MySqlBuilder implements SqlBuilder
{
    protected $table;
    protected $select;
    protected $where;

    /**
     * @param string $tableName
     * @return SqlBuilder
     */
    public static function table(string $tableName): SqlBuilder
    {
        $builder = new static;
        $builder->table = $tableName;
        return $builder;
    }

    /**
     * @param array $columns
     * @return SqlBuilder
     * @throws \Exception
     */
    public function select(array $columns): SqlBuilder
    {
        $this->select = "SELECT";
        foreach ($columns as $column) {
            if (!is_string($column)) {
                throw new \Exception($column . ' must be a string.');
            }

            $this->select .= ' `' . $this->table . '.' . $column . '`,';
        }

        $this->select  = trim($this->select, ',');
        $this->select .= ' FROM `' . $this->table . '`';

        return $this;
    }

    /**
     * @param string $column
     * @param string $condition
     * @param $var
     * @return SqlBuilder
     * @throws \Exception
     */
    public function where(string $column, string $condition, $var = null): SqlBuilder
    {
        if ($this->where) {
            $this->where .= ' AND';
        } else {
            $this->where .= ' WHERE';
        }
        $this->where .= ' `' . $this->table . '`.`' . $column . '` ' . $condition . ' \'' . static::validate($var) . '\'';

        return $this;
    }

    /**
     * @return string
     */
    public function getSqlRaw(): string
    {
        return $this->select . $this->where;
    }

    /**
     * @param string $column
     * @param string $condition
     * @param $var
     * @return SqlBuilder
     */
    public function orWhere(string $column, string $condition, $var): SqlBuilder
    {
        $this->where .= ' OR';
        $this->where .= ' `' . $this->table . '`.`' . $column . '` ' . $condition . ' \'' . static::validate($var) . '\'';

        return $this;
    }

    protected static function validate($var): string
    {
        /**
         * Подготавливаем данные
         */

        return $var;
    }
}
