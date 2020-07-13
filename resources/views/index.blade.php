@extends('templates.template')

@section('content')
    <hr>
    <h1 class="text-center">Business Finder Admin</h1>
    <hr>
       
    <div class="col-8 m-auto">
        <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Business</th>
                <th>
                    <di class="text-right">
                        <a href="{{url('admin/create')}}">
                            <button class="btn btn-success">Cadastrar</button>
                        </a>     
                     </div> 
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($empresa as $empresas)
            <tr>
                <th scope="row">{{$empresas->id}}</th>
                <td>{{$empresas->title}}</td>
                <td>
                    <a href="{{url("admin/$empresas->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>  
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    </div>

@endsection

