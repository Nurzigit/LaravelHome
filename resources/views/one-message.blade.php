@extends('layouts.appho')

@section('title-block'){{$data->subject}}@endsection
<div class="container">
    <div class="row">
        <div class="col-12">
            @section('content')
                <h1>{{$data->subject}}</h1>

                    <div class="um">
                        <div class="a">
                            <p>{{ $data->message }}</p>
                            <p>{{ $data->email }} - {{ $data->name }}</p>
                            <p><small>{{ $data->created_at }}</small></p>
                            <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-dark">Редактировать</button></a>
                            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>

                        </div>
                    </div>

            @endsection
        </div>
    </div>
</div>


