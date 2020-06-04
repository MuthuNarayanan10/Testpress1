<?php 
    require('connect.php');
    session_start();
    
    $quizId = $_GET['id'];
    $sql="SELECT * FROM `questions1` WHERE id=$quizId";
    $selectQuery=mysqli_query($conn,$sql);
    
    while($quiz = mysqli_fetch_assoc($selectQuery)){
        $_SESSION['ref_user_name'] = $quiz['name'];
        $_SESSION['ref_quiz_id'] =   $quiz['id'];
    }

?>
<div class="col-md-12">
    

    <h2>How do you well know about <?php echo $_SESSION['ref_user_name'];?></h2>
    
    
    <div class="container">
    <center>
       <h2 style="color:#15A1ED;">get started</h2>
        <form action="index.php?info=linkanswer" method="post">
            <div>
            <div class="col-md-4"></div>
                <br>
                <br>
                <div class="col-md-4">
                    <input type="text" placeholder="Enter your name" name="usr" required><br>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Next" name="submit">
                </div>
                </div>
        </form>
    </center>
</div>
   
</div>
