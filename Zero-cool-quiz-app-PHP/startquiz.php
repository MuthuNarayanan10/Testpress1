<?php
require('connect.php');
?>
 <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>


 
<br>
<div class="container">
    <center>
       <h2 style="color:#07f78b;">Create Quiz</h2>
        <form action="index.php?info=answerquiz" method="post">
            <div>
            <div class="col-md-4"></div>
                <br>
                <br>
                <div class="col-md-4">
                    <input type="text" placeholder="Enter your name" name="usr" id="username" required><br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Next" name="submit">
                </div>
                </div>
        </form>
    </center>
</div>