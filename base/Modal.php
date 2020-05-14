<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body">
		   <form action="Controllers/login.php" method="post">
			  <div class="form-group">
				<label for="email">Account:</label>
				<input type="text" class="form-control" placeholder="Enter Account" id="ac" name="ac">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
			  </div>
			  <div class="form-group form-check">
				<label class="form-check-label">
				  <input class="form-check-input" type="checkbox"> Remember me
				</label>
			  </div>
			  
		 </div>      
        <!-- Modal footer -->
        <div class="modal-footer">
		 <button type="submit" class="btn btn-primary">Submit</button>
		</form>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- The Modal -->