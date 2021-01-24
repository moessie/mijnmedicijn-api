<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function __invoke(Request $request, $query)
    {

        $medicines = Medicine::where('name', 'like', "%{$query}%")->get();

        return response()->json(['data' => $medicines]);
    }
}