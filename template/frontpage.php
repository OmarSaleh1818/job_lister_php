<?php include 'include/header.php';?>
<main>
  <div class="container py-4">   
    <h3 class="text-muted" style="margin-left:7em;"><?php echo SITE_TITLE; ?> </h3>
    <div class="row align-items-md-stretch">
      <div class="col-md-8" style="margin-left:13em">
        <div class="h-100 p-5 bg-light border rounded-3">
        <h1 class="display-5 fw-bold" style="text-align:center">Find A Job</h1><br>
        <form action="index.php" method="GET">
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category) :?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select><br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND" style="margin-left:14em;">
        </form>
        </div>
      </div>
    </div><br><br>

    <h2 style="text-align:center; border:2px solid #ddd;"><?php echo $title; ?></h2><br><br>

    <?php foreach($jobs as $job): ?>
    <div class="row marketing" style="margin-left:8em;">
        <div class="col-md-10">
            <h4><?php echo $job->job_title; ?></h4>
            <p style="padding: 10px 0px 15px 0px;border-bottom: 1px solid #e0e0e0;"><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success" href="job.php?id=<?php echo $job->id;?>" style="margin-top:2em;">View</a>
        </div><br>
    </div>
    <?php endforeach; ?>
    
</main>
<?php include 'include/footer.php'; ?>
