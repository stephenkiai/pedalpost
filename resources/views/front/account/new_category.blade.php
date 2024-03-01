@extends('front.account.layouts.app')

@section('content')
    <section class="col-lg-8 pt-lg-4 pb-4 mb-4">
        <!-- Title-->
        <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
            <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
                <h2 class="h3 py-2 me-2 text-center text-sm-start">New Category</h2>
            </div>
        </div>

        <!--error display-->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error )
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>

                @endforeach
            </ul>
        </div>
        @endif

        <!--new category form-->
        <form action="{{ route('category.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf

            <div class="card">
                <div class="card-body">
                        <div class="col-md-9">
                            <div class="mb-3">
                                <label class="form-label">Category name</label>
                                <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                            </div>
                        </div>
                    <button type="submit" class="btn btn-accent">Save category</button>
                </div>
            </div>
        </form>
    </section>
@endsection
