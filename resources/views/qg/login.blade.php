@extends('layout.login')
@section('csspersonalizado', 'css/login.css')
@section('title', 'Login - QG')
@section('content')
    <div class="form-wrap">
        <form action="{{route('qg.login.auth')}}" class="form-login" method="post">
            {{csrf_field()}}
            <img src="{{asset('img/logos/arma3.png')}}" alt="Logo">
            <div class="two-inputs">
                <input type="email" placeholder="E-mail" value="leandroabmathias@gmail.com" name="email">
                <input type="password" placeholder="Senha" value="admin" name="password">
            </div>
            @if($errors->has('email') || $errors->has('password'))
                <div class="alert-danger">E-mail e/ou Senha invalidos</div>
            @endif
            <button class="btn btn-blue font-bold">ENTRAR</button>
            <div class="checkbox-wrap">
                <input class="checkbox-rounded" type="checkbox" name="checkbox">
                <label for="checkbox">Lembrar de mim</label>
            </div>
        </form>
    </div>
@endsection

