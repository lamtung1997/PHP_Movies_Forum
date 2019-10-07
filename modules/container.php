<div class="container">
	<?php
        if(isset($_GET['view']))
        {
            $temp = $_GET['view'];
        }
        else
        {
            $temp = "";
			include('modules/container/home.php');
        }
		if($temp == "browser")
        {
            include('modules/container/browser.php');
        }


            // log in
        if($temp == "log_in")
        {
            include('modules/login/log_in.php');
        }
        if($temp == "log_in_success")
        {
            include('modules/login/log_in_success.php');
        }
        if($temp == "log_in_failed")
        {
            include('modules/login/log_in_failed.php');
        }

            // sign up
        if($temp == "sign_up")
        {
            include('modules/signup/sign_up.php');
        }
        if($temp == "sign_up_success")
        {
            include('modules/signup/sign_up_success.php');
        }
        if($temp == "sign_up_failed")
        {
            include('modules/signup/sign_up_failed.php');
        }

            // movie detail
        if($temp == "movie_detail")
        {
            include('modules/container/movie_detail.php');
        }

            // question and answer
        if($temp == "question")
        {
            include('modules/container/question.php');
        }
        if($temp == "form_add_question")
        {
            include("modules/question/form_add_question.php");
        }
        if($temp == "answer")
        {
            include("modules/question/answer.php");
        }

            // search
        if($temp == "search")
        {
            include("modules/search/search.php");
        }
    ?>
</div>