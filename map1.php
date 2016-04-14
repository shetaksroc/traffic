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

			var person = { 'route' :route , 'date':date, 'time':time};
        

			  // show the loading message.
    	$.ajax({
        url: "send_json.php",
        type: "POST",
        //dataType: 'json',
        data: person,
        cache:false,
        beforeSend: function() {
    $('#loadingmessage').show();
     $("#image").attr("src", "");
  },
        success : function(data){
            //$(".content").html(html);
            $('#loadingmessage').hide(); 
             d = new Date();
             $("#image").attr("src", data+"?"+d.getTime());

        }
    });

	  	// $.post("send_json.php",{"route" : route, "date" : date , "time" : time}, function(data, status) {
	   //         alert(data);
	   //          data=String(data);
	   //          $("#image").attr("src", data);
	            

	   //      });

	  }
	 
 
  </script>

<body>	
<div class="container">
  <h2>Traffic Prediction</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Predicted Map</a></li>
   <li><a data-toggle="tab" href="#menu1">Quantified Traffic Intensity</a></li>
   <li><a data-toggle="tab" href="#menu2">Visualize events traffic</a></li>
    <!--<li><a data-toggle="tab" href="#menu2">Something</a></li>
    <li><a data-toggle="tab" href="#menu3">Something</a></li>-->
  </ul>

  <div class="tab-content">
    <div  id="home" class="tab-pane fade in active">
	  <div class="panel panel-info">
      <!--<form role="form" action="">-->
      <div class="panel-body">
	
		<div class="row">
		<div class="ui-widget form-group">
		<div class="col-md-2"><h4>Route</h4></div>
		<div class="col-md-4">
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
			
			</div>
			 <div class="col-md-2"><button type="reset" class="btn btn-warning">Reset Button</button>
			</div>
			
		</div>
		</div>
		</form>
	  </div>
	  
  	<div id='loadingmessage' style='display:none; height: 200px; width: 200px;'>
  <img src='images/ajax_loader2.gif'/>
</div>
	<!--<button onclick="fun1()">Click</button>-->
	<img id="image" height="400" width="400"></img> 
	<script>
  /*function fun()
  {
	  var e = document.getElementById("route");
	  var strUser = e.options[e.selectedIndex].value;
	  alert(strUser);
  }*/
  
  </script>
    </div>
	
	 <div id="wait" style="display:none;"><img src='images/demo_wait.gif' /></div>
	  <div id="txt"></div>
	  
	  
    
    <div id="menu1" class="tab-pane fade">
      <h3>Hey there</h3>
    </div>
    <div id="menu2" class="tab-pane fade">
    <script type="text/javascript">
    	 function get_images()
	  {
	  	var e = document.getElementById("event_id");
	  	var id= e.options[e.selectedIndex].value;
	  	var path,dir;
	  	if(id==1)
			dir='bishop'
		else if(id==2)
			dir='com'	
		else if(id==3)
			dir='forum'	
		else if(id==4)
			dir='stadium'
		else if(id==5)
			dir='townhall'
		path="event_images/"+dir+"/";
		for(i=0;i<24;i++)
		{
			var src=path+dir+i+"_0.jpeg";
			jQuery('#img_'+i).attr('src', src);
		}
		jQuery('#img_grid').css({"display": "block"});
	  }

    </script>
    <h2>Events Visualization</h2>
    <select id="event_id">
    	<option value="0">--Select--</option>
    	<option value="1">Bishop Cotton</option>
    	<option value="2">Commercial Street</option>
    	<option value="3">Forum Mall</option>
    	<option value="4">Chinnaswamy Stadium</option>
    	<option value="5">Townhall</option>
    	
    </select>
    <button id="btn_images" onclick="get_images()">Get Images</button>
  <div class="row" style="display:none;" id="img_grid">
  <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_0">
        </a>
    </div>

    <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_1">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_2">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_3">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_4">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_5">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_6">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_7">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_8">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_9">
        </a>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_10">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_11">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_12">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_13">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_14">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_15">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_16">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_17">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_18">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_19">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_20">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_21">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_22">
        </a>
    </div>
     <div class="col-lg-4 col-sm-6 col-xs-12">
        <a href="#">
             <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_23">
        </a>
    </div>
     
  </div>
  
</div>
    </div>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="css/jquery.ptTimeSelect.css" />
<link href="css/timepicki.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.ptTimeSelect.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.min.js"></script>
<script src="js/timepicki.js"></script>

        <script>
		$('#time').ptTimeSelect();
		$("#date").datepicker({ dateFormat: 'yy-mm-dd' });
		</script>
</body>


</html>