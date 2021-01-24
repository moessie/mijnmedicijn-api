<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicineRequest;
use App\Http\Resources\MedicineResource;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function index()
    {
        return MedicineResource::collection(Medicine::paginate(25));
    }

    public function store(StoreMedicineRequest $request)
    {
        $medicine = Medicine::create($request->all());

        return new MedicineResource($medicine);
    }

    public function show(Medicine $medicine)
    {
        return new MedicineResource($medicine);
    }

    public function update(Request $request, Medicine $medicine)
    {

        $medicine->update($request->only(['name', 'description']));

        return new MedicineResource($medicine);
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();

        return response()->json(null, 204);
    }
}
