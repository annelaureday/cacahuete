<?php

namespace App\Controller;

class DefaultController
{

    public function index()
    {
        $tab = array("toto"=>22, "tata"=>11);
        return new response(
            json_encode($tab)
        );
    }


}