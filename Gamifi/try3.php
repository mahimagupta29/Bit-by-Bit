
<!DOCTYPE html>
<html lang="en">
<title>WELCOME</title>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 60%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}
h1{
    font-size:3vw;
    color: white;
    text-align: center;
}
#box1{
       height:240px;
       width:250px;
       border:2px solid green;
       padding: 15px 22px;
       margin-left: 35px;
       float:left;
}
#box2{
       height:240px;
       width:250px;
       border:2px solid green;
       padding: 15px 60px;
       float:left;
       margin-left: 290px;
}
#box3{
       height:240px;
       width:250px;
       border:2px solid green;
       margin-right: 35px;
       padding: 15px 20px;
       float:right;
}


/* Center the image and position the close button */

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 60%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.mySlides {display: none;}
img {vertical-align: middle;}
.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
}
.text {
  
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%
  text-align: center;
  background-color:black;
  opacity:0.7;
  color:white;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
background-color:#4F03BC;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 70%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
table{
text-align:center;
color:yellow;
}
</style>

<body style="background-color:black;">
>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TSEC HACKS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li><button class="btn btn-success" data-target="#mymodel" data-toggle="modal" onclick="document.getElementById('modal-wrapper').style.display='block'"><span class="glyphicon glyphicon-log-in" ></span> Login</button></a></li>
      <li><button class="btn btn-success" data-target="#mymodel" data-toggle="modal" ><span class="glyphicon glyphicon-log-in" ></span> Login with Google</button></a></li>
       <li><button class="btn btn-success" data-target="#mymodel" data-toggle="modal"  onclick="document.getElementById('modal-wrapper2').style.display='block'"><span class="glyphicon glyphicon-user" ></span> Sign Up</button></a></li>
<!--     <div class="modal" id="mymodel">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header"> 
              <h3 class=" text-primary">SignUp </h3>
              <button type="button" class="close" data-dismiss="modal"> &times</button>
            </div> </div></div></div></div></div>  --> 
      
         </ul>
  </div>
</nav>
<!--<h1 style="text-align:center; font-size:50px; color:#fff"> Login Form</h1> -->

<!--<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
LOGIN</button>-->

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method ="post" action="projserver.php">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center">LOGIN</h1>
    </div>

    <div class="container">
      <input type="text" placeholder="Enter Username" name="username">
      <input type="password" placeholder="Enter Password" name="password">        
      <button type="submit">Login</button><br>
      <br><input type="checkbox" style="margin:26px 30px;"> Remember me      
      <a href="#" style="text-decoration:none; float:right; margin-right:434px; margin-top:26px;">Forgot Password ?</a>
    </div>
    
  </form>
  
</div>

<!--<h1 style="text-align:center; font-size:50px; color:#fff"> Sign-Up Form</h1>-->

<!--<button onclick="document.getElementById('modal-wrapper2').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
SIGNUP</button>-->

<div id="modal-wrapper2" class="modal2">
  
  <form class="modal-content animate" method ="get" action="projserver.php">
        
  <!--  <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h1 style="text-align:center">SIGN UP</h1>
    </div>
-->
    <div class="container">
      <input type="text" placeholder="Enter Username" name="username"  >
      <input type="text" placeholder="Enter Password" name="password" > 
      <input type="text" placeholder="Enter Email" name="email"  >    
      <button type="submit">SIGNUP</button ><br>
      <br><input type="checkbox" style="margin:26px 30px;">Remember me      
     
    </div>
    
  </form>
  
</div>

<article>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <center><img src="python1.jpg" style="width:900px;height:340px"></center>
  <div class="text">MODULES</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="python2.jpg" style="width:900px;height:340px">
  <div class="text">GAMES</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="python3.jpg" style="width:900px;height:340px">
  <div class="text">QUIZES</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="python2.jpg" style="width:900px;height:340px">
  <div class="text">SURPRISE</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 <span class="dot"></span>
 
</div>

</article>
<section id="one" >
    <h1>Python</h1>
    <p><h4 style="color:lightblue ;margin-left: 20px;" ;>   Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. Python is an interpreted, high-level, general-purpose programming language.It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python programming language.</h4></p><br><br>
 <!--   <section>
        <div class="row">
            <div class="col-md-4">
                <i class='fas fa-graduation-cap' style='font-size:48px;color:red'></i>
                <h4 style="color:red";>MODULES</h4>
            </div>
        </div>
    </section>
    <section>
       <div class="row">
            <div class="col-md-4">
                <i class='fas fa-hourglass-half' style='font-size:48px;color:red'></i>
                <h4 style="color:red";>QUIZES</h4>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
           <div class="col-md-6">
                <i class='fas fa-gamepad' style='font-size:48px;color:red'></i>
                <h4 style="color:red";>GAMES</h4>
            </div>
        </div>
    </section>
</section>-->
    <div id=box1>               
        <i class='fas fa-graduation-cap' style='font-size:170px;color:red'></i>
        <h2 style="color:red;text-align: center";>MODULES</h2></div>
    <div id=box2><i class='fas fa-hourglass-half' style='font-size:170px;color:red'></i>
        <h2 style="color:red;text-align: center";>QUIZES</h2></div>
    <div id=box3><i class='fas fa-gamepad' style='font-size:170px;color:red;'></i>
        <h2 style="color:red;text-align: center";>GAMES</h2></div><br><br>



<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
    if (event.target == modal2) {
        modal.style.display = "none";
    }
}
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script><br><br>
<br><footer>
<table style="width:100%">
<tr>
<td><b>Programming</b></td>
<td><b>Core Engineering</b></td>
<td><b>Management</b></td>
</tr>
<tr>
<td>Programming with Python</td>
<td>AutoCAD Training</td>
<td>Beginner's Trading Certification Training</td></tr>
<tr>
<td>Web Development Training</td>
<td></td>
<td>Web Development Training</td></tr>
<tr>
<td>Core Java Online Training</td>
<td></td></tr>
</table>
<h3>Contact Us</h3>
<a href="#" class="fa fa-search"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a><br>
<center><h3>@Copyrights 2019</h3></center>
</footer>
</body>
</html>
