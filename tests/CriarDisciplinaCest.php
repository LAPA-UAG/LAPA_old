<?php 

class CriarDisciplinaCest
{
    public function _before(AcceptanceTester $Teste)
    {
        //
    }

    // tests
    public function tryToTest(AcceptanceTester $Teste)
    {
        $Teste->amGoingTo('criar uma nova disciplina chamada Engenharia de Software');
        $Teste->amOnPage('/admin/disciplinas');
        $Teste->click('Adicionar');
        $Teste->fillField('nome', 'Engenharia de Software');
        $Teste->click('Adicionar');
        $Teste->see('Engenharia de Software');
    }
}
