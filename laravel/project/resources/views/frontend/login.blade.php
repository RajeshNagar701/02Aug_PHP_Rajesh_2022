@extends('frontend.layout.structure')
@section('main_section')
<?php
if(isset($_SESSION['user']))
{
	echo "<script>window.location='index';</script>";
}
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Login</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Login</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Login Us</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="post">
                            <div class="row">
                               
                                <div class="col-6 form-group">
                                    <input type="text"  name="unm" class="form-control p-4" placeholder="Your Email" value="<?php if(isset($_COOKIE['unm'])){ echo $_COOKIE['unm'];}?>" required="required">
                                </div>
								<div class="col-6 form-group">
									<input type="password" name="pass" class="form-control p-4" placeholder="password" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];}?>"  required="required">
								</div>
								
								<div class="col-6 form-group">
									<input type="checkbox" name="rem" class="p-4"> : Remember Me
								</div>
								
								<div class="col-6 form-group">
									<button class="btn btn-primary py-3 px-5" name="login" value="login" type="submit">Login</button>
								</div>
								<div class="col-6 form-group">
									<br>
									<a href="register">CLICK HERE FOR REGISTER</a>
								</div>
                            </div>
                            
                           
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->


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