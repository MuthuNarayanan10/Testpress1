
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zero cool | Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
    <script src="http://www.fastlearning.in/controller/js/jquery-1.9.1.min.js"></script>
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
        .navbar
        {
            background-color: #333333;
        }
                .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333333;
   color: white;
   text-align: center;
}
      
        .footer-social-icon
        {
           width: 100%;
            height: auto;
            margin: auto;
            padding: 20px;
            
        }
        .footer-social-icon ul
        {
            margin: 0px;
            padding: 20px;
            text-align: center;
            
            
        }
        .footer-social-icon ul li
        {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
            margin: 0px 10px;
            border-radius: 100%;
            background-color: #15ED7A;
        }
         .footer-social-icon ul li a
        {
            color: #272727;
            font-size: 25px;
            
        }
        .footer-social-icon ul li a i
        {
            line-height: 50px;
        }
        .footer-social-icon ul li a i:hover{
            transition: 0.5 ease;
            
            opacity: 0.2;
        }
              .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 4px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
 input[type=radio] {
   display:none;
}
input[type=radio] + label {
    display:inline-block;
 width:95%;
 padding:10px;
 border:1px solid #ddd;
 margin-bottom:10px;
 cursor:pointer;
}
        input[type=radio] + label:hover{ border:1px solid #000000; background: coral; transition: all 0.5 ease in;}
   input[type=radio]:checked + label {
       background: #0C0;
        }
        
        
 
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark">
 <a class="navbar-brand"><img src="image/go.png"></a>
		
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?info=about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?info=contact">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>
     <?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
                         
						 else if($info=="startquiz")
						 {
						 include('startquiz.php');
						 }
						
						else if($info=="answerquiz")
						 {
						 include('answerquiz.php');
						 }
                        
						else if($info=="share")
						 {
						 include('share.php');
						 }
						
						 else if($info=="sync-quiz")
						 {
						 include('sync-quiz.php');
						 }
                        else if($info=="linkanswer")
						 {
						 include('linkanswer.php');
						 }
                         else if($info=="finish")
						 {
						 include('finish.php');
						 }
						
						
					}
					else
					{
				?>
<br>

<div class="container">
                 <center>   <h2 style="font-size:24px; color:#07abf7">Let's Start to Know Who is your most best and Knownable friend for you!!!</h2>
                     <br>
                     
                     
                        <a href="index.php?info=startquiz"><button class="button" type="button" style="background:#07f78b; "><span> Start quiz </span></button></a><br>
                     <br>
                     <img src="image/friends.jpg" width="70%;" height="400px;">
    
                </center>
</div>
     <?php } ?>
<div class="footer">
  <p><i class=""></i>&nbsp; Copyrights @ Zero cool | All rights are Reserved.</p>
</div>
            <script>
    
    
    
        </script>
</body>
</html>


