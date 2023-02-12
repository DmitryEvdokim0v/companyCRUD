<?php

namespace App\Http\Controllers;
use App\Models\Goods;
use App\Models\Company;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Goods::all();
        return view ('goods.index')->with('goods', $goods);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function create(Request $request)
    {
        $id = $request->get('id');
        return view('goods.create')->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Goods::create($input);
        $company = Company::find($request->company_id);
        $company->count_of_goods += 1;
        $company->save();
        return redirect('company/'.$request->get('company_id'))->with('flash_message', 'Товар добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goods = Goods::find($id);
        return view('goods.show')->with('goods', $goods);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods = Goods::find($id);
        return view('goods.edit')->with('goods', $goods);
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
        $goods = Goods::find($id);
        $input = $request->all();
        $goods->update($input);
        return redirect('company/'.$input['company_id'])->with('flash_message', 'Данные о товаре обновлены!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $product = Goods::find($request->id);
        // $product->delete();
        $company = Company::find($request->get('id'));
        $company->count_of_goods -= 1;
        $company->save();
        Goods::destroy($id);

        return redirect('company/'.$request->get('id'))->with('flash_message', 'Товар удалён!');  
    }
}
