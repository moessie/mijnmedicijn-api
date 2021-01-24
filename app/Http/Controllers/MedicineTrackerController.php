<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicineTrackerRequest;
use App\Http\Requests\StoreReminderRequest;
use App\Http\Resources\MedicineResource;
use App\Http\Resources\MedicineTrackerResource;
use App\Http\Resources\ReminderResource;
use App\Models\Medicine;
use App\Models\MedicineTracker;
use App\Models\Reminder;
use Illuminate\Http\Request;

class MedicineTrackerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {

        $medicine_name = data_get($request,'medicine_name', null);

        return MedicineTrackerResource::collection(MedicineTracker::where('user_id', auth()->user()->id)
            ->where('medicine_name', $medicine_name)
            ->paginate(25));
    }

    public function store(StoreMedicineTrackerRequest $request)
    {
        $tracker = MedicineTracker::create($request->all() + ['user_id' => auth()->user()->id]);

        return new MedicineTrackerResource($tracker);
    }
}
