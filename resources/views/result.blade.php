@extends('templates.template')

@section('content')
    <hr>
    <h1 class="text-center">Business Finder</h1>
    <hr>
       
    <div class="col-8 m-auto">
        <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Business</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empresa as $empresas)
                <tr>
                    <th scope="row">{{$empresas->id}}</th>
                    <td>{{$empresas->title}}</td>
                </tr>
                <tr>
                    <h6><td>in: {{$empresas->category}}</td></h6>
                </tr>
            @endforeach
           
             
        </tbody>
         
    </table>
         <a href="{{url('/')}}">
                <button class="btn btn-dark">Voltar</button>
         </a>
    </div>

@endsection

