<?php require 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/head-1.php'; ?>
<?php

    $id=$_GET['movie_id'];
    //$sql = "SELECT * FROM movie where movie_id='$id' ";
    $sql = "SELECT movie.movie_id, movie.movie_name, language.language,movie.genre,movie.rating,movie.reviews FROM movie INNER JOIN language ON movie.lang_id=language.lang_id WHERE movie_id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
?>
<div class="w3-panel ">
    <a href="Dashboard.php"><button class="w3-btn w3-red" style="float:left;">Dashboard</button></a>
    
</div>
<div class="w3-container w3-large  " style="width:auto; height:auto;" >
<div id="table-scroll">
    <table class="w3-table-all w3-card-4 w3-hoverable w3-centered ">  
        <?php
    
  while($row = mysqli_fetch_assoc($result)) {
      ?>
        
    <tr>
        
        <td colspan="2" class="w3-center"><?php echo $row["movie_name"] ?></td>
    </tr>
    <tr>
        <td>Language:</td>
        <td><?php echo $row["language"] ?></td>
    </tr>
    <tr>
        <td>Genre:</td>
        <td><?php echo $row["genre"] ?></td>
    </tr>
    <tr>
        <td>rating:</td>
        <td><?php echo $row["rating"] ?></td>
    </tr>
    <tr style="height:100px;">
        <td>Review:</td>
        <td class="w3-small w3-justify"><?php echo $row["reviews"] ?></td>
    </tr>
    </table>
    </div>
</div>

        
      <?php
        }

} else {
  echo "0 results";
}

?>
