<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::orderBy('created_at', 'DESC')->get();
        // dd($admins);
        return view('admin.event.index', compact('events'));
    }

    public function create(Request $request)
    {
        try {
            // dd($request);
            $request->validate([
                'theme' => 'bail|required|string',
                'caption' => 'bail|required',
                'start_date' => 'bail|required',
                'year' => 'nullable|required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'status' => 'bail|nullable',
            ]);
            
            $event = new Event();
            $event->theme = $request->theme;
            $event->caption = $request->caption;
            $event->start_date = $request->start_date;
            $event->year = $request->year;
            $event->status = $request->status ?? 0;
            $event->save();

            return redirect()->back()->with('success', "Event has been created successfully.");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }

    public function edit(Request $request, $event_id)
    {
        try {
            // dd($request);
            $request->validate([
                'theme' => 'bail|required|string',
                'caption' => 'bail|required',
                'start_date' => 'bail|required',
                'year' => 'nullable|required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ',
                'status' => 'bail|nullable',
            ]);
            
            $event = Event::find($event_id);
            $event->theme = $request->theme;
            $event->caption = $request->caption;
            $event->start_date = $request->start_date;
            $event->year = $request->year;
            $event->status = $request->status ?? 0;
            $event->save();

            return redirect()->back()->with('success', "Evnet has been edited successfully.");
        } catch (ValidationException $th) {
            return back()->with('danger', $th->validator->errors()->first())->withInput();
            
        } catch (\Throwable $th) {
            return back()->with('danger', $th->getMessage())->withInput();
        }
    }
}
