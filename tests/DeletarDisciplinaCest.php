<?php 

class DeletarDisciplinaCest
{
    public function _before(AcceptanceTester $Teste)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $Teste)
    {
        $Teste->amGoingTo('deletar a disciplina Engenharia de Softare Editado');
        $Teste->amOnPage('/admin/disciplinas');
        $Teste->see('Engenharia de Software Editado', '//table/tbody/tr[1]');
        $Teste->click('Deletar', '//table/tbody/tr[1]');
        $Teste->acceptPopup();
        $Teste->dontSee('Engenharia de Software Editado');
    }
}
