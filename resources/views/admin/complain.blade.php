<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Alert Message</title>
    <link rel="stylesheet" href="style.css">

    <!-- font Awesome CDN -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/85a8aaf291.js" crossorigin="anonymous"></script>

</head>
<style >
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background-color:#E4E9F7;
    margin-top: 10px;

    font-family: Arial, sans-serif;
    font-weight: bold;
}
.container{
    width: 700px;
    height: auto;
    background-color: #fff;
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    display: flex;
    justify-content: center;
}

ul {
  list-style-type: disc;
}
li {
  padding-left: 0px;
}
.footer {
  background-color: #11101D;
  color: white;
  padding: 30px 10px;
  text-align: center;
  font-size: 18px;
  margin-top:800px;
}
.footer span {
  font-weight: bold;
  color: var(--main-color);
}
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
.box{
    width: 500px;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
h3{
    font-size: 35px;
    margin: 15px;
}
.name{
    width: 100%;
    position: relative;
    margin-bottom: 15px;
}
.name i{
    position: absolute;
    top: 50%;
    left: 30px;
    transform: translateY(-50%);
    font-size: 20px;
    color: #bbb;
}
.name input{
    width: 100%;
    padding: 20px 60px;
    border: none;
    outline: none;
    font-size: 18px;
    background-color: #eee;
    border-radius: 40px;
}
.name input::placeholder{
    color: #bbb;
    font-weight: 500;
}
.email{
    width: 100%;
    position: relative;
    margin-bottom: 15px;
}
.email i{
    position: absolute;
    top: 50%;
    left: 30px;
    transform: translateY(-50%);
    font-size: 20px;
    color: #bbb;
}
.email input{
    width: 100%;
    padding: 20px 60px;
    border: none;
    outline: none;
    font-size: 18px;
    background-color: #eee;
    border-radius: 40px;
}
.email input::placeholder{
    color: #bbb;
    font-weight: 500;
}
.message-box{
    width: 100%;
    position: relative;
    margin-bottom: 15px;
}
.message-box i{
    position: absolute;
    top: 50%;
    left: 30px;
    transform: translateY(-50%);
    font-size: 20px;
    color: #bbb;
}
.message-box textarea{
    width: 100%;
    padding: 20px 60px;
    border: none;
    outline: none;
    font-size: 18px;
    background-color: #eee;
    border-radius: 40px;
}
.message-box textarea::placeholder{
    color: #bbb;
    font-weight: 500;
}

.button{
    width: 100%;
    cursor: pointer;
    margin-bottom: 20px;
}
.button button{
    width: 100%;
    padding: 10px;
    font-size: 20px;
    color: #fff;
    background-color: #11101D;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
}
.message{
    width: 100%;
    position: relative;
    margin-bottom: 60px;
    display: flex;
    justify-content: center;
}
.message .success{
    font-size: 20px;
    color: green;
    position: absolute;
    animation: buttons .3s linear;
    display: none;
}
.message .danger{
    font-size: 20px;
    color: red;
    position: absolute;
    transition: .3s;
    animation: buttons .3s linear;
    display: none;
}
@keyframes buttons{
    0%{
        transform: scale(0.1);
    }
    50%{
        transform: scale(0.5);
    }
    100%{
        transform: scale(1);
    }
}

</style>
<body>
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
                            <span class="links_name">Add Courses</span>
          </a>
          <span class="tooltip">Add Courses</span>
        </li>

       
        <li>
          <a href="complain">
          <i class="fa-solid fa-address-book"></i>
                <span class="links_name">Complains</span>
          </a>
          <span class="tooltip">Complains</span>
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
    <style media="screen">
    .student-card {
  background-color: #ffffff;
  border-radius: 50px;
  border: 3.79px solid #1d1b31;
  padding: 20px;
  width: 300px;
  height: 120px;
  text-align: left;
}

.student-card h2 {
  margin-top: 0;
}

.student-card p {
  margin-bottom: 0;
}
ul {
  list-style-type: disc;
}
li {
  padding-left: 0px;
}
    </style>
    </head>
<body>
  
  <div class="student-card" style="margin-left: 300px;">
  <ul>
  <li>Student : Eyad Hamdi</li>
  <li>Content : My attendeace.</li>
</ul>
</div>

    <script>
        function message(){
    var Name = document.getElementById('name');
    var email = document.getElementById('email');
    var msg = document.getElementById('msg');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(Name.value === '' || email.value === '' || msg.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            Name.value = '';
            email.value = '';
            msg.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}
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