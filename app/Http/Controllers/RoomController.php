<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomController extends Controller
{
    public function index()
    {
        try {
            $roomTypes = RoomType::all();
            return response()->json($roomTypes);
        } catch (\Throwable $e) {
            return response()->json([
                'error' => 'Serialization error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
}
