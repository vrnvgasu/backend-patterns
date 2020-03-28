<?php

namespace Tests\dmitrii\creational_design_patterns\builder;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\creational_design_patterns\builder\sql_builder\MySqlBuilder;
use Src\dmitrii\creational_design_patterns\builder\sql_builder\SqlBuilder;

class SqlBuilderTest extends TestCase
{
    public function testBuilder()
    {
        $builder = MySqlBuilder::table('users')
            ->select(['*'])
            ->where('name', 'like', 'L%')
            ->where('status', '=', 1)
            ->orWhere('client_status', '=', 4);

        $this->assertInstanceOf(SqlBuilder::class, $builder);
        $this->assertEquals("SELECT `users.*` FROM `users` WHERE `users`.`name` like 'L%'" .
            " AND `users`.`status` = '1' OR `users`.`client_status` = '4'", $builder->getSqlRaw());
    }
}
