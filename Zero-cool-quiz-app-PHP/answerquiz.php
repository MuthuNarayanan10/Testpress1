
<?php
session_start();

        
            $_SESSION['usr'] = $_POST['usr'];
            
        
?>
<br>
<div class="container" style="margin-left:20px;">
    <h3 style="color:#FA1631; font-size:28px; ">Hello <?php echo $_SESSION['usr'];?>!!!</h3>
</div>

    <div class="col-md-12">
        <form action="index.php?info=share" method="post">
        <center>
            <h2 style="color:#4000ff">Let's start to answer</h2>
    
    <div class="main-nav container">
        <div class="row">
            <div class="col-md-3">
            </div>
           
        <div class="col-md-6">
            
              <table class="table table-bordered table-center">
                    <div class="scp-quizzes-main">
                            <div class="scp-quizzes-data">
                                <tr>
                                <th>1.what is your favourite drinks?</th></tr>
                              <tr> <td> <input type="radio" name="opt" value="opt1" id="a" required>
                                <label for="a">1.coke</label><br>
                                 <input type="radio" name="opt" value="opt2" id="b" required>
                                <label for="b">2.Tea</label><br>
                                 <input type="radio" name="opt" value="opt3" id="c" required>
                                <label for="c">3.Hot drinks</label><br>
                                 <input type="radio" name="opt" value="opt4"id="d" required>
                                <label for="d">4.fresh juice</label>
                                   </td></tr>
                                
                        </div>
                  </div>
                  <div class="scp-quizzes-main">
                            <div class="scp-quizzes-data">
                               <tr> <th>2.what is your favourite Tourist place?</th></tr>
                              <tr> <td> <input type="radio" name="opt1" value="opt1" id="a1" required>
                                <label for="a1">1.kerala</label><br>
                                 <input type="radio" name="opt1" value="opt2" id="b1" required>
                                <label for="b1">2.ooty</label><br>
                                 <input type="radio" name="opt1" value="opt3" id="c1" required>
                                <label for="c1">3.Kodaikanal</label><br>
                                 <input type="radio" name="opt1" value="opt4" id="d1" required>
                                <label for="d1">4.Mysore</label>
                                   </td></tr>
                                
                      </div>
                  </div>
                            <div class="scp-quizzes-main">
                            <div class="scp-quizzes-data">
                               <tr> <th>3.what is your favourite Hero?</th></tr>
                              <tr> <td> <input type="radio" name="opt2" value="opt1" id="a2" required>
                                <label for="a2">1.Vijay</label><br>
                                 <input type="radio" name="opt2" value="opt2" id="b2" required>
                                <label for="b2">2.Ajith</label><br>
                                 <input type="radio" name="opt2" value="opt3" id="c2" required>
                                <label for="c2">3.Vikram</label><br>
                                 <input type="radio" name="opt2" value="opt4" id="d2" required>
                                <label for="d2">4.Vijay Sethupathi</label>
                                   </td></tr>
                                </div>
                  </div>
                  <div class="scp-quizzes-main">
                            <div class="scp-quizzes-data">
                                <tr>
                                <th>4.what is your favourite Music Director?</th></tr>
                              <tr> <td> <input type="radio" name="opt3" value="opt1" id="a3" required>
                                <label for="a3">1.A.R Rahman</label><br>
                                 <input type="radio" name="opt3" value="opt2" id="b3" required>
                                <label for="b3">2.G.V prakash kumar</label><br>
                                 <input type="radio" name="opt3" value="opt3" id="c3" required>
                                <label for="c3">3.Yuvan Shankar raja</label><br>
                                 <input type="radio" name="opt3" value="opt4" id="d3" required>
                                <label for="d3">4.D.Imman</label>
                                   </td></tr>
                      </div>
                  </div>
                  <div class="scp-quizzes-main">
                            <div class="scp-quizzes-data">
                                <tr>
                                <th>5.what is your favourite stages of life?</th></tr>
                              <tr> <td> <input type="radio" name="opt4" value="opt1" id="a4" required>
                                <label for="a4">1.childhood</label><br>
                                 <input type="radio" name="opt4" value="opt2" id="b4" required>
                                <label for="b4">2.school</label><br>
                                 <input type="radio" name="opt4" value="opt3" id="c4" required>
                                <label for="c4">3.college</label><br>
                                 <input type="radio" name="opt4" value="opt4" id="d4" required>
                                <label for="d4">4.Married</label>
                                   </td></tr>
                        </div>
                  </div>
                    
                </table>
               <button class="btn btn-primary"type="submit" name="sub" style="font-size:7pt;color:white;background-color:#008DDE; border-color:#008DDE;
				 padding:7px 15px; border-radius:2px;">Submit</button>
        </div>
            <div class="col-md-3">
            </div>
         
            
        </div>
            
            </div>
        </center>
        <br>
            
             <br>
             <br>
             <br>
             <br>
            </form>
</div>
