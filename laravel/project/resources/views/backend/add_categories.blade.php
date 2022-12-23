@extends('backend.layout.structure')
@section('main_section')

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Categories</h2> 
						<br>
						<br>
						<div class="row" style="padding:20px">
							<div class="col-md-6">	
							<div class="form-group">
								<label>Categories Name</label>
								<input type="text" name="name" class="form-control" />
							   
							</div>
							<div class="form-group">
								<label>Categories image</label>
								<input type="file" name="name" class="form-control" />
							   
							</div>
							<div class="form-group">
								
								<input type="submit" name="submit" class="btn btn-primary" />
							   
							</div>
							</div>
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
   @endsection