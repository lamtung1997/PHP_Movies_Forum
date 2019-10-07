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

<br>
<div class="movie_detail w3-round-large w3-border">
	<div class="synopsis w3-border w3-round-large">
		<div style="height: auto;width: 300px; float: left;" class="w3-border">
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "forum";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) 
				{
				    die("Connection failed: " . $conn->connect_error);
				}

				if(isset($_GET['id']))
			    {
			        $id = $_GET['id'];
			    }

				$sql = "SELECT * FROM movies WHERE id=$id";
				$result = $conn->query($sql);
				$row = $result->fetch_array();
			?>
			<img src="images/small_posters/<?php echo $row['image']; ?>" style="width: 100%;">
		</div>

		<div style="width: 600px; float: right; color: white">
			<p style="margin: 10px;">Năm: <?php echo $row['year']; ?></p>
			<p style="margin: 10px; text-align: justify;">Synopsis: <?php echo $row['synopsis']; ?></p>
		</div>

		<div style="width: 100%;float: right; color: white; padding: 10px;">
			&nbsp Link IMDB: <a target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a>
		</div>
	</div>

	<div class="comment w3-border w3-round-large">
		<form action="modules/comment/send_comment.php">
			<input type="text" name="id" value='<?php echo "$id" ?>' hidden>
			<input type="text" name="user" value='<?php echo "$user" ?>' hidden>
			<input type="text" name="status" value='<?php echo "$status" ?>' hidden>
			<input type="text" value="<?php echo $user; ?>" name="commentator" required hidden>
			<?php
				if ($status == 'yes')
				{
					echo 
					"
			  			<input type='text' placeholder='Viết bình luận của bạn...' name='commentation' required class='comment_area w3-round-large'>
			  			<button class='post_comment_button w3-round-large'>Đăng</button>
			  		";
		  		}
		  	?>
		</form> 
	</div>

	<div class="comment w3-border w3-round-large">
		<?php
			$sql = "SELECT * FROM commentation WHERE id=$id";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
						<div style="opacity: 0.7; background-color: silver; padding: 10px; margin: 1px;" class="w3-round-large">
							<?php	if ($user == 'admin' || $user == $row['commentator'])
								{
							?>
								<form action="modules/comment/delete_comment.php">
									<button class="w3-round-large" style="float: right;"> Xóa </button>
									<input type="text" name="user" value='<?php echo "$user" ?>' hidden>
									<input type="text" name="status" value='<?php echo "$status" ?>' hidden>
									<input type="text" name="id" value='<?php echo "$id" ?>' hidden>
									<input type="text" name="view" value='movie_detail' hidden>
									<input type="text" name="CID" value="<?php echo $row['CID'] ?>" hidden>
								</form>
							<?php
								}
							?>
							<b><?php echo $row['commentator'];?></b>
							<br>
							<?php echo $row['commentation'];?>
						</div>
					<?php
				}
			}
		?>
	</div>
</div>
<br>