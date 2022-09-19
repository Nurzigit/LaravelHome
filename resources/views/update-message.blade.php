@extends('layouts.app')

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
