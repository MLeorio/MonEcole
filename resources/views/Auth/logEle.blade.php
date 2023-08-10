@extends('Auth.base')

@section('form')
    <form action="{{ route('loginElev') }}" method="post">
@endsection

@section('hint')
    <p class="hint">Portail &Eacute;l&egrave;ve</p>
@endsection

@section('indication') (Matricule) @endsection