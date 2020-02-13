<?php

namespace App\Http\Controllers\Pages\NonAuths;

use App\Http\Controllers\Pages\NonAuthController;

class ErrorController extends NonAuthController
{

    public function __construct() {
        parent::__construct();
    }
    //
    public function error404 () {
        return $this->view("error");
    }
}
