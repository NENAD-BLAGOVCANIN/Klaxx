@extends('layouts.app')

@section('title', 'Create new listing')

@section('content')


    <div class="container py-5">
        <h2><b>Create new listing</b></h2>

        <form action="#" method="POST" style="max-width: 550px">@csrf

            <label class="mt-3">Title <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control">

            <label class="mt-3">Price <span class="text-danger">*</span></label>
            <input type="number" name="price" class="form-control">

            <label class="mt-3">Category <span class="text-danger">*</span></label>
            <select name="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-primary mt-4">Save and continue</button>

        </form>

    </div>


@endsection
