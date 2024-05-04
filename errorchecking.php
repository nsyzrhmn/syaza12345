<?php
//session_start(); //start the session
include('database/connection.php');

if(isset($_POST['add'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $cat = $_POST['category'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    //declare session variables
    $_SESSION['sid'] = $id;
    $_SESSION['sname'] = $name;
    $_SESSION['scat'] = $cat;
    $_SESSION['sqty'] = $qty;
    $_SESSION['sprice'] = $price;
    $_SESSION['sdesc'] = $desc;

    if(!empty($id&&$name&&$cat&&$qty&&$price&&$desc))
    {
        //jika data tak tinggal kosong(lengkap)
        echo "Complete input!";
        echo "<br>";
        echo "<script>alert('Complete Input!');</script>";
        echo "ID: $id <br>Name: $name<br>Category: $cat
        <br>Quantity: $qty<br>Price: $price<br>Description: $desc";

        //add data to table increcords
        $sqladd = "INSERT INTO invrecords
                   (invno, invname, invqty, invcategory, invprice, invdesc)
                   VALUES
                   ($id,'$name',$qty,'$cat',$price,'$desc')";
        $resultadd = $con->query($sqladd);

        header('location:displayinventory.php');
    }
    else
    {
        //jika ada input yang kosong
        //echo "Please fill up all the required input!";
        ?>
        <script>
            alert('Please fill up all the required input!');
            window.location='addinventory.php';
        </script>
        <?php
    }
}
else{
    //header link to another page
    header('location:addinventory.php');
}


