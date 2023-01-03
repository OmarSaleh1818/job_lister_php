<?php

include_once 'config/init.php';

$job = new Job();

if (isset($_POST['submit'])) {
    //Create Data Array
    $data = array();
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['job_title'] = $_POST['job_title'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if ($job->create($data)) {
        redirect("index.php", "Your Job Has Been Listed", "success");
    } else {
        redirect("index.php", "Something wrong", "error");
    }
}

$template = new Template('template/job-create.php');


$template->categories = $job->getCategories();


echo $template;

