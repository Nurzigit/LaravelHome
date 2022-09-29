@extends('Layouts.appho')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@section('title-block')Обнавления записи@endsection
@section('content')

    <h1 style="text-align: center;">Обнавления записи</h1>

    <div class="ui">
        <div class="container">

            <div class="col-12">

                <form action="{{ route('contact-update-submit', $data->id) }}" method="post">

                    @csrf

                    <div class="form-group mt-2">
                        <label for="name">Введите имя</label>
                        <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="subject">Тема сообщения</label>
                        <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="message">Cообщения</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщения">{{ $data->message }}</textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark">Обнавить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
