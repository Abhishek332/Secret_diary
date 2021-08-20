<div class="box-container flex justify-center items-center">
  <div id="signup" class="sign flex items-center justify-center wrap">
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
      <p id="signincall" style="color : white;">Go to <span style="color : #f2f2a3; font-weight : bold">SignIn</span></p>
	  </form>
  </div>

  <div id="signin" class="sign flex items-center justify-center wrap">
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
      <p id="signupcall" style="color : white;">Go to <span style="color : #f2f2a3; font-weight : bold">SignUp</span></p>
	  </form>
  </div>
</div>

<script type="text/javascript">
        let signup = document.getElementById("signup");
        let signin = document.getElementById("signin");
        let signincall = document.getElementById("signincall");
        let signupcall = document.getElementById("signupcall");
        
        signincall.addEventListener("click", ()=>{
        signin.style.opacity = "1";
        signin.style.transform = "translateX(0%)";
        signup.style.opacity = "0";
        signup.style.transform = "translateX(-80%)";
        });

        signupcall.addEventListener("click", ()=>{
        signin.style.opacity = "0";
        signin.style.transform = "translateX(80%)";
        signup.style.opacity = "1";
        signup.style.transform = "translateX(0%)";
        });
    </script>
