<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Alpha Hospital  Login page</title>
</head>



<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
  text-decoration: none;
  list-style: none;
	box-sizing: border-box;
  scroll-behavior: smooth;
}

*::before,
*::after{
  box-sizing: border-box;
}

:root{
	--primary-text-color: #183b56;
	--secondary-text-color: #577592;
	--accent-color: #2294ed;
	--accent-color-dark: #1d69a3;
	--body-color: #f3fbfc;
	--padding-inline-section: 20px;
}

body{
	font-family: "Open Sans", sans-serif;
	color: var(--primary-text-color);
	background-color: #eaf8fa !important;
  overflow: hidden;
}


/*  nav,label,logo. css*/

nav{
  background-color:var(--body-color);
  height: 70px;
  width: 100%;
}

label.logo{
  color: var(--primary-text-color);;
  font-size: 30px;
  line-height: 80px;
  padding: 0 80px;
}


nav ul{
  float: right;
  margin-right: 30px;
}

nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 10px;
  

}


nav ul li a{
  color: var(--primary-text-color);;
  font-size: 20px;
  border-radius: 5px;
  

  
}

section{
  padding:5rem 8% ;
  background-color: ;
}

a:hover{
  color: #36bdce;
  transition: .5s;
}


.checkbtn{
  font-size: 30px;
  color: #fff;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}


#check{
  display: none;
}


.primary-button{
  background-color: #36bdce;
  border-radius: 30px;
  font-weight: 700;
  color: #fff;
  padding: 10px 30px;
  box-shadow: 0 0 2px var(--secondary-text-color);
  transition: 0.2s ease-out;
}

.primary-button:hover{
  background-color: var(--accent-color-dark);
  color: #fff;
}

@media (max-width: 952px){

label.logo{
  font-size: 30px;
  padding-left: 50px;
}


nav ul li a{
  font-size: 16px;
}


nav ul{
  float: right;
  margin-right: 10px;
}


}




@media (max-width: 800px){
 .checkbtn{
  display: block;
  color: var(--accent-color-dark);
  font-size: 20px;
  line-height: 40px;
 }

 


nav{
  
  height: 40px;
  background-color:;
}

 label.logo{
  color: var(--primary-text-color);
  font-size: 20px;
  line-height: 40px;
  padding: 0 30px;
}

 ul{
  position: fixed;
  width: 100%;
  height: 100vh;
  background-color:var(--primary-text-color);
  top: 40px;
  left: -100%;
  text-align: center;
  transition: all .5s;
 }

nav ul li{
  display: block;
  margin: 50px 0;
  line-height: 10px;
}
 nav ul li a{
  font-size: 20px;
  color: #fff;
 }

   a:hover{
    background: none;
    color: #36bdce;
   }

#check:checked ~ ul{
  left: 0;
}

}

/*  nav,label,logo. css ends*/









.login-page{
  display: grid;
  height: 100%;
  place-items: center;
  background-color:;
}

.wrapper{
  margin-top: 3rem;
  width: 100%;
  background:#fff;
  border-radius: 5px;
}

.wrapper .title{
  text-align: center;
  line-height: 80px;
  background: #36bdce;
  padding-left: 20px;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
}
 .wrapper form{
  padding: 30px 20px 25px 20px;
 }

.wrapper form .row{
  height: 45px;
  background:;
  margin-bottom: 15px;
  position: relative;
}

.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgray;
  font-size: 16px;
  
}

form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156 0.25);
}


.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #36bdce;
  border: 1px solid #16a085;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px 0 0 5px;


}

.wrapper form .pass{
  margin: -6px 0 20px 0 ;
}

.wrapper form .pass a{
  color: #36bdce;
  font-size: 17px;
  text-decoration: none;
}

.wrapper form .pass a:hover{
  text-decoration: underline;
}

.wrapper form .button input{
padding-left: 0px;
color: #fff;
font-size: 20px;
font-weight: 500;
background: #36bdce;
border:none;
cursor: pointer;
}

form .button input:hover{
  background: #12876f;
}




.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 18px;
}

.wrapper form .signup-link a{
  color: #36bdce;
  text-decoration: none;
}


.wrapper form .signup-link a:hover{
  text-decoration: underline;
}





/*footer css*/
footer{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
  padding: 50px;
  color: #fff;
  background-color:#132742;
}


