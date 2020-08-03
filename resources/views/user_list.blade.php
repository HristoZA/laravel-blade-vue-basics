@extends('test')

@section('content')
<div class="container">
    <h1>Users:</h1>
    <user-list
        v-bind:users="{{ $users }}"
    ></user-list>
</div>
@endsection