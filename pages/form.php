<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Layout</a></li>
						<li class="breadcrumb-item active">Top Navigation</li> -->
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-lg-offset-2 col-lg-center">
					<?= show_message();?>
				</div>

				<div class="col-lg-8 offset-lg-2 col-lg-offset-2 col-lg-center">
					<div class="card card-danger card-outline">
		              	<div class="card-header">
		                	<h5 class="card-title m-0">Featured</h5>
		              	</div>
		              	<div class="card-body">
		                	<h6 class="card-title text-bold">Tracer Study</h6>
		              	</div>
		            </div>

		            <div class="card">
		            	<div class="card-header">
		                	<h5 class="card-title m-0">Personal Information</h5>
		              	</div>
		              	<div class="card-body">
		                	<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">  
			                    <input type="hidden" name="action" value="add_new_response"> 

			                    <div class="form-group">
			                        <div class="form-row">
			                            <div class="col-md-12">
			                                <label for="exampleInputName">Last Name:</label>
			                                <input type="text" name="lname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Last Name" class="form-control" required>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <div class="form-row">
			                            <div class="col-md-12">
			                                <label for="exampleInputName">First Name:</label>
			                                <input type="text" name="fname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter First Name" class="form-control" required>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <div class="form-row">
			                            <div class="col-md-12">
			                                <label for="exampleInputName">Middle Initial:</label>
			                                <input type="text" name="mname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Middle Name" class="form-control" required>
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <div class="form-row">
			                        	<div class="col-md-12">
			                                <label for="exampleInputName">Gender:</label>
				                            <div class="col-md-2 ">
				                                <div class="custom-control custom-radio">
						                          	<input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="Male">
						                          	<label for="customRadio1" class="custom-control-label">Male</label>
						                        </div>
				                            </div>
				                            <div class="col-md-4 ">
				                                <div class="custom-control custom-radio">
						                          	<input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="Female">
						                          	<label for="customRadio1" class="custom-control-label">Female</label>
						                        </div>
				                            </div>
				                        </div>
			                        </div>
			                    </div>
			                    <hr>
			                    <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
			                </form>
		              	</div>
		            </div>
				</div>
			</div>
		<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>