@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>User Dashboard</h2>
        <p>Welcome, {{ Auth::user()->name ?? 'Guest' }}!</p>

        <form action="{{ route('logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection
