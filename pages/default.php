<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?= element( 'headerForm' ); ?>

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
						<div class="card card-secondary card-outline">
			              	<div class="card-header">
			                	<h5 class="card-title m-0"></h5>
			              	</div>
			              	<div class="card-body">
			                	<h6 class="card-title text-dark">
			                		<p>Dear Graduate:<br><br>
						
									Warm Greetings! <br><br>
									 
									The <b>Himamaylan National High School</b>, in <b>Himamaylan City</b> is presently conducting a <b><i>TRACER Survey of its graduates</i></b>. STEM Tracking Exit Pathway of their chosen field of courses and jobs. <br><br>Please complete this questionnaire truthfully and accurately. Your responses will be used to assess graduates’ employability and to improve our curriculum thus be globally competitive. <br><br>Himamaylan National High School wants to keep in touch with you to foster relations and partnership. Your answers to this survey will be treated with confidentiality. <br><br>

									Thank you so much!   
									</p>
			                	</h6>
			              	</div>
			            </div>

			            <form class="form-horizontal" method="post" id="addSurveyResponse">  
				            <input type="hidden" name="action" value="add_new_response"> 
				            
				            <div class="card">
				            	<div class="card-header">
				                	<h5 class="card-title m-0">Personal Information</h5>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                                <label>
				                                	Last Name: <i style="color: red">*</i>
				                                </label>
				                                <input type="text" name="lname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		First Name: <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="fname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Middle Initial: <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="mname" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Gender: <i style="color: red">*</i>
				                               	</label>
				                                <div class="col-md-2 ">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadio1" name="gender" value="Male">
							                          	<label for="customRadio1" class="custom-control-label">Male</label>
							                        </div>
					                            </div>
					                            <div class="col-md-4 ">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadio2" name="gender" value="Female">
							                          	<label for="customRadio2" class="custom-control-label">Female</label>
							                        </div>
					                            </div>
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		STEM Track in K-12: <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="stem_track" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Year Graduated in K-12: <i style="color: red">*</i>
				                               	</label>
				                                <input type="number" name="year_grad" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Have you pursued graduate studies?: <i style="color: red">*</i>
				                               	</label>
				                                <div class="col-md-2 ">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioYes" name="pursue_study" value="Yes" onclick="toggleCard(this.id)">
							                          	<label for="customRadioYes" class="custom-control-label">Yes</label>
							                        </div>
					                            </div>
					                            <div class="col-md-4 ">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioNo" name="pursue_study" value="No" onclick="toggleCard(this.id)">
							                          	<label for="customRadioNo" class="custom-control-label">No</label>
							                        </div>
					                            </div>
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card" id="graduateCard" style="display: none;">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		You said yes, please provide the needed information (Course/Degree): <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="course" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card" id="graduateCard1" style="display: none;">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		In what School/Institution? : <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="school" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card" id="jobCard" style="display: none;">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		You said No, if employed, what is your current status? <i style="color: red">*</i>
				                               	</label>
				                                <div class="col-md-8">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioPermanent" name="job_status" value="Full time/Permanent/Regular" onclick="toggleCard(this.id)">
							                          	<label for="customRadioPermanent" class="custom-control-label">Full time/Permanent/Regular</label>
							                        </div>
					                            </div>
					                            <div class="col-md-4">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioParttime" name="job_status" value="Part time" onclick="toggleCard(this.id)">
							                          	<label for="customRadioParttime" class="custom-control-label">Part time</label>
							                        </div>
					                            </div>
					                            <div class="col-md-4">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioTemporaryContractual" name="job_status" value="Temporary/Contractual" onclick="toggleCard(this.id)">
							                          	<label for="customRadioTemporaryContractual" class="custom-control-label">Temporary/Contractual</label>
							                        </div>
					                            </div>
					                            <div class="col-md-4">
					                                <div class="custom-control custom-radio">
							                          	<input class="custom-control-input" type="radio" id="customRadioNone" name="job_status" value="None" onclick="toggleCard(this.id)">
							                          	<label for="customRadioNone" class="custom-control-label">None</label>
							                        </div>
					                            </div>
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card" id="jobCard1" style="display: none;">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Name of Job : <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="name_job" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <div class="card" id="jobCard2" style="display: none;">
				              	<div class="card-body">
				                    <div class="form-group">
				                        <div class="form-row">
				                            <div class="col-md-12">
				                               <label>
				                               		Company/Institution Name : <i style="color: red">*</i>
				                               	</label>
				                                <input type="text" name="instcom_name" oninput="this.value = this.value.toUpperCase()" placeholder="Enter Answer" class="form-control">
				                            </div>
				                        </div>
				                    </div>
				              	</div>
				            </div>

				            <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
				            <button type="reset" class="btn btn-default float-right">Clear the Form</button>
				            <br><br><br>
			        	</form>
					</div>
				</div>
			<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
</div>



<script>
function toggleCard(cardId) {
  	var card = document.getElementById(cardId);
 	var graduateCard = document.getElementById('graduateCard');
  	var graduateCard1 = document.getElementById('graduateCard1');
  	var jobCard = document.getElementById('jobCard');
  	var jobCard1 = document.getElementById('jobCard1');
    var jobCard2 = document.getElementById('jobCard2');

  	if (cardId === 'customRadioYes') {
    	graduateCard.style.display = 'block';
    	graduateCard1.style.display = 'block';
    	jobCard.style.display = 'none';
    	jobCard1.style.display = 'none';
        jobCard2.style.display = 'none';
  	} else if (cardId === 'customRadioNo') {
    	graduateCard.style.display = 'none';
    	graduateCard1.style.display = 'none';
    	jobCard.style.display = 'block';
    } else if (cardId === 'customRadioPermanent') {
    	graduateCard.style.display = 'none';
    	graduateCard1.style.display = 'none';
    	jobCard.style.display = 'block';
    	jobCard1.style.display = 'block';
        jobCard2.style.display = 'block';
   	} else if (cardId === 'customRadioParttime') {
    	graduateCard.style.display = 'none';
    	graduateCard1.style.display = 'none';
    	jobCard.style.display = 'block';
    	jobCard1.style.display = 'block';
        jobCard2.style.display = 'block';
   	} else if (cardId === 'customRadioTemporaryContractual') {
    	graduateCard.style.display = 'none';
    	graduateCard1.style.display = 'none';
    	jobCard.style.display = 'block';
    	jobCard1.style.display = 'block';
        jobCard2.style.display = 'block';
    } else if (cardId === 'customRadioNone') {
    	graduateCard.style.display = 'none';
    	graduateCard1.style.display = 'none';
    	jobCard.style.display = 'block';
    	jobCard1.style.display = 'none';
        jobCard2.style.display = 'none';
  	}
}
</script>


<script src="assets/js/addSurveyResponseValidation.js"></script>

<script type="text/javascript">
    setTimeout(function () {
        $( "#alert" ).delay(2500).fadeOut(5000);
    }, );
</script>

<?= element( 'footerForm' ); ?>