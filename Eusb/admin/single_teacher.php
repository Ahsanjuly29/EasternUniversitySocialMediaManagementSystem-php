<?php 
$link='teacher';
$user= $link.'_'.'id';
include("include/connection.php"); ?>
<?php
session_start();
if(!isset($_SESSION['admin_name'])){
	
	header("location: sign_in.php");
}
else{

?>
<?php include('include/header.php')?>
<?php
	if(isset($_GET['view_teacher'])){
		$edit_id= $_GET['view_teacher'];
		$query = "select * from teacher where teacher_id='$edit_id'";
		$run=mysqli_query($connection,$query);
		
			while($row = mysqli_fetch_array($run)){
				
				$id = $row['teacher_id'];
				$fname = $row['first_name'];
				$lname = $row['last_name'];
				$email = $row['email'];
				$permission = $row['permission'];
				$dob=$row['dob'];
				$mobile = $row['mobile'];
				$home=$row['home'];
				$p_address=$row['p_address'];
				$religion=$row['religion'];
				$password=$row['password'];
				$sex = $row['sex'];
				$department = $row['department'];
				$image = $row['teacher_image'];
				
			}
	}
?>
			<div class="admin-content-area">
				<div class="admin-content">
					<div class="content-heading">
						<h3>details of <?php echo $fname; ?></h3>
					</div>
					<div class="content">
						<div class="view-student">
							<div class="view-student-area">
								<img src="../image/teacher/<?php echo $image; ?>" alt="" />
							</div>
							<div class="view-student-area">
								<ul>
									<li>First Nmae:</li>
									<li><?php echo $fname; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Last Name</li>
									<li><?php echo $lname; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Email</li>
									<li><?php echo $email; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Date Of birth:</li>
									<li><?php echo $dob; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Phone Number</li>
									<li><?php echo $mobile; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Home Address</li>
									<li><?php echo $home; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Currtent Address</li>
									<li><?php echo $p_address; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Currtent password</li>
									<li><?php echo $password; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Religion</li>
									<li><?php echo $religion; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Gender</li>
									<li><?php echo $sex; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>department</li>
									<li><?php echo $department; ?></li>
								</ul>
							</div>
							<div class="view-student-area">
								<ul>
									<li>Account:</li>
									<li><?php echo $permission; ?></li>
								</ul>
							</div>
							
							<?php	
								if($_SESSION['admin_type']=='Admin' OR $_SESSION['admin_type']=='admin'){
							?>
							
							<div class="view-student-area">
							<!--	<a href="edit_user.php?edit_user=<?php// echo $id;?>&&user_type=<?php// echo $link;?>">
								--><a href="#"  title="Coming Soon">
								<i class="fa fa-edit"></i> Edit profile</a>
							</div>
							<?php  
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php include('include/footer.php')?>
<?php }?>