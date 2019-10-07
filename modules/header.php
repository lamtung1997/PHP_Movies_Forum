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

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "forum";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql1 = "SELECT * FROM questions";
	$result1 = $conn->query($sql1);
	$n_question = $result1->num_rows;

	$sql2 = "SELECT * FROM movies";
	$result2 = $conn->query($sql2);
	$n_movie = $result2->num_rows;
?>

<div class="header">
	<div class="logo">
		<?php
			echo "<a href='index.php?status=$status&user=$user'><img src='images/home.png' style='height: 150px; width: auto;''></a>";
		?>
	</div>
	<div class="sign_in">
		<div class="w3-container" style="padding-top: 10px;">
			
			<a href="index.php?view=sign_up" class="w3-btn w3-black w3-hover-white w3-round-xxlarge w3-border">Đăng ký</a>

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

				if ($status == 'yes')
				{
					echo "<a href='index.php' class='w3-btn w3-black w3-hover-white w3-round-xxlarge w3-border'>Đăng xuất</a>";
					echo "
						<div class='w3-round-large w3-border' style='color: white; padding: 10px; margin-top: 10px;'>
							Xin chào $user
						</div>
					";
				}
				else 
				{
					echo "<a href='index.php?view=log_in' class='w3-btn w3-black w3-hover-white w3-round-xxlarge w3-border'>Đăng nhập</a>";	
				}

				echo "
						<div style='color:white; font-size:12px; float: right; margin-top: 10px'>
							Có tổng cộng: $n_question bài đăng
							<br>
							Số lượng phim: $n_movie phim
						</div>
					";
			?>
		</div>
	</div>
</div>