.footer > *{
  flex: 1 100%;
}
.footer-left{
  margin-right: 1.25em;\
  margin-bottom: 2em;
}

.footer-left i{
  font-size: 30px;
}

.footer h2{
  font-weight: 600;
  font-size: 17px;
}


.footer ul{
  list-style: none;
  padding-left: 0;
}

.footer li{
  line-height: 2em;
}

.footer a{
  text-decoration: none;
}

.footer-right{
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-flow: row wrap;
}

.footer-right > *{
  flex: 1 50%;
  margin-right: 1.25em;
}

.box a{
  color: #999;
}


.footer-left p{
  padding: 2.5rem 0;
  padding-right: 20%;
  color: #999;
}

.socals a{
  background: #364a62;
  width: 40px;
  height: 40px;
  display: inline-block;
  margin-right: 10px;
}


.socals a i{
  color: #e7f2f4;
  padding: 10px 12px;
  font-size: 20px;
}

footer a:hover{
  color:#36bdce;
  transition: .5s;
}

@media screen and (min-width:600px){


  .footer-right > *{
    flex: 1;
  }

.footer-left{
  flex: 1 0px;

}

.footer-right{
  flex: 2 0px;
  
}

}


@media screen and (max-width:600px){


 footer{
  padding: 15px;
 }
}

      /*footer css ends*/

      
</style>




<body>
 <!-- nav bar area-->

<nav style="position: fixed;" >
 <input type="checkbox" id="check">
 <label for="check" class="checkbtn">
  <i class="fa fa-bars"></i>
</label>


  <label class="logo">
    <i class="fa-sharp fa-solid fa-house-chimney-medical"></i>
    Alpha Hospital
  </label>

  <ul class="">

    <li><a href="{{ url('/home') }}" class="">Home</a></li>
    <li><a href="{{ url('/about') }}" class="">About Us</a></li>
    <li><a href="{{ url('/team') }}" class="">Our Team</a></li>
    <li><a href="{{ url('/pharmacy') }}" class="">Pharmacy</a></li>
    <li><a href="{{ url('/login') }}" class="hover-link primary-button">Log in</a></li>
                
  </ul>
</nav>


<!-- nav bar area ends-->



<section class="login-page">
<div class="wrapper">
  <div class="title"><span>Login Form</span></div>
  <form action="#">

    <div class="row">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Email or Phone">
    </div>

    <div class="row">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" required>
    </div>
<div class="pass"><a href="#">Forgot password?</a></div>
    <div class="row button">
      <input type="submit" value="Login">
    </div>
    <div class="signup-link">Not a Member? <a href="#">SingUp Now</a></div>
  </form>
</div>
</section>














<!-- footer section-->


<footer class="footer" style="padding: 5rem 9%;" id="footer">
  <div class="footer-left">
     <i class="fa-sharp fa-solid fa-house-chimney-medical">Alpha Hospital</i>
     <p>Excellent Service by prioritixng the<br>Safety and security of patiants</p>
     <h2>Follow Us</h2><br>
     <div class="socals">
      
       <a href="#"><i class="fa fa-facebook"></i></a>
       <a href="#"><i class="fa fa-twitter"></i></a>
       <a href="#"><i class="fa fa-google"></i></a>
       <a href="#"><i class="fa fa-instagram"></i></a>
       <a href="#"><i class="fa fa-tumblr"></i></a>
     </div>
  </div>

  <ul class="footer-right">
    <li>
      <h2>Links</h2>

        <ul class="box">
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="{{ url('/pricing') }}">Pricing</a></li>
          <li><a href="{{ url('/products') }}">Products</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </li>



    <li class="features">
      <h2>About</h2>

        <ul class="box">
          <li><a href="{{ url('/partners') }}">Partners</a></li>
          <li><a href="{{ url('/careers') }}">Careers</a></li>
          <li><a href="{{ url('/press') }}">Press</a></li>
          <li><a href="{{ url('/community') }}">Community</a></li>
        </ul>
    </li> 



    <li>
      <h2>Our Office</h3>

        <ul class="box">
          <li><a href="{{ url('/indonesia') }}">Indonesia</a></li>
          <li><a href="{{ url('/condition') }}">Terms & Conditions</a></li>
          <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
        </ul>
    </li>
  </ul>

</footer>

<!-- footer section ends-->

   <script src="https://kit.fontawesome.com/1676a233bf.js" crossorigin="anonymous"></script>
</body>
</html>