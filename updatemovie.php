<?php require 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/head-1.php'; ?>
<?php
$id=$_GET['movie_id'];
$sql = "UPDATE `movie` SET movie_name='".$_POST['movie_name']."',genre='".$_POST['genre']."', rating='".$_POST['rating']."', reviews='".$_POST['reviews']."',lang_id='".$_POST['language']."' where movie_id='$id'";

//"SELECT movie.movie_id, movie.movie_name, language.language,movie.genre,movie.rating,movie.reviews FROM movie INNER JOIN language ON movie.lang_id=language.lang_id WHERE movie_id='$id'"
if (mysqli_query($conn, $sql)) {
  echo "<h2 >"."Record updated successfully"."</h2>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>
    
<div>
   <a href="Dashboard.php"><button class="w3-btn w3-red" style="float:left;">Dashboard</button></a> 
</div>