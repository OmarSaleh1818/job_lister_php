<?php include 'include/header.php';?>
<br><br>
    <h2 class="page-header" style="margin-left:12em; margin-right:10em;color:#7e3333;">Edit Job Listing</h2><br>
    <form action="edit.php?id=<?php echo $job->id;?>" method="post">
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Company</label><br>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company;?>">
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Category</label><br>
            <select name="category" class="form-control">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category) :?>
                    <?php if($job->category_id == $category->id): ?>
                    <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                <?php else: ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Job Title</label><br>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title;?>">
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Description</label><br>
            <textarea class="form-control" rows="5" name="description"><?php echo $job->description;?></textarea>
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Location</label><br>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location;?>">
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Salary</label><br>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary;?>">
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Contact User</label><br>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user;?>">
        </div><br>
        <div class="form-group" style="margin-left:15em; margin-right:15em;">
            <label>Contact Email</label><br>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email;?>">
        </div><br><br>
        <input type="submit" class="btn btn-default" value="submit" name="submit" style="margin-left:15em; padding: 10px 18px; color: white !important;
        background: #444;
        background-color: #7e3333;
        border-radius: 2px;">
        <br><br>
    </form>

<?php include 'include/footer.php'; ?>