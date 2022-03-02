<?php
include_once 'config/init.php';
?>

<?php
$job = new Job;

$template = new Template('templates/create_read_form.php');

$template->jobs = $job->getallJobs();

echo $template;


?>
