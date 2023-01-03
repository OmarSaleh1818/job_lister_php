<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Lister</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid"style="">
        <a class="rounded-pill navbar-brand" href="index.php" style="color:#7e3333; margin-left:5em; margin-top:0.3em; ">
        <img src="img_avatar1.png" alt="Logo" style="width:35px; margin-right:0.5em;" class="rounded-pill">OMAR ABDULLAH</a>
        <button class="navbar-toggler" type="button"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto  mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="create.php">Create Listing</a>
            </li>
        </ul>
        <!--<form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary" type="submit" style="margin-right:5em;">Search</button>
        </form> -->
        </div>
    </div>
    </nav>
    <?php displayMessage(); ?>
    
    