<?php

namespace Src\dmitrii\structural\composite;

class Form implements CompositeInterface
{
    /** @var array  */
    protected array $fields = [];

    /**
     * @param CompositeInterface $elem
     * @return $this
     */
    public function addElem(CompositeInterface $elem): self
    {
        $this->fields[] = $elem;

        return $this;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $output = '<form>';

        foreach ($this->fields as $field) {
            $output .= $field->render();
        }

        $output .= '</form>';

        return $output;
    }
}
