@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    Sidebar z dziecka
@endsection

@section('content')
    <h1>Application: {{ $applicationName }}</h1>
    <div>
        User: {{ $userId }}
    </div>
@endsection