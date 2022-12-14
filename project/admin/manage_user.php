<?php
include_once('header.php');
?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="padding:20px">
                     <h2>Manage User</h2> 
						
                        <table  class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
									<th>Delete</th>
									<th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
                                    <td><?php echo $d->uid?></td>
                                    <td><?php echo $d->name?></td>
                                    <td><?php echo $d->email?></td>
                                    <td>@<?php echo $d->unm?></td>
									<td><a href="delete?deluid=<?php echo $d->uid?>" class="btn btn-danger">Delete</a></td>
									<td><a href="admin_custedit?edtbtn=<?php echo $d->uid?>" class="btn btn-primary">Edit</a></td>
                                </tr>
                            <?php
							}
							?> 
                            </tbody>
                        </table>

                    </div>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
