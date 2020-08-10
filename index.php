<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:Dashboard.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/start_navbar.php'; ?>
<title>login page</title>
<div class="w3-container " style="background-color:#32e0c4; height:490px;">
    <h1>Login Form</h1>
        <form method="post" action="login.php" >
        <div class="w3-row">
            <label>Admin-name:</label> 
            <input type="text" name="adminname" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <input  class="w3-btn w3-red" type="submit" name="login">
        </div>
                
        </form>
    <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
<?php include 'includes/footer.php'; ?>


