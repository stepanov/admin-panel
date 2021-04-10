<?php

namespace App\Http\Controllers\Api;

use App\Models\Log;
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
        //$this->middleware(['auth']);
    }

    /**
     * Get a list of log records
     */
    public function index()
    {
        $list = Log::all()->paginate();

        return response()->json([
            'status' => 'ok',
            'data' => $list,
        ]);
    }
}

