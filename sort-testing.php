<?php require 'includes/header.php'; ?>
<?php include 'includes/session.php'; ?>
<?php include 'includes/head-1.php'; ?>


<div>
   <a href="Dashboard.php"><button class="w3-btn w3-red" style="float:left;">Dashboard</button></a> 
   <a href="sort.php"><button class="w3-btn w3-red" style="float:right;">back</button></a>
</div>

<?php
    if(isset($_POST['filter'])){
		$language = $_POST['language'];
      
    $sql= "SELECT movie_id, movie_name,lang_id, genre, rating, reviews from movie where lang_id=$language ORDER BY lang_id";
   //$sql = "SELECT movie.movie_id, movie.movie_name, language.language, movie.lang_id, movie.genre, movie.rating, movie.reviews FROM movie INNER JOIN language ON movie.lang_id=language.lang_id WHERE lang_id=$language ORDER BY lang_id";
    $result = mysqli_query($conn, $sql);
    

     if (mysqli_num_rows($result) > 0) {
        
?>
    <div class="w3-container">
    <div id="table-scroll">
    <table  class="w3-table-all w3-hoverable">
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
    <td><?php 
          
          switch($row["lang_id"]){
              case 1: echo "English";
                  break;
              case 2: echo "Hindi";
                  break;
              case 3: echo "Kannada";
                  break;
              case 4: echo "Malayalam";
                  break;
              default : echo "language doesn't exist ";
          }
          
          
         ?>
            
            
    </td>
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

     <?php
        }

} else {
  echo "0 results";
}

?>
        
        
<?php include 'includes/footer.php'; ?>		