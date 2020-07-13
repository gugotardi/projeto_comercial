@extends('templates.template')

@section('content')
    <hr>
    <h1 class="text-center">Business Finder Admin</h1>
    <hr>
       
    <div class="col-8 m-auto">
        <h2>{{$empresa->title}}<br></h2>
        <h5>in {{$empresa->category}}</h5><br><br>
        <h2>About</h2>
        {{$empresa->drescription}}<br>
        Adress: {{$empresa->adress}} -
        {{$empresa->zipcode}} -
        City {{$empresa->city}}-
        State {{$empresa->state}}<br>
        Phone {{$empresa->phone}}<br><br>
        
       
        <a href="{{url('admin')}}">
            <button class="btn btn-dark">Voltar</button>
        </a> 

    </div>

@endsection

