<?php

namespace Tests\dmitrii\structural\composite;

use PHPUnit\Framework\TestCase;
use Src\dmitrii\structural\composite\Form;
use Src\dmitrii\structural\composite\Input;
use Src\dmitrii\structural\composite\Label;

class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $form = new Form();

        $inputEmail = new Input('email', 'email', 'your@email.com');
        $labelEmail = new Label('EMAIL: ');
        $labelEmail->setElem($inputEmail);

        $inputPass = new Input('password', 'password', 'password');
        $labelPass = new Label('PASSWORD: ');
        $labelPass->setElem($inputPass);

        $submit = new Input('submit', 'submit', 'submit');

        $form->addElem($labelEmail)->addElem($labelPass)->addElem($submit);

        $html = '<form>'.
            '<label>EMAIL: <input type="email" name="email" value="your@email.com"></label>' .
            '<label>PASSWORD: <input type="password" name="password" value="password"></label>' .
            '<input type="submit" name="submit" value="submit">' .
            '</form>';
        $this->assertEquals($html, $form->render());
    }
}
