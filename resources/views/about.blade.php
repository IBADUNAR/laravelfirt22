<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
	<link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Alpha Hospital About Us</title>
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





/* header section*/
.container{
  width:;
  padding:;
  background-color:;
}

.row{
  
  width: 100%;
}


.column-66 {
  float: left;
   margin-top:;
  width: 66.66666%;
  padding:50px;
}

.column-33 {
  float: left;
  margin-top:;
  width: 33.33333%;
  padding: 20px 20px;

}

.column-77{
  margin-left: -50px;
   }






.xlarge-font {
  font-size: 80px
}

.button {
  border: none;
  color: white;
  padding: 18px 40px;
  font-size: 16px;
  cursor: pointer;
  background-color:#36bdce;
  margin-top: 3rem;
  border-radius: 10px;
}

.button:hover{
  background-color: var(--accent-color-dark);
  color: #fff;
  transition: .5s;
}

img {
  display: block;
  height: auto;
  max-width: 100%;

}

.container .row .column-66 p{
  margin-top: 1rem;
  line-height: ;
}
  

.second-btn{
  color:var(--primary-text-color);
  background-color: #fff;
  padding-left:1px;
}

.second-btn i{
  
  color:;
  font-size: 30px !important;
}
 

 .second-btn:hover{
  color:#36bdce ;
  background-color:var(--body-color);
}
  
.button{

   text-align: center;

}






@media screen and (max-width: 980px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
    margin-top: -1rem;
    padding: -2px;
  }



.heading{
  font-size: 15px !important;
  text-align: center;
 
}


.heading-second{
  font-size: 20px !important;
  text-align: center;
  
}
.arrows {
text-align: center; 
} 

#arrow-left,
#arrow-right{
  font-size: 1.5rem;

}

.botton{
    margin-left: -190px;
    font-size: 20px;
  }

  #row-22{
   
  }

.col-img img{
  width: 35% !important;
  height: auto;
}

.col-img h3{
  font-size: 12px;
}

  .column-33{
  margin-top:;
}

.column-77{
  margin-left: 1px;
   }


  img {
    display: block;
  height: auto;
  max-width: 100%;

  }

.button{
 font-size: 15px;
   padding: 10px 15px;
   text-align: center;

}
.xlarge-font {
  font-size: 20px;

}


.solution .second{
  margin-left: -140px;
   width: 100%;
}


.Register-btn{
  text-align: center;
}

.solution .column {
  
  width: 100%;
  margin-left: -90px;
}

}


/* header section ends*/












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



<!--banner section-->
<section>
<div class="home" id="home" style="margin-bottom: 10rem; box-shadow: 0px 15px 10px -15px #111; ">
  <div class="container">
  <div class="row">
    <div class="column-66">
      <h3 class="xlarge-font" style="font-size:2.5rem;" ><b>Consulation With Your
      <br>
      Best Doctor Anywhere
      <br>
      And Anytime
      </b></h3>

      <p style="font-size: 17px; line-height:1.5;">Now You Can Make an Apointment with Your Doctor<br>Anywhere And Anytime Via Online
        Boking Which<br>
      Makes it Easier</p>
      <br><br>
      <br><p><i class="fa fa-calendar" style="margin-right: 10px;"></i>Easy Online Booking Here</p>
      <p><i class="fa fa-user" style="margin-right: 10px;"></i>Served Directly By Expert</p>
<br>
      <button class="button">Make an Apointment</button>
      
    </div>
    <div class="column-33 column-77" style="">
        <img src="baner6.png" style="border-radius: 30px;">
    </div>
  </div>
</div>

</div>
</section>

<!--banner section ends-->













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