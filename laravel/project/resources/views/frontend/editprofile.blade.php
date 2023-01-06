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
        <h1 class="display-3 text-uppercase text-white mb-3">Register</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Register</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Register Us</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="{{url('editprofile/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
							@csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-4" value="{{$fetch->name}}" name="name" placeholder="Your Name" >
									@error('name')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								
								<div class="col-6 form-group">
                                    <input type="text" name="username" value="{{$fetch->username}}" class="form-control p-4" placeholder="Your User Name" readonly>
								</div>
								
								<div class="col-6 form-group">
									<h6>Choose Gender</h6>
									<?php
									$gen=$fetch->gen;
									if($gen="Male")
									{
									?>
									Male: <input type="radio" name="gen" value="Male" checked>
									Female: <input type="radio" name="gen" value="Female">
									<?php
									}
									else
									{
									?>
									
									Male: <input type="radio" name="gen" value="Male" >
									Female: <input type="radio" name="gen" value="Female" checked>
									<?php
									}
									?>
								</div>
								<div class="col-6 form-group">
									<h6>Choose Lag</h6>
									<?php
									$lag=$fetch->lag;
									$lag_arr=explode(",",$lag);
									?>
									Hindi: <input type="checkbox" name="lag[]" value="Hindi" <?php
									if(in_array("Hindi",$lag_arr))
									{
										echo "checked";
									}
									?>>
									English: <input type="checkbox" name="lag[]" value="English" <?php
									if(in_array("English	",$lag_arr))
									{
										echo "checked";
									}
									?>>
									Gujarati: <input type="checkbox" name="lag[]" value="Gujarati" <?php
									if(in_array("Gujarati",$lag_arr))
									{
										echo "checked";
									}
									?>>
								</div>
                                
								<div class="col-6 form-group">
									<select name="cid" class="form-control "  required="required">
										<option value="">Select Country</option>
										<?php
										foreach($country as $c)
										{
											if($c->cid=$fetch->cid)
											{
										?>
											<option value="<?php echo $c->id?>" selected>
															<?php echo $c->cnm?>
											</option>
										<?php
											}
											else
											{
											?>
											<option value="<?php echo $c->id?>">
															<?php echo $c->cnm?>
											</option>
										<?php	
											}										
										}
										?>
									</select>
									@error('cid')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="col-6 form-group">
									<input type="number" name="mobile" class="form-control p-4" value="{{$fetch->mobile}}" placeholder="mobile" required="required">
									@error('mobile')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="col-6 form-group">
									<input type="file" name="file" class="form-control" >
									<img class="" src="{{url('frontend/img/upload/'.$fetch->file)}}" width="50px" alt="">
									@error('file')
										<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="col-6 form-group">
									<button type="submit" name="submit" class="btn btn-primary py-3 px-5" type="submit">save</button>
								</div>
								<div class="col-6 form-group">
									<br>
									<a href="login">CLICK HERE FOR LOGIN</a>
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
  @endsection