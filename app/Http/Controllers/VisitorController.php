<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitor = Visitor::create([
            'username'=>$request->username,
            'id_visitor'=>$request->id_visitor,
            'address'=>$request->address
        ]);

        return response()->json([
            'data'=>$visitor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        return response()->json([
            'data'=> $visitor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        $visitor->username = $request->username;
        $visitor->id_visitor = $request->id_visitor;
        $visitor->address = $request->address;
        $visitor->save();

        return response()->json([
            'data'=> $visitor
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
        return response()->json([
            'message' => 'visitor account has been deleted'
        ], 204);
    }
}
