@extends('layouts.app')

@section('title', 'Create new listing')

@section('content')


    <div class="container py-5">
        <h2>Create new listing</h2>

        <form action="#" method="POST" style="max-width: 550px">@csrf

            <label class="mt-3">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control">

            <label class="mt-3">Price <span class="text-danger">*</span></label>
            <input type="number" name="price" class="form-control">

            <label class="mt-3">Description <span class="text-danger">*</span></label>
            <textarea name="description" class="form-control"></textarea>

            <button type="submit" class="btn btn-primary mt-3">Publish</button>

        </form>

    </div>


@endsection
