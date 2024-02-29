<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>User Registration</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <?php header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");?>
<style>

.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #000;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}

.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
<h2>Register</h2>


<?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
<div class="form-group">
<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:green"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>

<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>


<div class="row">
<div class="col">
<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>set_value('firstname'),'placeholder'=>'Enter First Name']);?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>

</div>
<div class="col">
<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>set_value('lastname'),'placeholder'=>'Enter Last Name']);?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>

</div>
</div>        	
 </div>
        
<div class="form-group">
<?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>set_value('emailid'),'placeholder'=>'Enter your Email id']);?>
 <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>       	
 </div>

 <div class="form-group">
<?php echo form_input(['name'=>'dob','type'=>'date','class'=>'form-control','value'=>set_value('dob'),'placeholder'=>'Enter your Email id']);?>
 <?php echo form_error('dob',"<div style='color:red'>","</div>");?>  

 </div>

<div class="form-group">
<?php echo form_input(['name'=>'age','class'=>'form-control','value'=>set_value('age'),'placeholder'=>'Enter your Age']);?>
 <?php echo form_error('age',"<div style='color:red'>","</div>");?> 
 </div>

<div class="form-group">
<select class="form-control">
	<option value="">Select your gender</option>
	  <?php foreach ($genderss as $key =>$gender) { ?>
        <option value="<?php echo $key; ?>"><?php echo $gender ?></option>
    <?php } ?>
</select>
</div>

<div class="form-group">
<?php echo form_input(['name'=>'address','class'=>'form-control','value'=>set_value('address'),'placeholder'=>'Enter your Address']);?>
 <?php echo form_error('address',"<div style='color:red'>","</div>");?> 
 </div>

 <div class="form-group">
<select name="country" class="form-control" id="country">
    <option>Select your country</option>
    <?php foreach ($countriess as $key =>$country) { ?>
        <option value="<?php echo $key; ?>"><?php echo $country ?></option>
    <?php }
    ?>
</select>
</div>

<div class="form-group">
<select class="form-control" id="state">
	<option value="">Select your state</option>
	
</select>
</div>

<div class="form-group">
<?php echo form_password(['name'=>'password','class'=>'form-control','value'=>set_value('password'),'placeholder'=>'Password']);?>
 <?php echo form_error('password',"<div style='color:red'>","</div>");?>  

</div>
<div class="form-group">
<?php echo form_password(['name'=>'confirmpassword','class'=>'form-control','value'=>set_value('confirmpassword'),'placeholder'=>'Password']);?>
 <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>  
</div>        
  
<div class="form-group">
<?php echo form_submit(['name'=>'insert','value'=>'Submit','class'=>'btn btn-success btn-lg btn-block']);?>
        </div>
    </form>
    <?php echo form_close();?>
	<div class="text-center">Already have an account? <a href="<?php echo site_url('Signin');?>">Sign in</a></div>
</div>
</body>
</html>

<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"http://localhost/test/welcome/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select State</option>');
   $('#city').html('<option value="">Select City</option>');
  }
 });

 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>dynamic_dependent/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });
 
});
</script>
