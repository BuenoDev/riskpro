@extends('layouts.app')

@include('layouts.navbar')

<style>
.navbar{
    position: absolute;
}
.company{
    padding-top: 200px;
    margin-left: 80px;
}
</style>
<div class="container company">
    <div class="row">
        <div class="col-lg-6"><br><br>
            <h2>{{ $company->name }}</h2>
            <h4>{{ $company->title }}</h4>
            <br><br>
            <p>{{ $company->description }}</p>
        </div>
        <div class="col-lg-6">
            <img src="{{ URL::asset('/img/vendor.jpg') }}" class="img-fluid img-thumbnail" alt="">
        </div>
    </div>
</div>
