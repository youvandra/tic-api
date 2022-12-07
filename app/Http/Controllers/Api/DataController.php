<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ticket;
use App\Traits\bck;
use Illuminate\Http\Request;

class DataController extends Controller
{
    use bck;
    public function getCategory()
    {
        $category = Category::get();

        return $category;
    }

    public function storeCategory(Request $request)
    {
        

        if ($request->name == null) {
            
            return response()->json([
                'status' => 500,
                'message' => 'Category name required!'
            ]);
        }

        $check = Category::where('name', $request->name)->first();

        if ($check == null) {
            
            Category::create([

                'name' => $request->name
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Category Create Succesfully'
            ]);

        }else{

            return response()->json([
                'status' => 102,
                'message' => $request->name.' Category already created!'
            ]);

        }
    }

    public function categoryDelete(Request $request,$id)
    {
        $this->checkStatus($request);
        $category = Category::find($id);

        if ($category != null) {
            
            $category->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Category Delete Succesfully'
            ]);
            
        }else{
            
            return response()->json([
                'status' => 404,
                'message' => 'Category not found!'
            ]);
        }
    }

    public function getEvent()
    {
        $ticket = Ticket::get();

        return $ticket;
    }


    public function storeEvent(Request $request)
    {
        switch ($request) {
            case $request->event_name == null:
                return 'Event name is required!';
                break;
            case $request->category_id == null:
                return 'Category id is required!';
                break;
            case $request->ticket_type == null:
                return 'Ticket type is required!';
                break;

        }

        try {
            
            Ticket::create($request->all());

            return response()->json([
                'status' => 200,
                'message' => 'Event Create Succesfully'
            ]);
            
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong!'
            ]);
        }

        return $request->all();
    }

    public function deleteEvent($id){

        $ticket = Ticket::find($id);

        if ($ticket != null) {
            
            $ticket->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Event Delete Succesfully'
            ]);

        }else{
            
            return response()->json([
                'status' => 404,
                'message' => 'Event not found!'
            ]);
        }
    }
}
