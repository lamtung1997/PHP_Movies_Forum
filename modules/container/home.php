<?php
	if(isset($_GET['status']))
    {
        $status = $_GET['status'];
    }
    else
    {
        $status = "";
    }
    if(isset($_GET['user']))
    {
        $user = $_GET['user'];
    }
    else
    {
        $user = "";
    }
?>

<div class="big_poster">
	<div class="slideshow-container" style="padding-top: 10px;">
		<div class="mySlides fade">
		  <div class="numbertext">1 / 3</div>
		  <?php
		  	echo "<a href='index.php?view=movie_detail&id=1&status=$status&user=$user'><img src='images/big_posters/avengers4.jpg' style='width:100%;'></a>"
		  ?>
		  <div class="text">Avengers: Infinity War</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 3</div>
		  <a href="index.php?view=movie_detail&id=2&status=<?php echo $status;?>&user=<?php echo $user;?>"><img src="images/big_posters/blockers.jpg" style="width:100%;"></a>
		  <div class="text">Blockers</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 3</div>
		  <a href="index.php?view=movie_detail&id=3&status=<?php echo $status;?>&user=<?php echo $user;?>"><img src="images/big_posters/truth_or_dare.jpg" style="width:100%;"></a>
		  <div class="text">Truth Or Dare</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		}
	</script>
</div>

<div class="small_poster_area">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "forum";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM movies WHERE id BETWEEN 1 AND 10";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				?>
					<div class="small_poster">
						<div class="small_container">
		  					<a href="index.php?view=movie_detail&id=<?php echo $row['id'];?>&status=<?php echo $status;?>&user=<?php echo $user;?>">
		  						<img src="images/small_posters/<?php echo $row['image'];?>" style="height: 240px; width: 160px"></a>
		  					<div class="overlay"> <?php echo $row['name'];?> </div>
						</div>
					</div>
				<?php
			}
		}
	?>
</div>