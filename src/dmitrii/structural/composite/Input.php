<?php

namespace Src\dmitrii\structural\composite;

class Input implements CompositeInterface
{
    /** @var string  */
    protected string $name;
    /** @var string  */
    protected string $type;
    /** @var string  */
    protected string $value;

    /**
     * Input constructor.
     * @param string $name
     * @param string $type
     * @param string $value
     */
    public function __construct(string $name, string $type = 'text', string $value = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return '<input type="' . $this->type . '" name="' . $this->name . '" value="' . $this->value . '">';
    }
}
