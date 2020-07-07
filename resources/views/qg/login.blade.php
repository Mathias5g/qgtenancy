@extends('layout.login')
@section('csspersonalizado', 'css/login.css')
@section('title', 'Login - QG')
@section('content')
    <div class="form-wrap">
        <form action="#" class="form-login">
            <img src="{{asset('img/logos/arma3.png')}}" alt="Logo">
            <div class="two-inputs">
                <input type="text" placeholder="Usuário" value="Admin">
                <input type="password" placeholder="Senha" value="123">
            </div>
            <button class="btn btn-blue font-bold">ENTRAR</button>
            <div class="checkbox-wrap">
                <input class="checkbox-rounded" type="checkbox" name="checkbox">
                <label for="checkbox">Lembrar de mim</label>
            </div>
        </form>
    </div>
@endsection

