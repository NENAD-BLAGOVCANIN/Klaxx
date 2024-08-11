@extends('layouts.app')

@section('title', 'Create new listing')

@section('content')


<div class="container py-5">
    <h2><b>Create new listing</b></h2>

    <form action="#" method="POST" style="max-width: 1100px">@csrf

        <div class="row pt-3">
            <div class="col-md-6">

                <div class="mb-4">

                    <p class='fw-500 mb-1'>Title <span class="text-danger">*</span></p>
                    <p class='small text-muted mb-2'>Most important place to include words that buyers would
                        likely
                        use to search for your service.</p>

                    <input type="text" name="title" class="form-control">

                </div>

                <div class="mb-4">

                    <p class='fw-500 mb-1'>Category <span class="text-danger">*</span></p>
                    <p class='small text-muted mb-2'>
                        Select a category which best describes your product
                    </p>

                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        @foreach ($category->subcategories as $subcategory)
                        <optgroup label="{{ $subcategory->name }}">
                            @foreach ($subcategory->subcategories as $endsubcategory)
                            <option value="{{ $endsubcategory->id }}">{{ $endsubcategory->name }}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                        @endforeach
                    </select>

                </div>

            </div>
            <div class="col-md-6">

                <div class="mb-4">

                    <p class='fw-500 mb-1'>Price <span class="text-danger">*</span></p>
                    <p class='small text-muted mb-2'>
                        Choose a fair price that is not too high for the customers to pay, but not too low so that
                        your hard work doesn't pay off.
                    </p>

                    <input type="number" name="price" class="form-control">

                </div>

                <div class='mb-3'>
                    <p class='fw-500 mb-1'>Search keywords</p>
                    <p class='small text-muted mb-2'>Enter search terms you feel your buyers will use when looking
                        for your service.</p>
                    <input type="text" name='keywords' class='form-control' />
                </div>

            </div>
        </div>






        <button type="submit" class="btn btn-primary mt-5">Save and continue</button>

    </form>

</div>


@endsection