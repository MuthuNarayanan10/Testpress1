

<?php
        
    require('connect.php');
    session_start();


    
    $name=$_SESSION['usr1'];
    $query="INSERT INTO `questions1`(`q1`,`q2`,`q3`,`q4`,`q5`,`name`) VALUES ('".$_POST['opt']."','".$_POST['opt1']."','".$_POST['opt2']."','".$_POST['opt3']."','".$_POST['opt4']."','".$name."')";
    
    mysqli_query($conn,$query);


    $quizId = mysqli_insert_id($conn);

    $RquizId = $_SESSION['ref_quiz_id'];
    $query1="INSERT INTO `quesref`(`fromreferal`,`toreferal`) VALUES ('".$RquizId."','".$quizId."')";
    
    mysqli_query($conn,$query1);
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<div class="col-md-12">
    
    <center>
    <h2> your mark is ready</h2>
        

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">GET RESULT</button>
<div id="container">
   <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
           <center> <img src="image/gt.png"></center>
        <p>CERTIFICATE OF FRIENDSHIP</p>
         <h6>NAME:  </h6>
          <h6> MARK:   </h6>
          <h6> LEVEL:</h6>
      </div>
 <div> <button onclick="takeScreenShot()" class="btn btn-success">Download</button></div>
      </div>
    </div>
    </div>
        </div>
    </center>
        </div>
    <br>
    <br>
    <br>
<center>
    <h3>  Now you can create your quiz </h3>
        
    
    
            <a href="index.php"><button style="background-color:yellow;">click to create your quiz</button></a>
                </center>
    <script>
    var takeScreenShot = function(){
	html2canvas(document.body, {
		 onrendered: function(canvas) {
		 var tempcanvas=document.createElement('canvas');
            tempcanvas.width=1350;
            tempcanvas.height=1350;
            var context=tempcanvas.getContext('2d');
            context.drawImage(canvas,112,0,288,200,0,0,350,350);
            var link=document.createElement("a");
            link.href=tempcanvas.toDataURL('image/jpg');   //function blocks CORS
            link.download = 'screenshot.jpg';
            link.click();
		}
	});
}
    </script>

            <?php
                         
                        $queryref="SELECT * FROM `quesref` WHERE fromreferal=".$RquizId;
                        
                        $referrals = mysqli_query($conn,$queryref);

            while($fromRef = mysqli_fetch_assoc($referrals)){
                
                $question = "SELECT * FROM `questions1` where id=".$fromRef['fromreferal'];
                            $question = mysqli_query($conn,$question);
                             while($fromReferral = mysqli_fetch_assoc($question)){
                                 
                                 
                             
                $firstAnswer = $fromReferral['q1'];
                  $secondAnswer = $fromReferral['q2'];
                  $thirdAnswer = $fromReferral['q3'];
                  $fourAnswer = $fromReferral['q4'];
                  $fiveAnswer = $fromReferral['q5'];
                             }
                
                
            }


            
                ?>
        
 <center>
        <div class="col-md-offset-3 col-md-6">
                <h3>The persons who knows well about  <?php echo  $_SESSION['ref_user_name'];?></h3>
            <table class="table table-hover table-centered">
                    <tr>
                        <th>Name</th>
                        <th>Score</th>
                    </tr>
                    <?php
                $queryref="SELECT * FROM `quesref` WHERE fromreferal=".$RquizId;
                        
                        $referrals = mysqli_query($conn,$queryref);
                while($referral = mysqli_fetch_assoc($referrals))
                        {
                            $score = 0;
                            $referralId = $referral['toreferal'];
                            
                            $question = "SELECT * FROM `questions1` where id=".$referralId;
                            $question = mysqli_query($conn,$question);
                             while($toReferral = mysqli_fetch_assoc($question)){
                                 if($firstAnswer == $toReferral['q1']){
                                     $score = $score+1;
                                 }
                                 if($secondAnswer == $toReferral['q2']){
                                     $score = $score+1;
                                 }
                                  if($fiveAnswer == $toReferral['q5']){
                                     $score = $score+1;
                                 }
                                  if($thirdAnswer == $toReferral['q3']){
                                     $score = $score+1;
                                 }
                                  if($fourAnswer == $toReferral['q4']){
                                     $score = $score+1;
                                 }
                                    echo "<tr>
                                        <td>".$toReferral['name']."</td>
                                        <td>".$score."</td>
                                    </tr>";
                             }
                            
                        }
                    
                        /*
                         if($score==0)
                         {
                         $level="fake Relationship";
                         }
                          if($score==1)
                         {
                         $level="Rethink Your Relationship";
                         }
                        
                         if($score==2)
                         {
                         $level="Repeat and Refresh";
                         }
                        
                         if($score==3)
                         {
                         $level="Getting to Know You";
                         }
                        
                         if($score==4)
                         {
                         $level="Best Friends";
                         }
                         if($score==5)
                         {
                         $level="Bestie till end";
                         }
                        
                        
                        */
                        ?>
                
            </table>
    </div>
    </center>
    