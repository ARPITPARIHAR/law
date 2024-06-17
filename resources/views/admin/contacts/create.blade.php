@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Contact Information</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.contact_info.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $contactInfo->phone ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $contactInfo->email ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $contactInfo->address ?? '') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection




