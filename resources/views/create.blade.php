@extends('templates.template')

@section('content')
    <hr>
    <h1 class="text-center">Insert new company</h1>
    <hr>
       
    <div class="col-8 m-auto">
        
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br> 
                @endforeach

            </div>

        @endif  
        
        <form name="formcad" id="formcad" method="post" action="{{url('admin')}}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone(11)-1111-1111" required>
            <input class="form-control" type="text" name="adress" id="adress" placeholder="Adress" required>
            <input class="form-control" type="text" name="zipcode" id="zipcode" placeholder="Zipcode 99999-999" required>
            <select class="form-control" name="city" id="city" required>
                <option>City</option>
                <option>Bauru</option>
                <option>Botucatu</option>
                <option>Curitiba</option>
                <option>Porto Alegre</option>
                <option>Recife</option>
                <option>São Lucas</option>
                <option>São Paulo</option>
                <option>Salvador</option>
            </select>
            <select class="form-control" name="state" id="state" required>
                <option>State</option>
                <option>Bahia</option>
                <option>Pernambuco</option>
                <option>Paraná</option>
                <option>Rio Grande do Sul</option>
                <option>Rio de Janeiro</option>
                <option>São Paulo</option>    
            </select>
            <textarea class="form-control" type="text" name="drescription" id="drescription" placeholder="Description" required rows="3"></textarea>
            <select multiple class="form-control" name="category" id="category" required>
                <option>Auto</option>
                <option>Beautyfull and Fitness</option>
                <option>Entertainment</option>
                <option>Food and Dining</option>
                <option>Health</option>
                <option>Sports</option>
                <option>Travel</option>
            </select>
            <input class="btn btn-primary" type="submit" value="Cadastrar">
            <a href="{{url('admin')}}">
                <button class="btn btn-dark">Voltar</button>
            </a>
        </form>
        
    </div>

@endsection

