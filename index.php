<?php 
    include_once 'includes/connectdb.php';
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Accounts Registory</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <nav id="main-navigation">
                <ul>
                    <!--<li><a href="index.php">Vendors List</a></li> -->
                    <li><a href="repositorydisplay.php">Registory</a></li>
                    <li><a href="printbill.php">Print bill</a></li>
                    <li><a href="product/addproduct.html">Add new product</a></li>
                    <li><a href="includes/connectdb.php">db</a></li>
                    <li><a href="vendor/addvendor.html">new vendor</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="product/displayproducts.php">prods</a></li>
                    <li><a href="vendor/displayvendors.php">vendor</a></li>
                    <li><a href="vendor/updatevendor.php">updatevendor</a></li>
                    <li><a href="product/updateprods.php">updateprod</a></li>
                    <li><a href="vendor/deletevendor.php">DeleteVendor</a></li>
                    <li><a href="product/deleteprod.php">Deleteprod</a></li>
                    <li><a href="bill/pasttrans.php">Past Transactions</a></li>
                    <li><a href="bill/generatebill.php">New Bill</a></li>



                </ul>
            </nav>
        </header>
    </body>
</html>
 