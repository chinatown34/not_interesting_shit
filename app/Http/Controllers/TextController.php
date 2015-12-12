<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Texts;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TextController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $texts = Texts::paginate(15);

        return view('admin.texts.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.texts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$this->validate($request, null);

        Texts::create($request->all());

        Session::flash('flash_message', 'Texts successfully added!');

        return redirect('texts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $text = Texts::findOrFail($id);

        return view('admin.texts.show', compact('text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $text = Texts::findOrFail($id);

        return view('admin.texts.edit', compact('text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //$this->validate($request, null);

        $text = Texts::findOrFail($id);
        $text->update($request->all());

        Session::flash('flash_message', 'Texts successfully updated!');

        return redirect('texts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Texts::destroy($id);

        Session::flash('flash_message', 'Texts successfully deleted!');

        return redirect('texts');
    }

}
