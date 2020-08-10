<?php require 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/head-1.php'; ?>
<div class="w3-container w3-2017-navy-peony" style="padding:20px;">
    <p class="w3-xlarge" style="display:inline; "><?php echo "welcome"." ".$user['adminname'];?></p>
    <button class="w3-btn w3-red " style="display:inline; float:right;"><a href="logout.php" style="text-decoration: none;">log out</a></button>
</div>


 <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class=''>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
?>
<?php
        if(isset($_SESSION['success'])){
          ?>
          
            <div class='w3-panel w3-green w3-display-container'>
              <span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">&times;</span>
              <h4><i class='icon fa fa-check'></i> Movie added successfully </h4>
            </div>
           <?php
          unset($_SESSION['success']);
        }
      ?>








<div class="w3-container" >
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-red " >Add movie</button>
    
    <a href="sort.php"><button class="w3-btn w3-red " >Sort</button></a>
<?php
    
    $sql = "SELECT movie.movie_id, movie.movie_name, language.language,movie.genre FROM movie INNER JOIN language ON movie.lang_id=language.lang_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
?>
    <div class="w3-container">
    <div id="table-scroll">
    <table id="table" class="w3-table-all w3-hoverable">
    <tr class="w3-dark-grey">
    <th>Movie ID</th>
    <th>Movie Name</th>
    <th>Language</th>
    <th>Genre</th>
    <th>more</th>
    <th>Tools</th>

    </tr>
     
        <?php
    
  while($row = mysqli_fetch_assoc($result)) {
      ?>
        
        
        <tr>
    <td><?php echo $row["movie_id"] ?></td>
    <td><?php echo $row["movie_name"] ?></td>
    <td><?php echo $row["language"] ?></td>
    <td><?php echo $row["genre"] ?></td>
    <td> <a href="more.php?movie_id=<?php echo $row["movie_id"] ?>" >more</a> </td>
    <td><a href="movie_edit.php?movie_id=<?php echo $row["movie_id"] ?>" ><button class="button">edit</button></a></td>
    </tr>
        
      <?php
        }
      ?>  
    </table>
    
    </div>
</div>
</div>
       <?php
} else {
  echo "0 results";
}

?>







<!--modal form for Adding new movie-->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-opacity">
    <div class="w3-container" style="background-color:#32e0c4;">
        <h3 style="color:white;">Add Movie</h3>
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <form style="margin-top:0px; width:80%;" method="post" action="addmovie.php">
            <table class="w3-table w3-border w3-gray">        
                <tr>
                <td><label>Movie Name:</label></td>
                <td><input type="text" name="movie_name" required  style="width:80%"></td>
                </tr>
                <tr>
                <td><label>Movie Language</label></td>
                <td>
                <select class="w3-select w3-border" style="width:80%" name="language">
                <option value="1">English</option>
                <option value="2">Hindi</option>
                <option value="3">Kannada</option>
                <option value="4">Malayalam</option>
                </select>
                </td>
                <!--<td><input type="text" name="language" required style="width:80%"></td> -->
                </tr>
                <tr>
                <td><label>Genre:</label></td>
                <td><input type="text" name="genre" required style="width:80%"></td>
                </tr>
                <tr>
                <td><label>Rating:</label></td>
                <td><input type="text" name="rating" required  style="width:80%"></td>
                </tr>
                <tr>
                <td><label>Review:</label></td>
                <td><textarea type="textarea" name="reviews" required  style="width:80%" class="w3-small"></textarea></td>
                </tr>
                <tr>
                <td></td>
                <td><input  name="add" type="submit" class="w3-button w3-black"></td>
                </tr>
           </table>      
     
      </form>   
    </div>
  </div>
</div>














<?php include 'includes/footer.php'; ?> 