<?php
class LoginCest 
{    
    public function _before(AcceptanceTester $Teste)
    {
        $Teste->amOnPage('/');
    }

    public function loginSuccessfully()
    {
        // write a positive login test 
    }
    
    public function loginWithInvalidPassword()
    {
        // write a negative login test
    }       
}