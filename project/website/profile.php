<?php
include_once('header.php');
?>

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
                    <img class="img-fluid w-100" src="img/upload/<?php echo $fetch->file?>" alt="">
                    <div class="position-relative py-4">
                        <h4 class="text-uppercase"><?php echo $fetch->name?></h4>
						<p class="m-0">Name :<?php echo $fetch->name?></p>
                        <p class="m-0">Email :<?php echo $fetch->email?></p>
						<p class="m-0">Gender :<?php echo $fetch->gen?></p>
                        <p class="m-0">Languages :<?php echo $fetch->lag?></p>
						<p class="m-0">Country :<?php echo $fetch->cnm?></p>
						<button class="btn btn-success mt-2"><a href="editprofile?btnuid=<?php echo $fetch->uid?>"> Edit</a></button>
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
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <?php
   include_once('footer.php');
   ?>