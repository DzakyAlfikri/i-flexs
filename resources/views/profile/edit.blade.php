@extends('layouts.homepage')

@section('content')
<div class="profile-container">
    <div class="container" style="padding-left: 100px; padding-right: 100px; max-width: 95%;">
        <div class="profile-sections">
            <div class="section-wrapper">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="section-wrapper">
                @include('profile.partials.update-password-form')
            </div>

            <div class="section-wrapper">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>

<style>
.profile-container {
    padding-top: 20px;
    padding-bottom: 40px;
}

.profile-sections {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.section-wrapper {
    width: 100%;
}

@media (max-width: 768px) {
    .container {
        padding-left: 15px !important;
        padding-right: 15px !important;
    }
}
</style>
@endsection