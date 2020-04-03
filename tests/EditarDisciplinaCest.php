<?php

use \Codeception\Util\Locator;

class EditarDisciplinaCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $Teste)
    {
        $Teste->amGoingTo('editar a disciplina Engenharia de Software mudando o nome para Engenharia de Software Editado');
        $Teste->amOnPage('/admin/disciplinas');
        $Teste->see('Engenharia de Software', '//table/tbody/tr[1]');
        $Teste->click('Editar', '//table/tbody/tr[1]');
        $Teste->fillField('nome', 'Engenharia de Software Editado');
        $Teste->click('Editar');
        $Teste->see('Engenharia de Software Editado');
    }
}
