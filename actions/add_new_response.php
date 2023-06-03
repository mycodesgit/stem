<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); 

if (isset($_POST['btn-submit'])) {

    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender = $_POST['gender'];
    $stem_track = $_POST['stem_track'];
    $year_grad = $_POST['year_grad'];
    $pursue_study = $_POST['pursue_study'];
    $course = $_POST['course'];
    $school = $_POST['school'];
    $job_status = $_POST['job_status'];
    $name_job = $_POST['name_job'];
    $instcom_name = $_POST['instcom_name'];

    // generate a token
    $token = bin2hex(random_bytes(16));

    if (!empty($lname) && !empty($fname) && !empty($mname)) {

        $sql_insert = "INSERT INTO responses SET lname=?, fname=?, mname=?, gender=?, stem_track=?, year_grad=?, pursue_study=?, course=?, school=?, job_status=?, name_job=?, instcom_name=?,  token=?";

        $stmt_insert = $DB->prepare($sql_insert);
        $stmt_insert->bind_param("sssssssssssss", $lname, $fname, $mname, $gender, $stem_track, $year_grad, $pursue_study, $course, $school, $job_status, $name_job, $instcom_name, $token);

        if ($stmt_insert->execute()) {
            header("Location: ./submitresponse");
            set_message("Thank you for participating in the tracer study. Your response has been submitted successfully. We appreciate your contribution!", 'success');
            exit;
        } else {
            set_message("<i class='fa fa-times'></i> Failed to submit" . $DB->error, 'danger');
        }
    }
}
?>
