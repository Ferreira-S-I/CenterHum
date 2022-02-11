@extends('Admin.Layout._theme')
@section('title','Certer Hum | Recuperação de Senha')
@section('description','Certer Hum')
@section('keywords','Certer Hum')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/auth-style.css') }}">
@endsection

@section('content')
<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4 col-xl-3 offset-xl-4">
    <div class="row">
        <form action="{{ route('post.reset.password') }}" class="box" method="POST">
            @csrf
            <h2 class="mb-2">Recuperação de Senha</h2>
            @if ($errors->any())
            <div class="alert">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                    <li class="small m-0 text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('status'))
            <div class="alert">
                <ul class="m-0">
                    <li class="small m-0 text-info">{{ session('status') }}</li>
                </ul>
            </div>
            @endif
            <input type="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>
            <input type="submit" value="Enviar">
            <!-- voltar -->
            <a href="{{ route('login') }}" class="text-center nav-link m-0 text-light">Voltar</a>
        </form>
    </div>
</div>
@endsection

@section('script')
@endsection
