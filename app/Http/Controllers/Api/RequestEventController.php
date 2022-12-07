<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RequestEvent;
use Illuminate\Http\Request;

class RequestEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request_event = RequestEvent::get();

        return $request_event;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request) {
            case $request->event_name == null:
                return 'Event name is required!';
                break;
            case $request->category == null:
                return 'Category is required!';
                break;
            case $request->host_name == null:
                return 'Host name is required!';
                break;
            case $request->location == null:
                return 'Location is required!';
                break;

        }

        try {

            RequestEvent::create($request->all());

            return 'Request Event create succesfully';

        } catch (\Throwable $th) {

            return $th->getMessage();
            return 'Something went wrong! Please try again.';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $request_event = RequestEvent::find($id);

        if ($request_event != null) {

            return $request_event;
        }else{

            return 'Data not found!';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {

            $request_event = RequestEvent::find($id);

            if ($request_event != null) {

                $request_event->update($request->all());
                return 'Request Event update succesfully';

            }else{

                return 'Data not found!';
            }


        } catch (\Throwable $th) {

            return $th->getMessage();
            return 'Something went wrong! Please try again.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request_event = RequestEvent::find($id);

        if ($request_event != null) {

            $request_event->delete();
            return 'Request Event delete succesfully';
        }else{

            return 'Data not found!';
        }
    }
}
