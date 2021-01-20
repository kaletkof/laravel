@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    Sidebar z dziecka
@endsection

@section('content')
    <h3>Informacje o użytkowniku</h3>
    <ul>
        <li>Id: {{ $user['id'] }}</li>
        <li>Imię: {{ $user['firstName'] }}</li>
        <li>Nazwisko: {{ $user['lastName'] }}</li>
        <li>Miasto: {{ $user['city'] }}</li>
        <li>Wiek: {{ $user['age'] }}</li>
    </ul>
    
    <div>
        {{ $user['html'] }}
    </div>
@endsection