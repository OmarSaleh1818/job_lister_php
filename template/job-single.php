<?php include 'include/header.php';?>
    <h2 class="page-header" style="margin:1em 0em 0em 6em;color:#7e3333; "><?php echo $job->job_title; ?>
         (<?php echo $job->location; ?>)
    </h2><br>
    <small style="margin-left:18em;">Posted By : <?php echo $job->contact_user; ?> on 
         <?Php echo $job->post_date;?>
    </small>
    <br><br>
    <hr style="margin-left:12em;margin-right:15em">
    <p class="lead" style="margin-left:12em;margin-right:15em;
        line-height: 26px;
        margin-bottom: 20px;"><?php echo $job->description; ?>
    </p><br>
    <ul class="list-group" style="margin-left:15em; margin-right:15em;">
        <li class="list-group-item"><strong>Company : </strong>
        <?php echo $job->company; ?></li><br>
        <li class="list-group-item"><strong>Salary : </strong>
        <?php echo $job->salary; ?></li><br>
        <li class="list-group-item"><strong>Contact Email : </strong>
        <?php echo $job->contact_email; ?></li><br>
    </ul><br>
    <div class="well">
        <a href="index.php"  style="margin-left:15em; padding: 10px 18px; color: white !important;
            background: #444;
            background-color: #7e3333;
            border-radius: 2px; text-decoration: none;">Go Back
        </a>
        <a href="edit.php?id=<?php echo $job->id; ?>" style="margin-left:15em; padding: 10px 18px; color: white !important;
            background: #444;
            background-color: #7e3333;
            border-radius: 2px; text-decoration: none;">Edit</a>
        <form action="job.php" method="post" style="display:inline;">
            <input type="hidden" name="del_id" value="<?php echo $job->id;?>">
            <input type="submit" style="margin-left:15em; padding: 10px 18px; color: white !important;
            background: #444;
            background-color: #7e3333;
            border-radius: 2px; text-decoration: none;" value="Delete">
        </form>
    </div>

<?php include 'include/footer.php'; ?>