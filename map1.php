<?php

include 'header.php'; 

?>
<script>

	  function fun1()
	  {
	  	    //$("#image").attr("src", "final_out.jpeg");
	  	    var img=document.getElementById("image");
	  	    var e = document.getElementById("route");
			var route = e.options[e.selectedIndex].value;
			var date = document.getElementById("date").value;
			var time = document.getElementById("time").value;

	  	$.post("send_json.php",{"route" : route, "date" : date , "time" : time}, function(data, status) {
	           alert(data);
	            data=String(data);
	            $("#image").attr("src", data);
	            

	        });

	  }

 
  </script>

<body>	
<div class="container">
  <h2>Traffic Prediction</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Predicted Map</a></li>
   <li><a data-toggle="tab" href="#menu1">Quantified Traffic Intensity</a></li>
    <!--<li><a data-toggle="tab" href="#menu2">Something</a></li>
    <li><a data-toggle="tab" href="#menu3">Something</a></li>-->
  </ul>

  <div class="tab-content">
    <div  id="home" class="tab-pane fade in active">
	  <div class="panel panel-info">
      <form role="form" action="">
      <div class="panel-body">
	
		<div class="row">
		<div class="ui-widget form-group">
		<div class="col-md-2"><h4>Route</h4></div>
		<div class="col-md-5">
		<br>
			<select name="route" id="route" class="form-control floating-label">
			<option selected="selected" value="null">Select Route</option>
                    <?php
                        $dbHost = 'localhost';
						$dbUsername = 'root';
						$dbPassword = 'root';
						$dbName = 'traffic';
						$con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
						if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
						$sql = "SELECT src_dest,id FROM disp_src_dest ORDER BY id ASC";
						
						if ($result=mysqli_query($con,$sql))
						{
							
						while ($row=mysqli_fetch_assoc($result))
							{
								?>
								
								<option value="<?php echo $row['id'];?>"> <?php echo $row['src_dest'];?> </option>
								<?php
							}
						
						echo $select;
						mysqli_free_result($result);
						mysqli_close($con);
						}
					
						
						
						?>
						
						</select>
						</div>
				</div>
				</div>
		
		<br/><br/>
			<div class="row">
			<div class="ui-widget form-group">
				<div class="col-md-2">
					<h4>Date</h4>
				</div>
				
			
				<div class="col-md-4">
					<div class="form-control-wrapper">
						<input autocomplete="off" type="text" id="date" name="date" class="form-control floating-label" placeholder=""/>
					</div>
				</div>
				</div>
			</div>
		<br/><br/>
		
			<div class="row">
			<div class="ui-widget form-group">
				<div class="col-md-2">
					<h4>Time</h4>
				</div>
			
				<div class="col-md-4">
					<div class="form-control-wrapper">
						<input autocomplete="off" type="text" id="time" name="time" class="form-control floating-label" placeholder="">
					</div>
				</div>
				</div>
			</div>
		
		
		
		
		<div class="row">
		
			<div class="col-md-2 col-md-offset-3">
			<input class="form-control btn btn-success" name="submit"  onclick="fun1()" type="submit" value="Get Map">
			<!--<button id="butt" class="form-control btn btn-primary">Submit</button>-->
			</div>
			 <div class="col-md-2"><button type="reset" class="btn btn-warning">Reset Button</button>
			</div>
			
		</div>
		</div>
		</form>
	  </div>
	  
  
	<button onclick="fun1()">Click</button>
	<img id="image" height="400" width="400"></img> 
	<script>
  function fun()
  {
	  var e = document.getElementById("route");
	  var strUser = e.options[e.selectedIndex].value;
	  alert(strUser);
  }
  
  </script>
    </div>
	
	 <div id="wait" style="display:none;"><img src='images/demo_wait.gif' /></div>
	  <div id="txt"></div>
	  
	  
    
    <div id="menu1" class="tab-pane fade">
      <h3>Hey there</h3>
    </div>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="css/jquery.ptTimeSelect.css" />
<link href="css/timepicki.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.ptTimeSelect.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="js/timepicki.js"></script>

        <script>
		$('#time').ptTimeSelect();
		$( "#date" ).datepicker();
		</script>
</body>


</html>