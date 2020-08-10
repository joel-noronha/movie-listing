<?php include 'includes/header.php'; ?>

<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['adminname'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM admin WHERE adminname = '$username'";
        

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) < 1) {
		
            $_SESSION['error'] = 'Cannot find account with the username';
        }else{
            while($row = mysqli_fetch_assoc($result)){
            
			if($password==$row['password']){
               /* $_SESSION['error'] = 'password correct';*/
				$_SESSION['admin']=$row['id'];
            }
        

			else{
				$_SESSION['error'] = 'Incorrect password';
			}
               
               
               }
               }
               }
               else{
    $_SESSION['error'] = 'input admin username and password';
}
        
        
       
header('location: index.php');
?>



