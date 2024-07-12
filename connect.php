<?php
    $conn = new mysqli("localhost","root","","db_pospos");

        if (!$conn) {
            echo "ผิดพลาดติดต่อฐานข้อมูล" . mysqli_connect_error();
        }
?>