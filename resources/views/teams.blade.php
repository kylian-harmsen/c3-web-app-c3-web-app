@extends('layouts.app') <!-- Extend your main layout if you have one -->

@section('content')
    <div class="container">
        <h1>Teams</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
