@extends('layouts.appho')

@section('title-block')<p>Contact page</p>@endsection
@section('content')

<h1 style="text-align: center;">Contact page</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)

                <li>
                    {{$errors}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="ui">
<div class="container">

        <div class="col-12">

<form action="{{ route('contact-form') }}" method="post">

    @csrf

    <div class="form-group mt-2">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="message">Cообщения</label>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщения"></textarea>
    </div>
    <br>
    <button style="position: relative; background: antiquewhite; width: 22%; height: 3.5rem; color: black" type="submit" class="btn btn-success">Отправить</button>
</form>
</div>
</div>
</div>

@endsection
