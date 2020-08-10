<?php require 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/head-1.php'; ?>


<div class="w3-panel ">
    <a href="Dashboard.php"><button class="w3-btn w3-red" style="float:left;">Dashboard</button></a>  
</div>
<form method="post" action="sort-testing.php">
    <p>Sort by: </p> 
    <span><select class="w3-select w3-border" name="language" style="width:40%">
    <option value="1">English</option>
    <option value="2">Hindi</option>
    <option value="3">Kannada</option>
    <option value="4">Malayalam</option>
        </select></span>
    <button  name="filter" class="w3-btn w3-green">Filter</button>
</form>

