<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servername = "localhost";$username = "root";$password = "";$dbname = "labtest";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Employee (E_ID, E_TITLE, initial_SALARY, current_SALARY) VALUES ('".$_POST['E_ID']."','".$_POST['E_TITLE']."','".$_POST['initial_SALARY']."','".$_POST['current_SALARY']."');";
                
        if($conn->query($sql) === TRUE){
            echo "Employee added successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
<html>
    <body>
        <h1>Employee Info</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	E_ID: <input type="text" name="E_ID"><br><br>
	E_TITLE: <input type="text" name="E_TITLE"><br><br>
	initial_SALARY: <input type="text" name="initial_SALARY"><br><br>
	current_SALARY: <input type="text" name="current_SALARY"><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>