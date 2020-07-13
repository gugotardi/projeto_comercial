@extends('templates.template')

@section('content')
    <hr>
    <h1 class="text-center">Business Finder</h1>
    <hr>
       
    <div class="col-8 m-auto">    
            <form class="text-center" name="formsearch" id="forsearch" method="get" action="{{url('/busca')}}">
                <br><br>    
                <input class="form-control" type="text" name="p_pesquisa" id="p_pesquisa" placeholder="What are you looking for?" required><br><br>
                <input class="btn btn-primary" type="submit" value="search">
            </form>

        
    </div>

@endsection

