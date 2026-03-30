<?php
    echo "<h1 style='color:green; text-decoration:underline overline; text-align:center;font-size:50px; background-color:yellow;'> This Is Information PHP Page </h1>";

    $name=$_POST['name'];

    $con = new mysqli ('localhost','root','','read_book');
    $sql11 = "select * from books where Book_title='$name';";

    $result=$con->query($sql11);
    while ($row=mysqli_fetch_assoc($result)){
        $isbn=$row['ISBN'];
        $name=$row['Book_title'];
        $type=$row['Book_type'];
        $desc=$row['Book_desc'];
    }

    echo "<h2 style='font-size:30px; font-color:green; text-decoration:underline overline;'>Your Data Found!...</h2>";

    echo "<h2> Book Code : $isbn </h2>";
    echo "<h2> Book Name : $name </h2>";
    echo "<h2> Book Type : $type </h2>";
    echo "<h2> Book Description : $desc </h2><br>";

    echo "<a href='home.html'>Go To Home</a>";

?>