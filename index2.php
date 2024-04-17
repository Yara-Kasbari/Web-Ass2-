<?php

include_once 'Student1.php';
require_once "data.in.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	echo "Form submitted successfully!";
    if (isset($_POST['action'])) {
		//echo "Action: " . $_POST['action'];
        switch ($_POST['action']) {
            case 'insert':
                Insert();
                break;
            case 'update':
                Update();
                break;
            case 'view':
                View();
                break;
        }
    }
}

// Function to handle insert operation
       function Insert(){
		
   
         global $students;	
   

    // get the user input
     $newStudent = new Student(
        $_POST['studentID'],
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['Gender'],
        $_POST['DateOfBirth'],
        $_POST['Adress'],
        $_POST['City'],
        $_POST['Country'],
        $_POST['tel']
    );
	
    // Check if the student with the same ID already exists
    if (isset($students[$_POST['studentID']])) {
        echo "Error: Student with ID {$_POST['studentID']} already exists.";
    } else {
        // Insert the new student into the array
        $students[$_POST['studentID']] = $newStudent;
        echo "Student with ID {$_POST['studentID']} has been inserted successfully.";
    }
	
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'Insert') {
    Insert();
}


// Function to handle update operation
    function Update(){

   global $students;

  
    $updatedStudent = new Student(
        $_POST['studentID'],
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['Gender'],
        $_POST['DateOfBirth'],
        $_POST['Adress'],
        $_POST['City'],
        $_POST['Country'],
        $_POST['tel']
    );

    $studentID = $_POST['studentID'];
	
	 if (isset($students[$studentID])) {
                $students[$studentID]->firstName = $firstName;
                $students[$studentID]->lastName = $lastName;
                $students[$studentID]->Gender = $Gender;
                $students[$studentID]->DateOfBirth = $DateOfBirth;
                $students[$studentID]->Adress = $Adress;
                $students[$studentID]->City = $City;
                $students[$studentID]->Country = $Country;
                $students[$studentID]->tel = $tel;
                saveData($students);
                return 'Student updated successfully.';
            } else {
                return 'Error: Student not found.';
            }
}

   if (isset($_POST['updateStudent']) && $_POST['updateStudent'] === 'update') {
        Update();
    }

// Function to handle view operation
    function View() {
    global $students;

    if (isset($_GET['studentID'])) {
        $studentID = $_GET['studentID'];

        // Check if the student with the specified ID exists
        if (isset($students[$studentID])) {
            $student = $students[$studentID];
            
           

            echo "Student ID: {$student->getStudentID}<br>";
            echo "First Name: {$student->getFirstName}<br>";
            echo "Last Name: {$student->getLastName}<br>";
            echo "Gender: {$student->getGender}<br>";
            echo "Date of Birth: {$student->getDateOfBirth}<br>";
            echo "Address: {$student->getAdress}<br>";
            echo "City: {$student->getCity}<br>";
            echo "Country: {$student->getCountry}<br>";
            echo "Tel: {$student->getTel}<br>"; 
          
        } else {
            echo "Error: Student with ID $studentID not found.";
        }
    } else {
        echo "Error: No student ID provided.";
    }
}
if (isset($_POST['viewStudent']) && $_POST['viewStudent'] === 'view') {
        View();
    }



?>



<?php include 'C:/Users/user/xampp/htdocs/Assignment2/Run.htm'; ?>