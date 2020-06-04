<?php

    require('connect.php');
session_start();
    

    if(isset($_POST['sub'])){
         $name=$_SESSION['usr'];
    $query="INSERT INTO `questions1`(`q1`,`q2`,`q3`,`q4`,`q5`,`name`) VALUES ('".$_POST['opt']."','".$_POST['opt1']."','".$_POST['opt2']."','".$_POST['opt3']."','".$_POST['opt4']."','".$name."')";

    mysqli_query($conn,$query);
    $quizId = mysqli_insert_id($conn);
    }
    
?>
<br>
<br>
    <div class="col-md-12">
<center>
            <h2 style="color:lightblue;">Yours quiz is ready!!!</h2>
        
            <h3 style="color:#47a2b2;">Share your friends to notice  how they are known about you</h3>
        
            <a href="index.php?info=sync-quiz&id=<?php echo $quizId; ?>"><button style="background-color:#47b24e; border-radius:15px;"><i class="fa fa-whatsapp" aria-hidden="true"></i>click to share on whats app</button></a>
    </center>
    </div>