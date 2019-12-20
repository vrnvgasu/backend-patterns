<?php


namespace Src\dmitrii\creational_design_patterns\pool;


class Worker
{
    public $evaluate;
    protected $key;
    protected $timeForCreation;

    /**
     * Создание объекта может занимать много ресурсов
     * Worker constructor.
     * @param string $key
     * @param int $param
     */
    public function __construct(string $key, int $param)
    {
        $start = time();
        $this->key = $key;
        $this->evaluate = 1;
        for ($i = 1; $i <= $param; $i++) {
            $this->evaluate *= $i;
        }

        $this->timeForCreation = round((time() - $start)) ;
        $this->timeForCreation .= ' секунд';
    }

    /**
     * @return string
     */
    public function getKet(): string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getTimeForCreation(): string
    {
        return $this->timeForCreation;
    }
}