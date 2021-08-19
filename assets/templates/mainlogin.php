<div class="box-container">
  <div class="signup flex items-center wrap justify-center">
    <div class="tilt-pic js-tilt" data-tilt>
      <img src="assets/images/login.svg" alt="IMG">
    </div>
 
	  <form class="form-box validate-form flex flex-col items-center" method="POST" action="signup.php">
      <span class="form-title">SignUp</span>
      <div class="input-wrapper">
        <input class="input" type="email" name="s-email" placeholder="Enter your email here" required>
      </div>
      <div class="input-wrapper">
        <input class="input" type="password" name="s-password" placeholder="Enter password here" required>
      </div>
		  <button type="submit" name="signup">Continue</button>
      <p class="signincall" style="color : white;">Go to <span style="color : yellow; font-weight : bold">SignIn</span></p>
	  </form>
  </div>

  <div class="signin flex items-center wrap justify-center">
    <div class="tilt-pic js-tilt" data-tilt>
      <img src="assets/images/login.svg" alt="IMG">
    </div>
 
	  <form class="form-box validate-form flex flex-col items-center" method="POST" action="signin.php">
      <span class="form-title">SignIn</span>
      <div class="input-wrapper">
        <input class="input" type="email" name="email" placeholder="Enter your email here" required>
      </div>
      <div class="input-wrapper">
        <input class="input" type="password" name="password" placeholder="Enter password here" required>
      </div>
		  <button type="submit" name="signin">Continue</button>
      <p class="signupcall" style="color : white;">Go to <span style="color : yellow; font-weight : bold">SignUp</span></p>
	  </form>
  </div>
</div>

<script type="text/javascript">
        let signup = document.getElementByClassName("signup");
        let signin = document.getElementByClassName("signin");
        let signincall = document.getElementByClassName("signincall");
        let signupcall = document.getElementByClassName("signupcall");
        
        signincall.addEventListener("click", ()=>{
        signup.style.opacity = "0";
        signup.style.transform = "translateY(-100%)";
        signin.style.opacity = "1";
        signin.style.transform = "translateY(-100%)";
        
        });

        signupcall.addEventListener("click", ()=>{
        signin.style.opacity = "0";
        signin.style.transform = "translateY(0%)";
        signup.style.opacity = "1";
        signup.style.transform = "translateY(0%)";
        });    
</script>

<!-- <script type="text/javascript">
  (function ($) {
    $('.signincall').on('click', function() {
      $('.signin').css({"opacity" : "1", "transform" : "translateY(-100%)"});
      $('.signin').css({"opacity" : "0", "transform" : "translateY(-100%)"});
    });

    $('.signupcall').on('click', function() {
      $('.signup').css({"opacity" : "1", "transform" : "translateY(0%)"});
      $('.signup').css({"opacity" : "0", "transform" : "translateY(0%)"});
    });
  })(jQuery);
</script> -->
