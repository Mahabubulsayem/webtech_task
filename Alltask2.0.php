<!DOCTYPE html>
<html>
<head>
    <title>HTML Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>HTML Form Validation</h2>

    <?php
    $name = $email = $date = $gender = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];

        // Validation for Form 1
        $form1Errors = array();

        if (empty($name)) {
            $form1Errors[] = 'Name cannot be empty';
        } else {
            $words = explode(' ', $name);
            if (count($words) < 2) {
                $form1Errors[] = 'Name must contain at least two words';
            }

            if (!preg_match('/^[a-zA-Z][a-zA-Z. -]+$/', $name)) {
                $form1Errors[] = 'Name must start with a letter and can only contain letters, period, and dash';
            }
        }

        // Validation for Form 2
        $form2Errors = array();

        if (empty($email)) {
            $form2Errors[] = 'Email address cannot be empty';
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $form2Errors[] = 'Invalid email address';
            }
        }

        // Validation for Form 3
        $form3Errors = array();

        if (empty($date)) {
            $form3Errors[] = 'Date cannot be empty';
        } else {
            $dateParts = explode('/', $date);
            $day = $dateParts[0];
            $month = $dateParts[1];
            $year = $dateParts[2];

            if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
                $form3Errors[] = 'Invalid date format';
            } else {
                if ($day < 1 || $day > 31) {
                    $form3Errors[] = 'Invalid day (must be between 1 and 31)';
                }
                if ($month < 1 || $month > 12) {
                    $form3Errors[] = 'Invalid month (must be between 1 and 12)';
                }
                if ($year < 1953 || $year > 1998) {
                    $form3Errors[] = 'Invalid year (must be between 1953 and 1998)';
                }
            }
        }

        // Validation for Form 4
        $form4Errors = array();

        if (empty($gender)) {
            $form4Errors[] = 'At least one gender option must be selected';
        }

        // Validation for Form 5
        $form5Errors = array();

        if (empty($_POST['genders']) || count($_POST['genders']) < 2) {
            $form5Errors[] = 'At least two gender options must be selected';
        }

        // Validation for Form 6
        $form6Errors = array();

        if (empty($_POST['selected_option'])) {
            $form6Errors[] = 'An option must be selected';
        }

        // Display submitted information and errors
        if (empty($form1Errors) && empty($form2Errors) && empty($form3Errors) && empty($form4Errors) && empty($form5Errors) && empty($form6Errors)) {
            echo '<h3>Submitted Information:</h3>';
            echo '<p>Name: ' . $name . '</p>';
            echo '<p>Email: ' . $email . '</p>';
            echo '<p>Date: ' . $date . '</p>';
            echo '<p>Gender: ' . $gender . '</p>';
        } else {
            // Display error messages
            if (!empty($form1Errors)) {
                echo '<h3>Form 1 Errors:</h3>';
                foreach ($form1Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
            if (!empty($form2Errors)) {
                echo '<h3>Form 2 Errors:</h3>';
                foreach ($form2Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
            if (!empty($form3Errors)) {
                echo '<h3>Form 3 Errors:</h3>';
                foreach ($form3Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
            if (!empty($form4Errors)) {
                echo '<h3>Form 4 Errors:</h3>';
                foreach ($form4Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
            if (!empty($form5Errors)) {
                echo '<h3>Form 5 Errors:</h3>';
                foreach ($form5Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
            if (!empty($form6Errors)) {
                echo '<h3>Form 6 Errors:</h3>';
                foreach ($form6Errors as $error) {
                    echo '<p class="error">' . $error . '</p>';
                }
            }
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h3>NAME</h3>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <br>

        <h3>EMAIL</h3>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <br>

        <h3>DATE OF BIRTH</h3>
        <label for="date">Date (dd/mm/yyyy):</label>
        <input type="text" name="date" id="date" value="<?php echo $date; ?>">
        <br>

        <h3>GENDER</h3>
        <label for="male">Male:</label>
        <input type="radio" name="gender" id="male" value="male">
        <br>

        <label for="female">Female:</label>
        <input type="radio" name="gender" id="female" value="female">
        <br>

        <label for="other">Other:</label>
        <input type="radio" name="gender" id="other" value="other">
        <br>

        <h3>DEGREE</h3>
        <label for="gender1">SSC:</label>
        <input type="checkbox" name="genders[]" id="gender1" value="option1">
        <br>

        <label for="gender2">HSC:</label>
        <input type="checkbox" name="genders[]" id="gender2" value="option2">
        <br>

        
        <label for="gender3">BSc:</label>
        <input type="checkbox" name="genders[]" id="gender3" value="option3">
        <br>

        <label for="option4">MSc:</label>
        <input type="radio" name="selected_option" id="option2" value="option2">
        <br>



        
        <h3>BLOOD GROUP</h3>
        <label for="option1">Option 1:</label>
        <input type="radio" name="selected_option" id="option1" value="option1">
        <br>

        <label for="option2">Option 2:</label>
        <input type="radio" name="selected_option" id="option2" value="option2">
        <br>
        

        <input type="submit" value="Submit">
    </form>
</body>
</html>
