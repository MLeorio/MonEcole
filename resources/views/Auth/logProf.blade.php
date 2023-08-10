@extends('Auth.base')

@section('form')
    <form action="{{ route('loginProf') }}" method="post">
@endsection

@section('hint')
<p class="hint">Portail Professeur</p>
@endsection
