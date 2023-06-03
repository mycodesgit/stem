<?php
include '../../init.php';

// Prepare the statement to get the total count
$stmtTotal = $DB->prepare("SELECT COUNT(*) AS res_count FROM responses");
$stmtTotal->execute();
$resultTotal = $stmtTotal->get_result()->fetch_array();

// Prepare the statement to get the count for 'Yes'
$stmtYes = $DB->prepare("SELECT COUNT(*) AS res_count FROM responses WHERE pursue_study = ?");
$pursueStudyYes = 'Yes';
$stmtYes->bind_param("s", $pursueStudyYes);
$stmtYes->execute();
$resultYes = $stmtYes->get_result()->fetch_array();

// Prepare the statement to get the count for 'No'
$stmtNo = $DB->prepare("SELECT COUNT(*) AS res_count FROM responses WHERE pursue_study = ?");
$pursueStudyNo = 'No';
$stmtNo->bind_param("s", $pursueStudyNo);
$stmtNo->execute();
$resultNo = $stmtNo->get_result()->fetch_array();

$response = array(
  'res_count_total' => $resultTotal['res_count'],
  'res_count_yes' => $resultYes['res_count'],
  'res_count_no' => $resultNo['res_count']
);

header('Content-Type: application/json');
echo json_encode($response);
?>
