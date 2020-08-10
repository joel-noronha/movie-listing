<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$movie_name = $_POST['movie_name'];
		$language = $_POST['language'];
        $genre = $_POST['genre'];
        $rating = $_POST['rating'];
        $review = $_POST['reviews'];
        
		$sql = "SELECT * FROM movie ORDER BY movie_id DESC LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		
		
		$sql = "INSERT INTO movie (movie_name, lang_id, genre, rating, reviews) VALUES ('$movie_name', '$language', '$genre', '$rating', '$review')";
		if(mysqli_query($conn, $sql)){
			$_SESSION['success'] = 'Position added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: Dashboard.php');
?>


<!-- Not finished -->