@extends('Admin.Layout._theme')
@section('title','Certer Hum | Cadastro de Usúarios')
@section('description','Certer Hum')
@section('keywords','Certer Hum')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/auth-style.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-3 offset-xl-4">
        <form action="{{ route('post.register') }}" class="box" method="POST">
            @csrf
            <h2 class="mb-2">Cadastro de Usúarios</h2>
            @if ($errors->any())
            <div class="alert">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                    <li class="small m-0 text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required>
            <input type="submit" value="Cadastrar">
            <!-- voltar -->
            <a href="{{ route('login') }}" class="text-center nav-link m-0 text-light">Voltar</a>
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection
