<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReminderRequest;
use App\Http\Resources\ReminderResource;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return ReminderResource::collection(Reminder::where('user_id', auth()->user()->id)->paginate(25));
    }

    public function store(StoreReminderRequest $request)
    {
        $reminder = Reminder::create($request->all() + ['user_id' => auth()->user()->id]);

        return new ReminderResource($reminder);
    }

    public function show(Reminder $reminder)
    {
        return new ReminderResource($reminder);
    }

    public function update(Request $request, Reminder $reminder)
    {

        $reminder->update($request->all() + ['user_id' => auth()->user()->id]);

        return new ReminderResource($reminder);
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return response()->json(null, 204);
    }
}
