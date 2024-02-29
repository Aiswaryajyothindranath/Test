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
	color: #999;
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
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  background-color: #dddddd;
}
</style>
</head>
<body>
<div class="signup-form">
	<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="<?php echo site_url('home/profile');?>">Profile</a></li>
  <li><a href="<?php echo site_url('welcome/logout');?>">Logout</a></li>
</ul>
<h2>Profile</h2>



<!-- <?php echo form_open('Signup',['name'=>'userregistration','autocomplete'=>'off']);?>
 --><div class="form-group">
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
<?php echo form_input(['name'=>'firstname','class'=>'form-control','value'=>$user['first_name']])?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>

</div>
<div class="col">
<?php echo form_input(['name'=>'lastname','class'=>'form-control','value'=>$user['last_name']]);?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>

</div>
</div>        	
 </div>
        
<div class="form-group">
<?php echo form_input(['name'=>'emailid','class'=>'form-control','value'=>$user['email'],]);?>
 <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>       	
 </div>

 <div class="form-group">
<?php echo form_input(['name'=>'dob','type'=>'date','class'=>'form-control','value'=>$user['dob']]);?>
 <?php echo form_error('dob',"<div style='color:red'>","</div>");?>  

 </div>

<div class="form-group">
<?php echo form_input(['name'=>'age','class'=>'form-control','value'=>$user['age']]);?>
 <?php echo form_error('age',"<div style='color:red'>","</div>");?> 
 </div>

<div class="form-group">
<select class="form-control" name="gender">
	<option value=""><?php echo $user['gender'];?></option>
	  <?php foreach ($genderss as $key =>$gender) { ?>
        <option value="<?php echo $key; ?>"><?php echo $gender ?></option>
    <?php } ?>
</select>
</div>

<div class="form-group">
<?php echo form_input(['name'=>'address','class'=>'form-control','value'=>$user['address']]);?>
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

        
  

    </form>
    <?php echo form_close();?>
</div>
</body>
</html>


