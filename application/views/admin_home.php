<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Home</title>
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
	table {
    background-color: #0000001f;

}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

.users-div {
	padding: 30px 0;
  	font-size: 15px;
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
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="<?php echo site_url('home/profile');?>">Profile</a></li>
  <li><a href="<?php echo site_url('welcome/logout');?>">Logout</a></li>
</ul>
<div class="users-div">
<h2>Users list</h2>
	<table>
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>DOB</th>

			<th>Age</th>

			<th>Gender</th>

			<th>Country</th>

			<th>State</th>
			<th>Status</th>
						<th>Approve</th>


		</thead>
		<tbody>    
			<?php foreach ($users as $key =>$user) { ?>
			<tr><td><?php echo $user['id'];?></td>
			<td><?php echo $user['first_name']; echo $user['last_name'];?></td>
			<td><?php echo $user['email'];?></td>

			<td><?php echo $user['dob'];?></td>

			<td><?php echo $user['age'];?></td>

			<td><?php echo $user['gender'];?></td>

			<td><?php echo $user['country'];?></td>

			<td><?php echo $user['state'];?></td>
			<td><?php echo $user['status'];?></td>
			<td><?php if($user['status']=="pending"){
			$userid=$user['id']; ?>

				<a href="<?php echo site_url("Home/approve/".$userid);?>">Approve</a>			
		<?php	}else{
				echo "Approved";
			}?>


		</tr>

		<?php } ?>
			
		</tbody>
	</table>
</div>
</body>
</html>

<script>
$(document).ready(function(){
 


 
});
</script>
