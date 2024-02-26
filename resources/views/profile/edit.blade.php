@extends('front.account.layouts.app')

@section('content')

<!-- Content-->
<section class="col-lg-8 pt-lg-4 pb-4 mb-3">
    <!-- Title-->
    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom mb-4">
            <h2 class="h3 py-2 me-2 text-center text-sm-start">Edit Profile</h2>

        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white accent:bg-gray-800 shadow sm:rounded-lg">
                    @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @include('profile.partials.update-password-form')
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>

</section>

@endsection
