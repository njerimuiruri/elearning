<!-- resources/views/subscriptions/subscribe.blade.php -->

@extends('layout')

@section('content')
<h2>Subscribe to {{ $selectedPackage }}</h2>
<p>Price: ${{ $packagePrice }}/month</p>

<form action="{{ route('subscribe.post') }}" method="post">
    @csrf
    <input type="hidden" name="package" value="{{ $selectedPackage }}">
    <!-- Add more form fields as needed -->
    <button type="submit">Subscribe</button>
</form>
@endsection