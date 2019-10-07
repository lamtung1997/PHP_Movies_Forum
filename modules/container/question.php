<?php
	if(isset($_GET['page']))
	{
	    $page = $_GET['page'];
	}
	else
	{
		$page = "";
	}
?>

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

<div class="w3-border w3-round-large question_and_answer">
	<div style="height: 60px;">
		<a href="index.php?view=form_add_question">
			<button class="w3-green w3-round-large" style="padding: 10px; float: right; margin: 5px; cursor: pointer;">Thêm chủ đề thảo luận</button>
		</a>
	</div>

	<div class='number_menu w3-border'>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "forum";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "SELECT * FROM questions";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				$amount = $result->num_rows/10;
				$i=1;
				while($i < $amount+1)
				{
					echo "<a href='index.php?view=question&page=$page&status=<?php echo $status;?>&user=<?php echo $user;?>' class='w3-btn w3-black w3-hover-white w3-round-large w3-border'>$i</a>&nbsp";
					$i++;
				}
			}
		?>
	</div>
	<br>
	
	<div class="comment w3-border w3-round-large">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "forum";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT * FROM questions";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
						<div style="opacity: 0.7; background-color: silver; padding: 10px; margin: 1px;" class="w3-round-large">
							<a href="index.php?view=answer&id=<?php echo $row['id'];?>&status=<?php echo $status;?>&user=<?php echo $user;?>" style="text-decoration: none;">
								<b><?php echo $row['question'];?></b>
							</a>
						</div>
					<?php
				}
			}
		?>
	</div>
</div>

<br>