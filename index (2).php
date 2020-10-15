<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style type="text/css">

.dropbtn1 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown1 {
    position: relative;
    display: inline-block;
}

.dropdown1-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown1-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown1-content a:hover {background-color: #f1f1f1;}
.dropdown1:hover .dropdown1-content {display: block;}
.dropdown1:hover .dropbtn1 {background-color: #3e8e41;}



.dropbtn{
  background-color: transparent;
    color: skyblue;
   
    font-size: 10px;
    border: none;
    margin-top: 0px;
  }
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0.3,0.4,0.2,0.6);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 15px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}











.imgcover{
position: relative;
color: white;
}
.bottom-left {
    position: absolute;
    bottom: 600px;
}
.container {
    position: relative;
    width: 100%;
  
}

.boxheader{
      width: 100%;
      height: 80px;
      background: white;
      margin-top: -20px;
    }




.container .header{
  
    padding: 10px;
    text-align: center;
    height: 70px;
    width: 100%;
}

.container .header:hover{
  background-color: white;
}

.container img {
    width: 100%;
    height: auto;
}

.container .header .btn {
    position: absolute;
    top: 200px;
    left: 10%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: transparent;
    color: white;
    font-size: 10px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container .header .btn:hover {
    background-color: white;
}


.container .btn5 {
    position: absolute;
    top: 200px;
    left: 90%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: white;
    color: white;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}

.container  .btn5:hover {
    background-color: red;
}

.box1{
  width: 550px;
  height: 500px;
  border:1px solid black;
  margin-left: 200px;
}

.box2{
  width: 550px;
  height: 500px;
  border:1px solid black;
  margin-left: 753px;
  margin-top: -503px;
}
.box3{
  width: 550px;
  height: 500px;
  border:1px solid black;
  margin-left: 200px;
  margin-top: -0px;
}
.box4{
  width: 550px;
  height: 500px;
  border:1px solid black;
  margin-left: 753px;
  margin-top: -503px;
}
.box5{
  
  width: 1300px;
  height: 600px;
  background-color: #1a53ff;
  margin-left: 100px;
}
.header1{
  width: 100%;
  height: 100px;
  color: black;
}


.box6{
width: 100%;
height: 600px;
border:2px solid black;
background-color: black;

}


body{
  background-color: white;
  height: 100%;
  width: 100%;

}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius: 4px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius: 4px;
}

.fa-google {
  background: #dd4b39;
  color: white;
  border-radius: 4px;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
  border-radius: 4px;
}

.fa-youtube {
  background: #bb0000;
  color: white;
  border-radius: 4px;
}

.fa-instagram {
  background: #125688;
  color: white;
border-radius: 4px;

}



.fa-rss {
  background: #ff6600;
  color: white;
  border-radius: 4px;

}



  </style>
</head>

<body>

<!-- 1st header box -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

 <div class="nevigation">
  <div class="dropdown" style="margin-top: -10px" >
<button class="dropbtn"><i class="fa fa-list" style="margin-left: -10px;"></i></button>
  <div class="dropdown-content">
    <a href="pk.html">Notes</a>
    <a href="notes.html">Technical sort QA</a>
    <a href="video.html">Videos</a>
    <a href="entertainment.html">Entertainment</a>
  </div>

</div>

    </div>
<li class="active" style="margin-left: 100px;margin-top: -60px;"><a href="index2.php">Home <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;margin-top: -70px;margin-left: 200px">Contact:+91 969 480 7325 <span class="caret"></span></a>



          <ul class="dropdown-menu" style="margin-left: 200px;font-size: 17px">
            <li role="separator" class="divider"></li>
            <li><a href="#">Main:+91 969 480 7325 </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="contactus.html">All number & Location</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp



          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> &nbsp &nbsp &nbsp &nbsp &nbsp
           <ul class="nav navbar-nav navbar-center">
      <li><a href="loginuser.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>














<div class="boxheader">
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
           <a href="home.php"><img src="logo1.jpg" style="width: 200px;height: 60px;margin-left: 0px"></a>  
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

            <div class="dropdown1" style="margin-left: 0px;margin-top: 15px">
               <button class="dropbtn1">Resources</button>
                <div class="dropdown1-content" style="font-size: 18px;width: 200px">
                          <a href="pk.html">Notes</a>
                          <a href="notes.html">Technical sort QA</a>
                          <a href="video.html">Videos</a>
                          <a href="entertainment.html">Entertainment</a>
  </div>
            </div>

           
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
          <div class="dropdown1" style="margin-top: 15px;font-size: 17px">
             <button class="dropbtn1">About</button>
                <div class="dropdown1-content">
                  <a href="aboutusnew.html">About Us</a>
                  <a href="contactus.html">Contact Us</a>
                  <a href="management.html">Management Team</a>
                </div>
          </div>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  
<button style="color: green;"><a href="chart.php"> chart</a></button>

   </div>

















<div class="container">
<img src="index.jpeg" style="width:100% ; z-index: 1;height: 750px">
<button class="btn5" style="margin-top: 445px;margin-left: -630px;color: black"><a href="loginuser.php"> Get started</a></button>




















</div><br><br><br><br>

