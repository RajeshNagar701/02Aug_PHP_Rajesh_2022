@extends('backend.layout.structure')
@section('main_section')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" style="padding:20px">
                     <h2>Manage Categories</h2> 
						
                        <table  class="table table-striped table-bordered table-hover">
                            <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
									<th>Delete</th>
									<th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
									<td><a href="" class="btn btn-danger">Delete</a></td>
									<td><a href="" class="btn btn-primary">Edit</a></td>
                                </tr>
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