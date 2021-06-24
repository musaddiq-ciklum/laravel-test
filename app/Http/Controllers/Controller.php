<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function abc12_RE(){
        if(1)
        {
            echo 'test for linting ';
        }
        else

            {
                echo 'else in linting';
            }

        {
            echo 'Test here ...';
        }
    }
}
