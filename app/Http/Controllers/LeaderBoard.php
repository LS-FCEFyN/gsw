<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderBoard extends Controller
{
    public function getLeaderBoard()
    {
        return response()->json([
            'message' => 'Get LeaderBoard!'
        ]);
    }

    public function postLeaderBoard(Request $request)
    {
        return response()->json([
            'message' => 'Post LeaderBoard!'
        ]);
    }
}
