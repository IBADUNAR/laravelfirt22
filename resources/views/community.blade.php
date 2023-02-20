<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
	<link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Alpha Hospital</title>
</head>
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






<



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
          <li><a href="{{ url('/condit') }}">Terms & Conditions</a></li>
          <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
        </ul>
    </li>
  </ul>

</footer>

<script src="https://kit.fontawesome.com/1676a233bf.js" crossorigin="anonymous"></script>
</body>
</html>