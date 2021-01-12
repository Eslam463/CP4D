
<?php include 'init.php'
//	session_start();
//		session_decode();
?>
<!------------------------------------------------------------------------------->


				<!--
					login form 
				-->



<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		
		<div class="col-md-8">

				<div class="login">
					<form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <br>
						  <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div><br>
						  <button type="submit" class="btn btn-dark" formaction="sec_page.php">Login</button>
						  <button type="submit" class="btn btn-dark" formaction="start.php">Signup</button>
					</form>
				</div>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>


	
<!------------------------------------------------------------------------------->


<?php include $inc.'footer.php';?>