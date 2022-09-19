@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>В уроке мы изучим отслеживание различных URL адресов, а также познакомимся с созданием HTML шаблонов. К концу урока вы создадите три страницы: главную, про компанию и страницу контактов. </p>

@endsection



@section('aside')
    @parent
    <p>Доп текст</p>
@endsection
