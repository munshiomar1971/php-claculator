<!---Created by Omar Sumon on July 24, 2021 9:34 to learn php and hopefully use it with react and become fullstack --->
<!-- This project is created in php a backend programming language --->

<!-- This is a simple php calculator -->

<?php
   # calculator
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Basic Calculator</title>
</head>
<body background-Color="Blue">
    <br>
    <h1 align="center">Calculator</h1>
    <br><br><br>
    <p align="center">How to use: Enter your numbers and choose to add or subtract</p>
    <br><br><br><br><br><br><br><br><br><br>
    <section id="form" align="center" >
        <form action="functions.php" method="get">
            <input type="text" name="num01" placeholder="Number 1">
            <select name="oper" >
                <label>Choose Operation</label>
                <option value="add">Add</option>
                <option value="sub">Subtract</option>
            </select>
            <input type="text" name="num02" placeholder="Number 2">
            <button type="submit">Calculate</button>
        </form>
    </section>
</body>
</html>