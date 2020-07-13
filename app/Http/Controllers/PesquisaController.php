<?php

namespace App\Http\Controllers;

use App\Models\ModelEmpresa;
use Illuminate\Http\Request;



/**use Illuminate\Http\Request;*/

class PesquisaController extends Controller
{
    private $objEmpresa;
    public function __construct(){
        $this->objEmpresa=new ModelEmpresa();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    public function busca(Request $request){
        $p_pesquisa = $request->query('p_pesquisa');
        $empresa = ModelEmpresa::where('title','like',"%". $p_pesquisa."%")
            ->orwhere('category','like',"%". $p_pesquisa."%")
            ->orwhere('adress','like',"%". $p_pesquisa."%")
            ->orwhere('zipcode','like',"%". $p_pesquisa."%")
            ->orwhere('city','like',"%". $p_pesquisa."%")
            ->get();
        return view('result')->with('empresa', $empresa);
    }      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
