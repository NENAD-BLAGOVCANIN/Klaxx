@extends('layouts.app')

@section('title', 'My Listings')

@section('content')


    <div class="container py-5">
        <h2>My Listings</h2>

        <a href="/listings/create" class="btn btn-primary">Create new listing</a>


        <div class="row">
            @foreach ($listings as $listing)
                <div class="col-md-4">
                    <div class="card">
                        <h4>{{ $listing->title }}</h4>
                        <p>{{ $listing->description }}</p>
                    </div>

                </div>
            @endforeach
        </div>


    </div>


@endsection
