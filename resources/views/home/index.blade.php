
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
  background-color:#DDE7F3;
    margin-top: 10px;

    font-family: Arial, sans-serif;
    font-weight: bold;
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
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
/* css for welcome */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    align-items: center;
    justify-content: center;
    background-color:#DDE7F3;
}
.container{
  margin-top:160px;
  margin-left:44%;
    width: 246px;
    overflow: hidden;
    
}
.container .text{
    position: relative;
    color: #4070F4;
    font-size: 30px;
    font-weight: 600;
}
.container .text.first-text{
    color: #FFF;
}
.text.sec-text:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #DDE7F3;
    border-left: 2px solid #4070F4;
    animation: animate 4s steps(12) infinite;
}
@keyframes animate{
    40%, 60%{
        left: calc(100% + 4px);
    }
    100%{
        left: 0%;
    }
}

.heading{
	position: absolute;
	height:auto;
	width:100%;
	top:50%;
	transform: translateY(-50%);
	text-align: center;
	text-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
}
.heading .head{
	position: relative;
	font-family: 'RacingSansOne',sans-serif;
	font-size:48px;
	font-weight: 600; 
	color:#fff;
}
.heading .head span{
	color:#017fb5;
}
.heading  .sub{
	position: relative;
	font-family: 'cinzel',sans-serif;
	font-size:22px;
	font-weight: 300; 
	color:#fff;
	margin:-2% 0 2% 0;
}
.heading .btns{
	height:auto;
	width:100%;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	position: relative;
}
.heading .btns a{
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
.heading .btns a:hover{
	background: #DDE7F3;
	border:1px solid #017fb5;
}
.heading .btns .btn1{
	background:#11101D;
	border:1px solid #017fb5;
}
.heading .btns .btn1:hover{
	background:#DDE7F3;
	border:1px solid #017fb5 ;
	color:rgba(255, 255, 255, 0.95);
}
.btn1{
  margin-top:-220px;
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
  background: #DDE7F3;
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

    </style>
    <div class="sidebar">
      <div class="logo-details">
      <div class="logo_name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIM</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
       
        
     
      
        <li>
          <a href="profile">
          <i class="fa-solid fa-user"></i>
                      <span class="links_name">Profile</span>
          </a>
          <span class="tooltip">Profile</span>
        </li>
        <li>
          <a href="courses">
        <i class="fa-solid fa-book"></i>
                            <span class="links_name">Courses</span>
          </a>
          <span class="tooltip">Courses</span>
        </li>
        <li>
          <a href="">
          <i class="fa-solid fa-clipboard-user"></i>
                      <span class="links_name">My Attendance</span>
          </a>
          <span class="tooltip">My Attendance</span>
        </li>
        <li>
          <a href="">
          <i class="fa-sharp fa-solid fa-bookmark"></i>
             <span class="links_name">About us</span>
          </a>
          <span class="tooltip">About us</span>
        </li>
        <li>
          <a href="">
          <i class="fa-solid fa-address-book"></i>
                <span class="links_name">Contact us</span>
          </a>
          <span class="tooltip">Contact us</span>
        </li>
        <li class="profile">
          <div class="profile-details">
               <div class="name_job">
              <div class="name">{{ $name }}</div>
              <div class="job">{{ $role }}</div>
            </div>
          </div>

          <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"><a href =""><i class="bx bx-log-out" id="log_out"></i></a></button>
          </form>
         
        </li>
      </ul>
        
        
    
    </div>
    
    <section class="home-section">
    <div class="container">
        <span class="text first-text" style="color:black;">Welcome</span>
        <span class="text sec-text">{{ $name }}</span>
    </div>
    <div class="heading">
				
				<div class="btns">
					<a class="btn1" href="profile">MY PROFILE</a>
					<a class="btn1" href="{{Route("Regcourses.index")}}">MY COURSES</a>
				</div>



    </section>

    <script>
const text = document.querySelector(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "{{ $name }}";
            }, 0);
           
        }
        textLoad();
        setInterval(textLoad, 12000);
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

  
   

    <div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>
</html>
