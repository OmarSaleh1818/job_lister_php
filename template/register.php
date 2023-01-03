<?php include 'include/header.php';?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <div class="modal-body p-5 pt-0">
            <h2 style="text-align:center">Create An Account</h2><br>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="form-group">
                    <label for="username">User Name <sup>*</sup></label>
                    <input type="text" name="username" class="form-control form-control-lg
                    <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['username']; ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                </div><br>
                <div class="form-group">
                    <label for="email">Email Address <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg
                    <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                </div><br>
                <div class="form-group">
                    <label for="mobile_number">Mobile Number <sup>*</sup></label>
                    <input type="text" name="mobile_number" class="form-control form-control-lg 
                    <?php echo (!empty($data['mobile_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['mobile_number']; ?>">
                    <span class="invalid-feedback"><?php echo $data['mobile_err'];?></span>
                </div><br>
                <div class="form-group">
                    <label for="password">Password <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg 
                    <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ;?> "value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                </div><br>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password <sup>*</sup></label>
                    <input type="password" name="confirm_password" class="form-control form-control-lg
                    <?php echo (!empty($data['confirm_err'])) ? 'is-invalid' : '' ;?> "value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_err'];?></span>
                </div><br>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-lg btn-warning btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? LOGIN</a>
                    </div>
                </div><br>
                <hr class="my-3">
                <small class="text-muted">By clicking Register, you agree to the terms of use.</small>
            </form> 
            </div>  
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>