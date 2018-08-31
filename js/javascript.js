jQuery().ready(function() {
	jQuery('.edit-student').click(function(){
		// kiem tra xem form add student da show hay chua 
		if(!jQuery('#addStudent').hasClass('show')){ // neu chua show
			jQuery('#nav-student > .btn-danger').click(); 
		}
		
		var id = jQuery(this).attr('id'); //return id cua student
		
		// lay thong tin cua student dang muon edits 
		var student_id = jQuery('tr#student-'+id+' .student-id').text();
		var student_name = jQuery('tr#student-'+id+' .student-name').text();
		var student_dob = jQuery('tr#student-'+id+' .dob').text();
		var student_class = jQuery('tr#student-'+id+' .class').text();
		// end lay thong tin cua student dang muon edit
		
		// update thong tin cua student len form
		jQuery('#new_student_id').val(student_id);
		jQuery('#new_student_name').val(student_name);
		jQuery('#new_dob').val(student_dob);
		jQuery('#new_class').val(student_class);
		// end update thong tin cua student len form
		
		jQuery('#new_student_name').focus(); // trỏ về field student id
		jQuery('#addStudent .add-form').attr('action', 'edit.php'); 
		jQuery('#addStudent .add-form #new_student_id').attr('readonly', '');
		jQuery('#addStudent .btn-success').html('<span class="icon-checkmark"></span>Update student'); 
		jQuery('#addStudent .btn-danger').html('<span class="icon-cross"></span>Open Add Student window');
		jQuery('#nav-student > .btn-danger').html('<span class="icon-pencil3"></span>Edit current student');
	});
	
	jQuery('#addStudent .btn-danger').click(function(){
		jQuery('#nav-student > .btn-danger').html('<span class="icon-user-plus"></span>Add student');
		jQuery('#addStudent .add-form #new_student_id').removeAttr('readonly');
		jQuery('#addStudent .btn-success').html('<span class="icon-checkmark"></span>Add new student'); 
		jQuery('#addStudent .btn-danger').html('<span class="icon-cross"></span>Reset');
		jQuery('#addStudent .add-form').attr('action', 'add.php');
	});


	
	jQuery('.edit-course').click(function(){
		// kiem tra xem form add course da show hay chua 
		if(!jQuery('#addCourse').hasClass('show')){ // neu chua show
			jQuery('#nav-course > .btn-danger').click(); 
		}
		
		var id = jQuery(this).attr('id'); //return id cua course
		
		// lay thong tin cua course dang muon edit 
		var course_id = jQuery('tr#course-'+id+' .course-id').text();
		var course_name = jQuery('tr#course-'+id+' .course-name').text();
		var course_mentor = jQuery('tr#course-'+id+' .mentor').text();
		var course_credit = jQuery('tr#course-'+id+' .credit').text();
		// end lay thong tin cua course dang muon edit
		
		// update thong tin cua course len form
		jQuery('#new_course_id').val(course_id);
		jQuery('#new_course_name').val(course_name);
		jQuery('#new_mentor').val(course_mentor);
		jQuery('#new_credit').val(course_credit);
		// end update thong tin cua course len form
		
		jQuery('#new_course_name').focus(); // trỏ về field student id
		jQuery('#addCourse .add-form').attr('action', 'edit.php'); 
		jQuery('#addCourse .add-form #new_course_id').attr('readonly', '');
		jQuery('#addCourse .btn-success').html('<span class="icon-checkmark"></span>Update course'); 
		jQuery('#addCourse .btn-danger').html('<span class="icon-cross"></span>Open Add Course window');
		jQuery('#nav-course > .btn-danger').html('<span class="icon-pencil3"></span>Edit current course');
	});
	
	jQuery('#addCourse .btn-danger').click(function(){
		jQuery('#nav-course > .btn-danger').html('<span class="icon-folder-plus2"></span>Add course');
		jQuery('#addCourse .add-form #new_course_id').removeAttr('readonly');
		jQuery('#addCourse .btn-success').html('<span class="icon-checkmark"></span>Add new course');
		jQuery('#addCourse .btn-danger').html('<span class="icon-cross"></span>Reset');
		jQuery('#addCourse .add-form').attr('action', 'add.php');
	});

	

	jQuery(".add-form").validate({
		errorClass: "invalid",
	    rules: {
	        new_student_id: {
	          required: true,
	          minlength: 1
	        },
	        new_student_name: {
	          required: true,
	          minlength: 2
	        },
	        new_dob :{
	          required: true,
	          date: true
	        },
	        new_class: {
	          required: true,
	        },
	        new_course_id: {
	          required: true,
	          minlength: 1
	        },
	        new_course_name: {
	          required: true,
	          minlength: 2
	        },
	        new_mentor: {
	          required: true,
	          minlength: 2
	        },
	        new_credit: {
	          required: true,
	          number: true,
	        },
	      },
	    messages: {
	        new_student_id: {
	        	required: "Please enter student id",
	        	minlength: "Please enter valid student id"
	        },
	        new_student_name: {
	        	required: "Please enter student name",
	        	minlength: "Please enter valid student name"
	        },
	        new_dob : {
	        	required: "Please enter date of birth",
	        	date: "Please enter valid date of birth"
	        },
	        new_class: {
	        	required: "Please enter valid class",
	        } ,
	        new_course_id: {
	        	required: "Please enter course id",
	        	minlength: "Please enter valid course id"
	        },
	        new_course_name: {
	        	required: "Please enter course name",
	        	minlength: "Please enter valid course name"
	        },
	        new_mentor: {
	        	required: "Please enter name for mentor",
	        	minlength: "Please enter valid name for mentor"
	        },
	        new_credit: {
	        	required: "Please enter number of credit",
	        	number: "Please enter valid number of credit"
	        }
	      }
	});





});