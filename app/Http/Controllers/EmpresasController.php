<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\ModelEmpresa;

class EmpresasController extends Controller
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
        $empresa=$this->objEmpresa->all();
        return view('index',compact('empresa'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return   view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $cad= $this->objEmpresa->create([
            'title'=>$request->title,
            'phone'=>$request->phone,
            'adress'=>$request->adress,
            'zipcode'=>$request->zipcode,
            'city'=>$request->city,
            'state'=>$request->state,
            'drescription'=>$request->drescription,
            'category'=>$request->category

        ]);
        if($cad){
            return redirect('admin');
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
        $empresa=$this->objEmpresa->find($id);
        return view('show',compact('empresa'));
        
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
    public function update(EmpresaRequest $request, $id)
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
