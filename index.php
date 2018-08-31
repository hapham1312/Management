<!DOCTYPE html>
<html>
<head>
	<title>Enrollment Fall 2018</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet/less" type="text/css" href="css/styles.less" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">

	<!-- icomoon icons font -->
	<link rel="stylesheet" type="text/css" href="icomoon/style.css">

  <link rel="stylesheet" type="text/css" href="css/all.css">
<!--  <link rel="stylesheet" type="text/css" href="fontawesome/fontawesome.min.css">-->
	
<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Owl carousel -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <script src="owlcarousel/owl.carousel.min.js"></script> -->


    
    <script src="js/less.min.js"></script>




</head>
<body>
<header>
<div class="container">
  <div class="product-navbar">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="#">FIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Academic program</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">English</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
</div>
</header>

<section class="jumbotron">
	<h1>Hanoi University</h1>
	<h2> Welcome to form enrollment Fall 2018!</h2>
</section>


<?php
$activeTab = 'home';
// Neu ton tai SESSION tab => lay ra thong tin cua tab dang active
if(isset($_SESSION['tab']) && $_SESSION['tab'] != ''){
  $activeTab = $_SESSION['tab'];
}
// End Neu ton tai SESSION tab => lay ra thong tin cua tab dang active
?>

<div class="container">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link <?php if($activeTab == 'student') echo 'active'; ?>" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="false">List of Students</a>
    <a class="nav-item nav-link <?php if($activeTab == 'course') echo 'active'; ?>" id="nav-course-tab" data-toggle="tab" href="#nav-course" role="tab" aria-controls="nav-course" aria-selected="false">List of Courses</a>
    <a class="nav-item nav-link <?php if($activeTab == 'enrollment') echo 'active'; ?>" id="nav-enrollment-tab" data-toggle="tab" href="#nav-enrollment" role="tab" aria-controls="nav-enrollment" aria-selected="false">List of enrollments</a>
  </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade <?php if($activeTab == 'student') echo 'show active'; ?>" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
  	<button type="button" class="btn btn-danger custom" data-toggle="collapse" href="#addStudent" role="button" aria-expanded="false" aria-controls="addStudent">
  		<span class="icon-user-plus"></span>Add student
  	</button><br><br>

  	<div class="collapse" id="addStudent">
  		<form class="add-form" action="add.php" method="POST">
  			<input class="input-area form-control" type="text" id="new_student_id" name="new_student_id" placeholder="Student ID..." required>
			
  			<input class="input-area form-control" type="text" id="new_student_name" name="new_student_name" placeholder="Student Name..." required>

  			<input class="input-area form-control" type="date" id="new_dob" name="new_dob" placeholder="Date of birth..." required>

  			<input class="input-area form-control" type="text" id="new_class" name="new_class" placeholder="Class..." required>

  			<button type="submit" class="btn btn-success">
  				<span class="icon-checkmark custom-icon"></span>Add new student
  			</button>
  			<button type="reset" class="btn btn-danger">
  				<span class="icon-cross custom-icon"></span>Reset
  			</button>
  		</form>
  	</div>


  	<table class="table table-hover table-dark">
  	  <thead>
  	    <tr>
  	      <th scope="col">Student ID</th>
  	      <th scope="col">Full Name</th>
  	      <th scope="col">Date of Birth</th>
  	      <th scope="col">Class</th>
  	    </tr>
  	  </thead>
  	  <tbody>
  	    <tr id="#>">
      		<td class="student-id"></td>
      		<td class="student-name"></td>
      		<td class="dob"></td>
      		<td class="class"></td>
      		<td>
            <a href="javascript:void(0)" id="#" class="icon-pencil3 edit-student" title="Edit item"></a>
          </td>
      		<td>
            <a href="#" onClick="return confirm('Do you want to delete this student?')" class="icon-bin22" title="Delete item"></a>
          </td>
  	    </tr>


  	    <?php } ?>
  	    
  	  </tbody>
  	</table>
  </div>

  <div class="tab-pane fade <?php if($activeTab == 'course') echo 'show active'; ?>" id="nav-course" role="tabpanel" aria-labelledby="nav-course-tab">
  	<button type="button" class="btn btn-danger custom" data-toggle="collapse" href="#addCourse" role="button" aria-expanded="false" aria-controls="addStudent">
  		<span class="icon-folder-plus2"></span>Add course
  	</button><br><br>

  	<div class="collapse" id="addCourse" >
  		<form class="add-form" action="add.php" method="POST">
  			<input class="input-area form-control" type="text" id="new_course_id" name="new_course_id" placeholder="Course ID..." required>
			
  			<input class="input-area form-control" type="text" id="new_course_name" name="new_course_name" placeholder="Course Name..." required>

  			<input class="input-area form-control" type="text" id="new_mentor" name="new_mentor" placeholder="Mentor..." required>

  			<input class="input-area form-control" type="number" id="new_credit" name="new_credit" placeholder="Credit..." required>

  			<button type="submit" class="btn btn-success">
  				<span class="icon-checkmark custom-icon"></span>Add new course
  			</button>
  			<button type="reset" class="btn btn-danger">
  				<span class="icon-cross custom-icon"></span>Reset
  			</button>
  		</form>
  	</div>


  	<table class="table table-hover table-dark">
  	  <thead>
  	    <tr>
  	      <th scope="col">Course ID</th>
  	      <th scope="col">Course name</th>
  	      <th scope="col">Mentor</th>
  	      <th scope="col">Credit(s)</th>

  	    </tr>
  	  </thead>
  	  <tbody>
  	  	
  	    <tr id="#">
  	    		<td class="course-id"></td>
  	    		<td class="course-name"></td>
  	    		<td class="mentor"></td>
  	    		<td class="credit"></td>
  	    		<td>
              <a href="javascript:void(0)" class="icon-pencil3 edit-course" id="#" title="Edit item"></a>
            </td>
  	    		<td>
              <a href="#" onClick="return confirm('Do you want to delete this course?')" class="icon-bin22" title="Delete item"></a>
            </td>
  	    </tr>
  	  </tbody>
  	</table>
  </div>

  <div class="tab-pane fade <?php if($activeTab == 'enrollment') echo 'show active'; ?>" id="nav-enrollment" role="tabpanel" aria-labelledby="nav-enrollment-tab">
  	<button type="button" class="btn btn-danger custom" data-toggle="collapse" href="#addEnrollment" role="button" aria-expanded="false" aria-controls="addStudent">
  		<span class="icon-eye-plus"></span>Add enrollment
  	</button><br><br>

  	<div class="collapse" id="addEnrollment" >
  		<form class="add-form" action="add.php" method="POST">
  			<input class="input-area form-control" type="text" id="enrollment_student_id" name="enrollment_student_id" placeholder="Student ID..." required>
			
  			<input class="input-area form-control" type="text" id="enrollment_course_id" name="enrollment_course_id" placeholder="Course ID..." required>

  			<button type="submit" class="btn btn-success">
  				<span class="icon-checkmark"></span>Add new enrollment
  			</button>
  			<button type="reset" class="btn btn-danger">
  				<span class="icon-cross"></span>Reset
  			</button>
  		</form>
  	</div>


	  <table class="table table-hover table-dark">
	  <thead>
	    <tr>
	      <th scope="col">Enrollment ID</th>
	      <th scope="col">Student ID</th>
	      <th scope="col">Student Name</th>
	      <th scope="col">Course ID</th>
	      <th scope="col">Course Name</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php 
	    	
	    <tr>
	    	<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
    		<td></td>
	    	<td><a href="#" onClick="return confirm('Do you want to delete this enrollment?')"><span class="icon-bin22" title="Delete item"></span></a></td>
	    </tr>
	  </tbody>
	</table>
  </div>
</div>

  <script src="bootstrap/js/jquery-3.0.0.slim.min.js"></script>
  <script src="bootstrap/js/popper.js"></script> 
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>