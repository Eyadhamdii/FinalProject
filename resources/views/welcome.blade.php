<!DOCTYPE html>
<html lang="en">
<head>




  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
  background-color:#E4E9F7;
    margin-top: 10px;

    font-family: Arial, sans-serif;
    font-weight: bold;
}

form{
  color:black;
  background-color:#b8c2cf;

}
.hr{
  color:black;
}
.footer {
  background-color: #11101D;
  color: white;
  padding: 30px 10px;
  text-align: center;
  font-size: 18px;
  margin-top:50px;
}
.footer span {
  font-weight: bold;
  color: var(--main-color);
}


.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}

.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    margin-top:350px;
    margin-left:480px;
    transform: translate(-50%,-50%);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
.sds{
    margin-top:500000000px;
}
.logo{
    color:white;
    font-size:22px;    
}
nav {
    font-size:22px;   
    margin-top :25px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
    background-color: black;

}
.sa{
    color : black;
}
.left{
float:right;   
margin-right:30px; 
margin-top:80px;
}
    </style>
    <script src="https://kit.fontawesome.com/85a8aaf291.js" crossorigin="anonymous"></script>

</head>
<body>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Sidebar Menu HTML CSS | CodingNepal</title>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  
  <body>
    <style>
      /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}
.sidebar .logo-details .icon{
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: white;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar .nav-list li a i{
color:white;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}
.sidebar li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 6px;
  margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}
.sidebar li.profile .job{
  font-size: 12px;
}
.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}
.home-section{
  position: relative;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
.fa-sign-in{
  color:black;
}
.flexform{
  display:flex;
}
.imgclass{
  padding-top:100px;
}
.bbt{
 background-color: #11101D;
 color:white;
}
.red-color {
        color:red;
    }
li a i{
  color:white;
}
.welcome{
  margin-left:50px;
}
.text{
  padding-top:100px;
}.flexform .btns{
	height:auto;
	width:100%;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	position: relative;
}
.flexform .btns a{
	color:white;
	text-align: center;
	text-decoration: none;
	font-family:'cinzel',sans-serif;
	font-size:15px;
	font-weight:300;
	display:block;
	border:1px solid rgba(255, 255, 255, 0.5);
	height:auto;
	width:150px;
	padding:10px;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	margin-left:1%;
	border-radius: 2px;
	transition: 0.5s ease-in-out;
}
.flexform .btns a:hover{
	background: #DDE7F3;
	border:1px solid #017fb5;
}
.flexform .btns .btn1{
	background:#11101D;
	border:1px solid #017fb5;
}
.flexform .btns .btn1:hover{
	background:#0066b2;
	border:1px solid #017fb5 ;
	color:rgba(255, 255, 255, 0.95);
}
.btn1{
  margin-top:-220px;
}
.btns{
  margin-top:200px;
  padding-right:300px;

}
#bt{
  margin-left:20px;
}
    </style>
    <div class="sidebar">
      <div class="logo-details">
      <div class="logo_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIM</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
       
        
     
      
        <li>
          <a href="{{ route('register') }}">
          <i class="fa-solid fa-right-to-bracket"></i>          
            <span class="links_name">Sign up</span>
          </a>
          <span class="tooltip">Sign up</span>
        </li>
        <li>
          <a href="{{ route('login') }}">
          <i class="fa-solid fa-right-to-bracket"></i>          
            <span class="links_name">Login</span>
          </a>
          <span class="tooltip">Login</span>
        </li>
        <li>
          <a href="">
          <i class="fa-sharp fa-solid fa-bookmark"></i>
             <span class="links_name">About us</span>
          </a>
          <span class="tooltip">About us</span>
        </li>
        <li>
          <a href="#">
          <i class="fa-solid fa-address-book"></i>
                <span class="links_name">Contact us</span>
          </a>
          <span class="tooltip">Contact us</span>
        </li>
        
        
      </ul>
    </div>
    <section class="home-section">
    <div class="left"> 
    
</div>
<div class="flexform">
  <div class="text">
<h1>Welcome to our College</h1>
  <br>
   <p>We believe there is nothing important than education.</p>
   <p>Computer science is the study of computers <br> and computing, including their theoretical <br> and algorithmic foundations, hardware <br>and software, and their uses for <br> processing information!
</p>
   <div class="btns">
   <a class="btn1" href="==">ABOUT US</a>
   <a  id ="bt" class="btn1" href="">CONTACT US</a>
</div>

   </div>
<div class="imgclass">
<section class="welcome">
		
			<img  src="/img/welcome.png" width="500" height="500" alt="College Image">
		</section>
    </div>
</div>

    </section>

    <script>

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}


    </script>
    
  </body>
</html>


    <!-- start header -->
  <div class="header">
    
    <div class="container">
        
    <h2 class="co" >SIM</h2>
      <img class="logo" src="iamge/logo.png" alt="">
      <div class="links">
        <span class="icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <ul>
          <li><a href="">Home</a></li>
          
          <li><a href="">Sign Up</a></li>
          <li><a href="">About Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
		
    </div>
   

    <div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>
</html>
