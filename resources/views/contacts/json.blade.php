@extends('base')
@section('main')
<div class="row">
<a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Home</a>
<a href="{{ url('/contacts/create') }}" class="text-sm text-gray-700 underline">Create</a>
<a href="{{ url('/contacts') }}" class="text-sm text-gray-700 underline">Contacts</a>
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif

    </div>
</div>
@endsection
