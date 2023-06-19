<!DOCTYPE html>
<html>
<head>
    <style>.error {color: red;}</style>
</head>

<body>
    <!-- CODE FOR NAME  -->
<h2>NAME</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <br>
    <label for="inputText">Enter Text:</label>
    <input type="text" name="inputText" id="inputText" placeholder="Enter Your Name">
    <br>
  
    <span class="error">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $inputText = $_POST['inputText'];

            // Check if input is empty
            if (empty($inputText)) {
                echo 'Input cannot be empty';
            }
            // Check if input contains at least two words
            elseif (str_word_count($inputText) < 2) {
                echo 'Input must contain at least two words';
            }
            // Check if input starts with a letter
            elseif (!preg_match('/^[a-zA-Z]/', $inputText)) {
                echo 'Input must start with a letter';
            }
            elseif (preg_match('/\d/', $inputText)) {
                echo 'Input cannot contain any numbers';
            }
            // Check if the first letter is capitalized
            elseif (ucfirst($inputText) !== $inputText) {
                echo 'The first letter must be capitalized';
            }
        }
        ?>
    </span>
    <br>

        <input type="submit" value="Submit"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br>

</form>

<!-- CODE FOR EMAIL -->
<h2>EMAIL</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email"placeholder="Enter Your Email">
        <br>

        <span class="error">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];

                // email empty 
                if (empty($email)) 
                {
                    echo 'Email address cannot be empty';
                }
                // email is valid
                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo 'Invalid email address';
                }
                
            }
            ?>
        </span>
        <br>
        <input type="submit" value="Submit"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br>

    </form>
    
    <!-- CODE FOR DATE OF BIRTH  -->
    <h2>DATE OF BIRTH</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="date">Date (dd/mm/yyyy):</label>
        <input type="text" name="date" id="date">
        <br>

        <span class="error">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $date = $_POST['date'];

                // empty date
                if (empty($date)) {
                    echo 'Date cannot be empty';
                } else {
                    // (day, month, year)
                    $dateParts = explode('/', $date);
                    $day = $dateParts[0];
                    $month = $dateParts[1];
                    $year = $dateParts[2];

                    // day, month, and year valid numbers
                    if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) 
                    {
                        echo 'Invalid date format';
                    }
                    // day is between 1 and 31
                    elseif ($day < 1 || $day > 31) {
                        echo 'Invalid day (must be between 1 and 31)';
                    }
                    // month size 1 and 12
                    elseif ($month < 1 || $month > 12) {
                        echo 'Invalid month (must be between 1 and 12)';
                    }
                    // Check if year is between 1953 and 1998
                    elseif ($year < 1900 || $year > 2010) {
                        echo 'Invalid year (must be between 1900 and 2010)';
                    }
                }
            }
            ?>
        </span>
        <br>
        <input type="submit" value="Submit"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br>

    </form>
   <!-- CODE FOR GENDER  -->
    <h2>GRNDER </h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="male">Male  :</label>
        <input type="radio" name="gender" id="male" value="male">
        

        <label for="female">Female  :</label>
        <input type="radio" name="gender" id="female" value="female">
        

        <label for="other">Other  :</label>
        <input type="radio" name="gender" id="other" value="other">
       

        <span class="error">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (empty($_POST['gender'])) {
                    echo 'At least one gender option must be selected';
                }
            }
            ?>
        </span>
       <br><br>
        <input type="submit" value="Submit"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br><br>

    </form>
     
   <!-- CODE FOR DEGREE -->
   
    <h2>DEGREE</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h3>At least two options selection</h3>
        <input type="checkbox" name="option1" value="option1">
        <label for="option1">JSC</label><br>

        <input type="checkbox" name="option2" value="option2">
        <label for="option2">SSC</label><br>

        <input type="checkbox" name="option3" value="option3">
        <label for="option3">HSC</label><br>

        <input type="checkbox" name="option4" value="option4">
        <label for="option4">BSc</label><br>

        <input type="checkbox" name="option5" value="option5">
        <label for="option5">MSc</label><br><br>
        <span class="error">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $selectedCount = 0;

                if (isset($_POST['option1']) && $_POST['option1'] === 'option1') {
                    $selectedCount++;
                }

                if (isset($_POST['option2']) && $_POST['option2'] === 'option2') {
                    $selectedCount++;
                }

                if (isset($_POST['option3']) && $_POST['option3'] === 'option3') {
                    $selectedCount++;
                }

                if (isset($_POST['option4']) && $_POST['option4'] === 'option4') {
                    $selectedCount++;
                }

                if (isset($_POST['option5']) && $_POST['option5'] === 'option5') {
                    $selectedCount++;
                }

                if ($selectedCount < 2) {
                    echo 'At least two options must be selected';
                }
            }
            ?>
        </span>
        <input type="submit" value="Submit"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br>

    </form>

    <!-- CPDE FOR BLOOD GROUP  -->
    <h2>FOR BLOOD GROUP</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="bloodGroup">Blood Group:</label>
        <select name="bloodGroup" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <span class="error">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                if (empty($_POST['bloodGroup'])) 
                {
                    echo 'A blood group must be selected';
                }
            }
            ?>
        </span>
        <br><br>
        <input type="submit" value="SUBMIT"><br>
        <hr style ='border:1px solid black; width: 70%; float: left; '> <br><br>
<br><br><br><br>
    
</form>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
    $inputText = $_POST['inputText'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $selectedDegrees = [];
    if (isset($_POST['option1']) && $_POST['option1'] === 'option1') 
    {
        $selectedDegrees[] = 'JSC';
    }
    if (isset($_POST['option2']) && $_POST['option2'] === 'option2') 
    {
        $selectedDegrees[] = 'SSC';
    }
    if (isset($_POST['option3']) && $_POST['option3'] === 'option3') 
    {
        $selectedDegrees[] = 'HSC';
    }
    if (isset($_POST['option4']) && $_POST['option4'] === 'option4') 
    {
        $selectedDegrees[] = 'BSc';
    }
    if (isset($_POST['option5']) && $_POST['option5'] === 'option5') 
    {
        $selectedDegrees[] = 'MSc';
    }
    $bloodGroup = $_POST['bloodGroup'];
    ?>
    <h2>Submitted Information:</h2>
    <ul>
        <li><strong>Name:</strong> <?php echo $inputText; ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Date of Birth:</strong> <?php echo $date; ?></li>
        <li><strong>Gender:</strong> <?php echo $gender; ?></li>
        <li><strong>Degrees:</strong> <?php echo implode(', ', $selectedDegrees); ?></li>
        <li><strong>Blood Group:</strong> <?php echo $bloodGroup; ?></li>
    </ul>
    <?php
}
?>
</body>
</html>