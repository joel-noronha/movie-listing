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

     <?php
    
  while($row = mysqli_fetch_assoc($result)) {
      ?>
    <h2>edit</h2>
    <form class="form2"method="post" action="updatemovie.php?movie_id=<?php echo $row["movie_id"] ?>">
        
    <table class="w3-table-all w3-card-4 w3-centered ">  
       
        
    <tr>
       
        <td colspan="2" class="w3-center"><input name="movie_name" required value="<?php echo $row["movie_name"] ?>" style="width:50%"></td>
    </tr>
    <tr>
        <td>Language:</td>
        <td>
        <select class="w3-select w3-border"  name="language" style="width:50%">
                <option value="1">English</option>
                <option value="2">Hindi</option>
                <option value="3">Kannada</option>
                <option value="4">Malayalam</option>
                </select>
        </td>
    </tr>
    <tr>
        <td>Genre:</td>
        <td><input name="genre" required value="<?php echo $row["genre"] ?>" style="width:50%"></td>
    </tr>
    <tr>
        <td>rating:</td>
        <td><input name="rating" required value="<?php echo $row["rating"] ?>" style="width:50%"></td>
    </tr>
    <tr style="height:100px;">
        <td>Review:</td>
        <td ><textarea name="reviews" required  style="width:50%" class="w3-small w3-justify"><?php echo $row["reviews"] ?></textarea></td>
    </tr>
        <tr>
        <td colspan="2" class="w3-center"><a href="updatemovie.phpid=<?php echo $row["movie_id"] ?>"><button class="w3-button w3-purple">Submit</button></a></td>
        </tr>
        
    </table>
    </form>
</div>

        
      <?php
        }

} else {
  echo "0 results";
}

?>
