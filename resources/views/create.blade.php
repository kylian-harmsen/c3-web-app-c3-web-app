@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="#" method="POST">
            @csrf
            <label>name:</label>
            <input type="text" name="name" id="name">
            <label>points:</label>
            <input type="text" name="points" id="points">
            <label>creator_id:</label>
            <input type="int" name="creator_id" id="creator_id">

            <button type="submit">Aanmaken</button>
        </form>
    </div>
@endsection
