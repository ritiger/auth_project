<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
  </head>
<body>
	<div>
		<a href='<?= base_url('/') ?>'>Welcome</a>
		<a href='<?= base_url('/auth/register') ?>'>Register</a>
	</div>
<div class="container">
  <!-- <?php
      $msg = $this->session->flashdata('msg');
      if($msg != "") {
        echo "<div class='alert alert-success'>$msg</div>";
      }  
  ?> -->
  <?php if(!empty($this->session->flashdata('msg'))): ?>
    <h4 class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></h4>
  <?php endif; ?>
  <div class="col-md-6">
    <div class="card mt-4">
      <div class="card-header">
         Register Here
      </div>
      <form action="<?php echo base_url().'index.php/Auth/register'?>" name="registerForm" id="registerForm" method="post">
        <div class="card-body register" style="background: lightgray">
          <p class="card-text">Please fill with your details</p>
          <div class="form-group">
            <label for="name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control <?php echo (form_error('first_name') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('first_name')?>" placeholder="First Name">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('first_name'));?></p>
          </div>
          <div class="form-group">
            <label for="name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control <?php echo (form_error('last_name') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('last_name')?>" placeholder="Last Name">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('last_name'));?></p>
          </div>
          <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('email')?>" placeholder="Email">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('email'));?></p>
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('phone')?>" placeholder="Phone">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('phone'));?></p>
          </div>
          <div class="form-group">
            <label for="name">Password</label>
            <input type="password" name="password" id="password" class="form-control <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('password')?>" placeholder="Password">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('password'));?></p>
          </div>
          <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control <?php echo (form_error('cpassword') != "") ? 'is-invalid' : '';?>" value="<?php echo set_value('cpassword')?>" placeholder="Confirm Password">
            <p class="invalid-feedback"><?php echo strip_tags(form_error('cpassword'));?></p>
          </div>
          <div class="form-group">
            <button class="btn btn-block btn-primary">REGISTER NOW</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>               
</body>
</html>