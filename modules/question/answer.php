<br>

<div class="w3-border w3-round-large question_and_answer">
	<div style="min-height: 50px;">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "forum";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			
			$id = $_GET['id'];

			$sql = "SELECT * FROM questions WHERE id=$id";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
						<div style="opacity: 0.7; background-color: silver; padding: 10px; margin: 1px;" class="w3-round-large">
							<b><?php echo $row['question'];?></b>
						</div>
					<?php
				}
			}
		?>
	</div>

	<div class="comment w3-border w3-round-large">
		<form action="modules/question/send_answer.php">
			<input type="text" name="id" value='<?php echo "$id" ?>' hidden>
			<input type="text" placeholder="Viết tên bạn..." name="name" required class="w3-round-large" style="margin-left: 10px;">
		  	<input type="text" placeholder="Viết câu trả lời của bạn..." name="answer" required class="comment_area w3-round-large">
		  	<button class="post_comment_button w3-round-large">Đăng</button>
		</form> 
	</div>

	<div class="comment w3-border w3-round-large">
		<?php
			$sql = "SELECT * FROM answers WHERE id=$id";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					?>
						<div style="opacity: 0.7; background-color: silver; padding: 10px; margin: 1px;" class="w3-round-large">
							<b><?php echo $row['name'];?></b>
							<br>
							<?php echo $row['answer'];?>
						</div>
					<?php
				}
			}
		?>
	</div>
</div>

<br>