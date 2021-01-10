<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Http\Request;

class FootballerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footballers = Footballer::get()
            ->toJson(JSON_PRETTY_PRINT);

        return response($footballers, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function show(Footballer $footballer)
    {
        if ($footballer) {
            $footballer = $footballer->toJson(JSON_PRETTY_PRINT);

            return response($footballer, 200);
        } else {
            return response()->json([
                'message' => 'Footballer not Found',
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footballer $footballer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footballer $footballer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footballer  $footballer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footballer $footballer)
    {
        //
    }
}
