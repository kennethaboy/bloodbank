<?php include 'login_header.php';?>
<body style = "background :url('../assets/frontend/onepage/img/blood.jpg');background-size:cover;">
   <div class="container">
    <div class="text-center">
	<h1 class = "" style ="color:white;">Provincial Blood Bank Inventory System</h1>	
    </div>

        <div>
            <form  method ="POST" action = "login.php"  class="form-signin">               
                <input type="text"  name="username" placeholder="Username"  class="form-control" />
                <input type="password" name="password"  placeholder="Password"  class="form-control" />
        				<select name = "user_type" class = "form-control">				
        					<option value = "Administrator">Administrator</option>
        					<option value = "Medical Technology">Med Tech</option>
        					<option value = "Recruitment Officer">Recruitment Officer</option>
        					<option value = "Phlebotomist">Phlebotomist</option>
        				</select>
        				<br/>
                <button name  = "login" class="btn text-center btn-block btn-success">Sign in</button>
            </form>			
        </div>
    <div class="text-center">       
    </div>
</div>	 
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/login.js"></script>
</body>  
</html>
