<?php
    echo "<h1 style='color:green; text-decoration:underline overline; text-align:center;font-size:50px; background-color:yellow;'> This is PHP Adding MY Site </h1>";
    
    echo "<body style='background-color:lightgreen;'>";

    $conn= new mysqli ('localhost','root','','read_book');
    $isbn=$_POST['isbn'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $desc=$_POST['desc'];

    echo "ISBN: " . $isbn . "<br>";
    echo "Name: " . $name . "<br>";


    $sql10 = "INSERT INTO books (ISBN, Book_title, Book_type, Book_desc) 
          VALUES ('$isbn', '$name', '$type', '$desc')";

    $conn->query($sql10);
    $conn->close();

    echo "<h2 style='font-size:30px; font-color:green; text-decoration:underline overline;'>Your Data Saved Thank You!...</h2>";

    echo "<a href='home.html'>Go To Home</a>";
?>