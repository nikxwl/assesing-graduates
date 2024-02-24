<?php 
	include '../config.php';
	// include('../phpqrcode/qrlib.php');
	include '../includes/function_create.php';
	

	// SAVE ADMIN - ADMIN_MGMT.PHP
	if (isset($_POST['create_admin'])) {
	    $user_type = "0";
	    $path = "../images-users/";
	    saveUser($conn, "admin_mgmt.php?page=create", $user_type, $path);
	}


	// SAVE ALUMNI - ALUMNI_MGMT.PHP
	if (isset($_POST['create_alumni'])) {
		$user_type = "4";
		$path = "../images-users/";
		$year_graduated = $_POST['year_graduated'];
		$current_job = mysqli_real_escape_string($conn, $_POST['current_job']);
	    saveUser($conn, "alumni_mgmt.php?page=create", $user_type, $path, $year_graduated, $current_job);
	}


	// SAVE EVALUATOR - EVALUATOR_MGMT.PHP
	if (isset($_POST['create_evaluator'])) {
		$user_type = "1";
		$path = "../images-users/";
	    saveUser($conn, "evaluator_mgmt.php?page=create", $user_type, $path);
	}


	// SAVE DEPARTMENT SECRETARY - DEPT_SECRETARY_MGMT.PHP
	if (isset($_POST['create_dept_secretary'])) {
		$user_type = "3";
		$path = "../images-users/";
	    saveUser($conn, "dept_secretary_mgmt.php?page=create", $user_type, $path);
	}



	// SAVE ALUMNI OFFICER - OFFICER.PHP
	if (isset($_POST['create_officer'])) {
		$user_type = "2";
		$path = "../images-users/";
	    saveUser($conn, "officer_mgmt.php?page=create", $user_type, $path);
	}





	// SAVE ACTIVITY - ANNOUNCEMENT_ADD.PHP
	if (isset($_POST['create_activity'])) {
		$activity = mysqli_real_escape_string($conn, $_POST['activity']);
		$actDate  = mysqli_real_escape_string($conn, $_POST['actDate']);
		saveActivity($conn, "announcement.php", $activity, $actDate);
	}






	// SAVE ACTIVITY - ANNOUNCEMENT_ADD.PHP
	if (isset($_POST['create_question'])) {
	    $question    = mysqli_real_escape_string($conn, $_POST['question']);
	    $choice_type = mysqli_real_escape_string($conn, $_POST['choice_type']);

	    // Process the label based on the choice_type
	    if ($choice_type !== "Textfield/Textarea") {
	        // If choice_type is not "Textfield/Textarea", trim and filter out empty labels
	        $labels = array_filter(array_map('trim', $_POST['label']));

	        // Check for duplicate labels
	        if (count($labels) !== count(array_unique($labels))) {
	             displayErrorMessage("Duplicate label values are not allowed", "questionnaire_mgmt.php?page=create");
	            exit; // Stop further execution
	        }

	        $label = implode(', ', $labels);
	    } else {
	        // If choice_type is "Textfield/Textarea", set label to an empty string
	        $label = '';
	    }

	    // Check if the question already exists
	    $checkQuestionQuery = "SELECT COUNT(*) FROM question WHERE question = ?";
	    $checkQuestionStmt = mysqli_prepare($conn, $checkQuestionQuery);

	    if ($checkQuestionStmt) {
	        mysqli_stmt_bind_param($checkQuestionStmt, "s", $question);
	        mysqli_stmt_execute($checkQuestionStmt);
	        mysqli_stmt_bind_result($checkQuestionStmt, $questionCount);
	        mysqli_stmt_fetch($checkQuestionStmt);

	        // If the question already exists, do not proceed with the insertion
	        if ($questionCount > 0) {
	             displayErrorMessage("Question with the same text already exists", "questionnaire_mgmt.php?page=create");
	            exit; // Stop further execution
	        }

	        mysqli_stmt_close($checkQuestionStmt);
	    } else {
	         displayErrorMessage("Error preparing check statement for question", "questionnaire_mgmt.php?page=create");
	        exit; // Stop further execution
	    }

	    // Check if the labels for the same question already exist
	    $checkLabelQuery = "SELECT COUNT(*) FROM question WHERE question = ? AND label = ?";
	    $checkLabelStmt = mysqli_prepare($conn, $checkLabelQuery);

	    if ($checkLabelStmt) {
	        mysqli_stmt_bind_param($checkLabelStmt, "ss", $question, $label);
	        mysqli_stmt_execute($checkLabelStmt);
	        mysqli_stmt_bind_result($checkLabelStmt, $labelCount);
	        mysqli_stmt_fetch($checkLabelStmt);

	        // If the labels for the same question already exist, do not proceed with the insertion
	        if ($labelCount > 0) {
	            displayErrorMessage("Question with the same labels already exists", "questionnaire_mgmt.php?page=create");
	            exit; // Stop further execution
	        }

	        mysqli_stmt_close($checkLabelStmt);
	    } else {
	    	displayErrorMessage("Error preparing check statement for labels", "questionnaire_mgmt.php?page=create");
	        exit; // Stop further execution
	    }

	    // Use prepared statement for better security
	    $stmt = mysqli_prepare($conn, "INSERT INTO question (question, choice_type, label) VALUES (?, ?, ?)");

	    if ($stmt) {
	        // Bind parameters and execute the statement
	        mysqli_stmt_bind_param($stmt, "sss", $question, $choice_type, $label);

	        // Execute the statement
	        $result = mysqli_stmt_execute($stmt);

	        // Check and display save message
	        displaySaveMessage($result, "questionnaire_mgmt.php?page=create");

	        // Close the statement
	        mysqli_stmt_close($stmt);
	    } else {
	        // Handle the case where the statement could not be prepared
	        displayErrorMessage("Error preparing insert statement", "questionnaire_mgmt.php?page=create");
	    }
	}







	// DATABASE RESTORATION - RESTORE.PHP
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['restore'])) {
	    $file = $_FILES['fileToRestore']['tmp_name'];
	    if (!$file) {
	        die("Please choose a file to restore.");
	    }
	    $sql = file_get_contents($file);
	    $queries = explode(';', $sql);
	    foreach ($queries as $query) {
	        if (!empty(trim($query))) {
	            $result = mysqli_query($conn, $query);
	            if (!$result) {
	                die("Error executing SQL query: " . mysqli_error($conn));
	            }
	        }
	    }
	    $_SESSION['message'] = "Database restoration successful";
		$_SESSION['text'] = "Sent successfully!";
		$_SESSION['status'] = "success";
		header("Location: restore.php");
	}

	
	
?>



