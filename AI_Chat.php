<?php require'base/header.php';?>
<div class="container">




<!--Comment-->

					   <div class="media border p-3">
                        <div class="media-body">
							
                           
                            <div id="showMsg">
                            
                            </div>
                           
                        </div>
						</div>
						
						 <!--Comment-->
                    
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
					<!--Leave Comment-->
                    </br>
					<input type="text" name="input" value=""  id="ai-text"/>
                    </br>
					<input type="button" value="Send to AI"  class="btn btn-primary" id="ai-btn" onclick="Chat();"/>
					
					<!--Leave Comment-->
                  </div>


</div>

<script>
function Chat() {
    var inp = document.getElementById("ai-text").value;
    jQuery.ajax({
        type: "POST",
        url: 'AI/AI_Chat.php',
        data: {inp},

        success: function (respon) {
            
            var a = "<p>"+respon+"</p>"
            document.getElementById("showMsg").innerHTML += "<p>"+respon+"</p>" ;                   
        }
    });
    
    
    
}

</script>



<?php require'base/footer.php';?>