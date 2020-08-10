<?php
    include "db.php";

    function create_user() {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username && $password) {
            if ($conn) {
                echo "Connected succefull";
            }else {
                die("Database Connection failed");
            }
        }
        $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error($conn));
        }
    }

    function read_data(){
        global $conn;
        if (!$conn) {
            die("Database Connection failed" . mysqli_error());
        }
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error());
        }
        while($row = mysqli_fetch_assoc($result)) {
            ?> 
            <pre>
            <?php
            print_r($row);
            ?>
            </pre>
            <?php
        }
    }

    function login_user() {
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username && $password) {
            if ($conn) {
                echo "Connected succefull";
            }else {
                die("Database Connection failed");
            }
        }
    }

    function show_all_data() {
        global $conn;
        if (!$conn) {
            die("Database Connection failed" . mysqli_error($conn));
        }
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error($conn));
        }

        while($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function update_data(){
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error($conn));
        }
    }

    function delete_data(){
        global $conn;
        $id = $_POST['id'];
        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed " . mysqli_error($conn));
        }
    }
?>