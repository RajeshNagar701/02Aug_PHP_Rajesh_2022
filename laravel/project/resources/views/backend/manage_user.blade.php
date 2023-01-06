@extends('backend.layout.structure')
@section('main_section')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="padding:20px">
                     <h2>Manage User</h2> 
						
                        <table  class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
									<th>Profile</th>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>User Name</th>
                                    <th>gen</th>
									<th>Lag</th>
									<th>Mobile</th>
									<th>Delete</th>
									<th>status</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							foreach($fetch as $d)
							{
							?>
                                <tr>
									<td><img src="{{url('frontend/img/upload/'.$d->file)}}" width="50px"></td>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->username}}</td>
                                    <td>{{$d->gen}}</td>
									<td>{{$d->lag}}</td>
									<td>{{$d->mobile}}</td>
									<td><a href="delete_user/<?php echo $d->id?>" class="btn btn-danger">Delete</a></td>
									<td><a href="userstatus/<?php echo $d->id?>" class="btn btn-danger">{{$d->status}}</a></td>
									
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
   @endsection