<h1 style="margin-top:100px;margin-left: 100px;font-size: 50px">The Freedom <br>To Learn<br> Anything</h1>
<p style="padding-left: 500px;margin-top: -200px;padding-right: 100px;font-size: 20px">
We believe anything is possible with the right education website. Whether you're about to learn your basics  for the revision or you're a long time pro, we've got you covered. You have two ways to start: Read our notes and then attempt test or If you are able to attempt test directly then try to it. You can always try to make update with current notifcation of online system . It's time to learn about your basic and build your knoweldge.</p>
<br><br><br><br><br>

<br><br>

<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="learn2.jpg" alt="Los Angeles" style="width:100%;height: 700px">
      </div>

      <div class="item">
        <img src="learn3.jpg" alt="Chicago" style="width:100%;height: 700px">
      </div>
    
      <div class="item">
        <img src="learn3.jpg" alt="New york" style="width:100%;height: 700px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br><br><br><br><br><br><br>



<p style="margin-left: 400px;font-size: 60px;font-style: solid black;opacity: 2.5">Powerful Features of<br> &nbsp  &nbsp &nbsp &nbsp our website</p><br><br>
<img src="brain1.jpg" style="height: 400px;width:400px;margin-left: 1000px;margin-top: -50px">
<p style="font-size: 30px;margin-left: 1020px;font-style: bold;height: 15px;margin-top: -20px">Learning Skills</p><br>
<p style="font-size: 17px;margin-left: 1020px;padding-right: 90px;opacity: 0.8">Your learning skill completely depends on practice,Improve your skill.</p>
<img src="brain.jpg" style="height: 300px;width:300px;margin-top: -400px;margin-left: 100px;border-radius: 2px">
<p style="margin-left: 100px;font-size: 30px;margin-top: -60px">Knoweldge Power</p>
<p style="margin-left: 100px;font-size: 17px;opacity: 0.8;padding-right: 1100px">Increase your knoweldge by easy way,Try to learn new concept with efficient method.</p>
<img src="brain2.jpg" style="height: 300px;width: 400px;margin-left: 500px;margin-top: -400px">
<p style="margin-left: 520px;font-size: 30px;margin-top: -40px">Time Management Skill</p>
<p style="margin-left: 510px;padding-right: 600px;font-size: 17px;opacity: 0.8">Online exam help to improve your time management skill.There are the various paper sets which held in fix time duration.</p>
<a href="features.html" style="margin-left: 1000px;font-size: 40px;font-style: bold;margin-top: 100px;color: black"> See All Features>></a>




<div class="box5">
  <p style="margin-top: 80px;font-size: 100px;color: white;margin-left: 40px">How To<br> Work In <br> &nbsp Our<br> Website</p>
  <p style="margin-left: 500px;font-size: 30px;margin-top: -500px;color: white">Start Your Practice with Online System <br> By Using Following Simple Steps:</p>
  <p style="margin-left: 500px;font-size: 25px;color: white">1.Sign up for a free Online System account. Choose Which Content You Want To Practice.</p>
  <p  style="margin-left: 500px;font-size: 25px;color: white">2.Select any topic that you want to learn,And watch related video to that topic to better understand.</p>
  <p style="margin-left: 500px;font-size: 25px;color: white">3.After read notes attempt related quize.Your result will displayed on screen by which you can check your performance.</p>
  <p style="margin-left: 500px;font-size: 25px;color: white">4.Give your feedback for better performance.</p>
  <p style="margin-left: 500px;font-size: 25px;color: white">5.Logout from your account for security purpose.</p>
</div><br><br><br><br>










<!--footer -->

<div class="box6" style="background-color: #00004d">

        <p style="margin-left: 650px;font-size: 25px;color: white;margin-top: 40px">SUPPORT</p>
        <p style="margin-left: 650px;font-size: 20px;color: gray">Support Center</p>


        <p style="margin-left: 150px;color: black;font-size: 30px;margin-top: -80px;color: white">ONLINE SYSTEM</p>
        <p style="margin-left: 150px;padding-right: 970px;font-size: 20px;color: gray">OS.Com is a leading learning-based development platform with multiple content. We make it easy for everyone to learn a knoweldgeble topic of subjects.<br><br>
         Increase your study, check your knoweldge, set up an online quize or just test out new ideas. The Online system  has everything you need to increase a fully personalized, high-quality knoweldge with efficient manner.</p>

           <p style="margin-left: 950px;font-size: 25px;color: white;margin-top: -380px">SOCIAL PROFILES</p>
<!-- Add font awesome icons -->
         <a href="https://www.facebook.com/profile.php" class="fa fa-facebook" style="margin-left: 940px"></a>
          <a href="https://twitter.com/#1/PRADEEP11014327" class="fa fa-twitter"></a>
          <a href="https://myaccount.google.com/?pli=1" class="fa fa-google"></a>
           <a href="https://www.linkedin.com/me/profile-views/urn:li:wvmp:summary/" class="fa fa-linkedin"></a>
             <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram"></a>
            <a href="https://www.youtube.com/watch?v=hQYeuaTUSnM&list=LLyV5M2SOLr82Mi6ovrqyXRg&index=3&t=0s" class="fa fa-youtube"></a>
           


</div>


























</body>
</html>
