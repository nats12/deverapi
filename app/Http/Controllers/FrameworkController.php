<?php

namespace App\Http\Controllers;
use App\Models\Framework;
use Illuminate\Http\Request;
use App\Http\Controllers\DateTime;
use Laravel\Lumen\Routing\Controller as BaseController;

class FrameworkController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Framework::all();
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

        $this->validate($request, [
            'name' => 'required',
            'version' => 'required'
        ]);

        $framework = Framework::where('name', '=', $request->name)->first();

        $framework->update($request->all());
    }
}
