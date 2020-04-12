<?php

namespace App\Http\Controllers;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\DateTime;
use Laravel\Lumen\Routing\Controller as BaseController;

class LanguageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Language::all();
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
            'version' => 'required',
            'displayName' => 'required',
            'semVerDefinition' => 'required',
            'versionDescription' => 'required'
        ]);

        $framework = Language::where('name', '=', $request->name)->first();

        $framework->update($request->all());


    }
}
