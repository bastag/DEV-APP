<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Quotations;
use App\PaperTypes;
use App\Layouts;
use App\OffsetTypes;
use App\LaminationTypes;
use App\BindingTypes;
use App\DiecuttingTypes;

class QuotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage-quotations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quotation = new Quotations;
        $paper = new PaperTypes;
        $layout = new Layouts;
        $offset = new OffsetTypes;
        $lamination = new LaminationTypes;
        $binding = new BindingTypes;
        $diecut = new DiecuttingTypes;


        // Create Quote
        $paper->price = $request->input('cover_stock_price');
        $paper->price = $request->input('inside_stock_price');
        $offset->price = $request->input('cover_offset_price');
        $offset->price = $request->input('inside_offset_price');
        $offset->price = $request->input('other_offset_price');
        $lamination->price = $request->input('lamination_price');
        $lamination->price = $request->input('letterpress_price');
        $binding->price = $request->input('binding_price');
        $diecut->price = $request->input('diecut_price');

        $paper->save();
        $offset->save();
        $lamination->save();
        $binding->save();
        $diecut->save();
        $quotation->save();

        return redirect('manage-quotation')->with('success','Quote computed!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Quotations::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
