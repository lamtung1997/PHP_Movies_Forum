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

<div class="menu">
	<div class="list">
		<div class="tab">
			<?php
				echo "<a href='index.php?&user=$user&status=$status'><button class='tablinks'>Trang chủ</button></a>";
			  	echo "<a href='index.php?view=browser&page=1&user=$user&status=$status'><button class='tablinks'>Duyệt phim</button></a>";
			  	echo "<a href='index.php?view=question&page=1&user=$user&status=$status'><button class='tablinks'>Hỏi đáp và thảo luận</button></a>";
		  	?>
		</div>
	</div>

	<div class="facebook">
		<a href="https://www.facebook.com/WatchFreeFilmsMovies/" target="_blank"><img src="images/facebook.png" style="height: 100%;width: 100%"></a>
	</div>

	<div class="search">
		<div class="topnav">
			<div class="search-container">
	    		<form action="index.php">
	      			<input type="text" placeholder="Tìm tên phim..." name="search">
	      			<input type="text" name="view" value="search" hidden>
	      			<button type="submit"><i class="fa fa-search"></i></button>
	    		</form>
	  		</div>
	  	</div>
	</div>
</div>