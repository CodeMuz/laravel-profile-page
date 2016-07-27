<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProfileTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testNavigationIsWorking(){

        $page = $this->visit('/')
            ->see('web developer');

        //Visit Work Page
        $page->click('Work')
            ->seePageIs('/work')
            ->see('Professional work and experience');

        //Visit About Page
        $page->click('About')
            ->seePageIs('/about')
            ->see('About me');

        //Visit
        $page->click('Contact')
            ->seePageIs('/contact');

    }


    /**
     * Create a name which will fail the validation
     */
    public function testContactForm()
    {

        $name = "";
        for($i = 0 ; $i < 300 ; $i++){
            $name = $name.'A';
        }

        $this->visit('/')
            ->click('Contact')
            ->type($name,'name')
            ->type('abc@test.com', 'email')
            ->type('hello', 'subject')
            ->type('test content message', 'message')
            ->press('submit')
            ->see('Whoops! Something went wrong!');
    }



}
