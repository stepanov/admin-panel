<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }


}
