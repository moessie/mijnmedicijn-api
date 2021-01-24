<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = data_get($request, 'search', null);

        $medicines = Medicine::where('name', 'like', "%{$data}%")->get();

        return resposne()->json(['data' => $medicines]);
    }
}
