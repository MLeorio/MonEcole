@extends('Auth.base')

@section('form')
    <form action="{{ route('loginPers') }}" method="post">
@endsection

@section('hint')
<p class="hint">Portail Personnel</p>
@endsection
