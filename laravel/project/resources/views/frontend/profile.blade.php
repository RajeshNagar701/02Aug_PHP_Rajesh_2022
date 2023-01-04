@extends('frontend.layout.structure')
@section('main_section')

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">My Profile</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">My Profile</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">My Profile</h1>
            <div class="" style="padding-left:20%;padding-right:20%">
                
				<div class="team-item">
                    <img class="" src="{{url('frontend/img/upload/'.$fetch->file)}}" width="50px" alt="">
                    <div class="position-relative py-4">
                        <h4 class="text-uppercase"><?php echo $fetch->name?></h4>
						<p class="m-0">Name :{{$fetch->name}}</p>
                        <p class="m-0">Email :{{$fetch->username}}</p>
						<p class="m-0">Gender :{{$fetch->gen}}</p>
                        <p class="m-0">Languages :{{$fetch->lag}}</p>
						<p class="m-0">Country :{{$fetch->cnm}}</p>
						<p class="m-0">Mobile :{{$fetch->mobile}}</p>
						<button class="btn btn-success mt-2"><a href="editprofile/<?php echo $fetch->id?>"> Edit</a></button>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-1.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-2.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-3.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-4.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-5.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-6.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-7.png')}}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{url('frontend/img/vendor-8.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection