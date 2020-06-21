<?php

namespace Src\dmitrii\structural\composite;

class Label implements CompositeInterface
{
    /** @var string  */
    protected string $name;
    /** @var CompositeInterface  */
    protected CompositeInterface $elem;

    /**
     * Input constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param CompositeInterface $elem
     * @return $this
     */
    public function setElem(CompositeInterface $elem): self
    {
        $this->elem = $elem;

        return $this;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = '<label>' . $this->name;

        if ($this->elem) {
            $output .= $this->elem->render();
        }

        $output .= '</label>';

        return $output;
    }
}
