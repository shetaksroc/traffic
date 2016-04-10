<?php

include 'header.php'; 

//$data = array(12, 2, 11,0,1);
//echo shell_exec('python traffic_prediction.py ' . escapeshellarg(json_encode($data)));
?>
<script>


$(function() {
    $( "#datepicker" ).datepicker();
  });
  
  $(function() {
    
    $( "#tags1" ).autocomplete({
      source: 'search1.php'
    });
	$( "#tags2" ).autocomplete({
      source: 'search2.php'
    });
  });
  function fun1()
  {
  	    //$("#image").attr("src", "final_out.jpeg");
  	    var img=document.getElementById("image");
  	$.get("send_json.php", function(data, status) {
           alert(data);
            data=String(data);
            $("#image").attr("src", data);

        });

  	/*$.ajax({  
    type: 'GET',
    url: 'send_json.php',   
    //data: {st:11, wd: 1,wn:2,hr:1,mn:30 },

    success: function(response) {
        alert(response);
        
    }
});*/
  /*<?php
  $data = array(12, 2, 11,0,1);
	$result= shell_exec('python traffic_prediction.py ' . escapeshellarg(json_encode($data)));  


	?>


var temp = <?php echo json_encode($result); ?>;

alert(temp);*/

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
	 <!-- <div class="row">
	  <div class="mdl-textfield mdl-js-textfield mdl-textfield-floating-label">
                <input class="mdl-textfield__input" type="text" id="bind-one" />
                <label class="mdl-textfield__label" for="bind-one">Bind Test One</label>
            </div>
	  </div>-->
	  
	  
	  
		<!--<div class="row">
		<div class="ui-widget form-group">
			<div class="col-md-2"><h4 for="tags1">Route</h4></div>
			<div class="col-md-4"><input name="route" class="form-control" id="tags1" /></div>
		</div>
		</div>-->
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
						$dbPassword = 'root!';
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
		<!--<div class="row">
		<div class="ui-widget form-group">
			<div class="col-md-2"><h4 for="tags2">Destination</h4></div>
			<div class="col-md-3"><input class="form-control" id="tags2"></div>
		</div>
		</div>-->
		
		
			<div class="row">
			<div class="ui-widget form-group">
				<div class="col-md-2">
					<h4>Date</h4>
				</div>
				
			
				<div class="col-md-4">
					<div class="form-control-wrapper">
						<input type="text" id="date" name="date" class="form-control floating-label" placeholder=""/>
					</div>
				</div>
				</div>
			</div>
		<br/><br/>
		
		
		
		
			<!--<div class="row">
			<div class="ui-widget form-group">
				<div class="col-md-2">
					<h4>Time</h4>
				</div>
			
				<div class="col-md-4">
					<div class="form-control-wrapper">
						<input type="text" id="time" name="time" class="form-control floating-label" placeholder="">
					</div>
				</div>
				</div>
			</div>-->
			<div class="row">
			<div class="ui-widget form-group">
				<div class="col-md-2">
					<h4>Time</h4>
				</div>
			
				<div class="col-md-4">
					<div class="form-control-wrapper">
						<input type="text" id="time" name="time" class="form-control floating-label" placeholder="">
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
<link rel="stylesheet" href="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/css/material.min.css" />
<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css">

<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" href="./build/css/timepicker.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.ptTimeSelect.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="js/timepicki.js"></script>
<script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="js/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css"/>-->
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
<script src="js/timepicker.js" type="text/javascript" charset="utf-8"></script>
        <script>
		$('#time').ptTimeSelect();
		$( "#date" ).datepicker();
		</script>
<script type="text/javascript">
		/*$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});*/
		</script>
<script>

/*$(document).ready(function(){
    $("#home").ajaxStart(function(){
        $("#wait").css("display", "block");
    });
    $("#home").ajaxComplete(function(){
		setTimeout(function(){
          $("#wait").css("display", "none");
		  $("#home").css("display", "none");
		  
       }, 2000);
        
    });
    $("#butt").click(function(){
		setTimeout(function(){
		$("#txt").load("image.php");
		},1000);
        
    });
});*/
</script>

    <script>
	$('#timepicker1').timepicki();
	$('#sample3 input').ptTimeSelect({
	containerClass: "timeCntr",
	containerWidth: "350px",
	setButtonLabel: "Select",
	minutesLabel: "min",
	hoursLabel: "Hrs"
});
    </script>
</body>


</html>