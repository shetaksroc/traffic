<?php

include 'header.php'; 

?>
<script>
	// function fun11 () {
	// 	var img=document.getElementById("image");
 //      var sel = document.getElementById('menu');
 //   	  var events = sel.options[sel.selectedIndex].value;
 //      var date = document.getElementById("date").value;
 //      var time = document.getElementById("time").value;
 //      alert(events);
		
	// }

    function fun1()
    {

      var img = document.getElementById("image");
      var e1 = document.getElementById("event_id");
      var events = e1.options[e1.selectedIndex].value;

      //var date = document.getElementById("date").value;
      var time = document.getElementById("time").value;

      var person = { 'date' :events , 'time':time};


        // show the loading message.
      $.ajax({
        url: "send_events_correlate.php",
        type: "POST",
        //	dataType: 'json',
        data: person,
        cache:false,
        beforeSend: function() {
    $('#loadingmessage').show();
    // $("#image").attr("src", "");
   
  },
        success : function(data){
            //$(".content").html(html);
            $('#loadingmessage').hide(); 
             //d = new Date();
             //console.log(data);
            // data=String(data);
            d = new Date();
             $("#image").attr("src", data+"?"+d.getTime()); //

        }
    });

    }
function fun2(event)
    {
      //event.preventDefault();
      var img = document.getElementById("image");
      var e1 = document.getElementById("event_id2");
      var events = e1.options[e1.selectedIndex].value;

      //var date = document.getElementById("date").value;
      var time = document.getElementById("time2").value;

      var person = { 'date' :events , 'time':time};


        // show the loading message.
      $.ajax({
        url: "send_events_correlate.php",
        type: "POST",
        //  dataType: 'json',
        data: person,
        cache:false,
        beforeSend: function() {
    $('#loadingmessage').show();
    // $("#image").attr("src", "");
   
  },
        success : function(data){
            //$(".content").html(html);
            $('#loadingmessage').hide(); 
             //d = new Date();
             //console.log(data);
            // data=String(data);
            d = new Date();
             $("#image").attr("src", data+"?"+d.getTime()); //

        }
    });

    }
 
  </script>
  
  <style>
    .json-overlay {
        background-color: #333;
        opacity: 0.98;
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: 100;
        height: 100%;
        width: 100%;
        overflow: hidden;
        background-image: url('images/chose2.gif');
        background-position: center;
        background-repeat: no-repeat;

    }

</style>
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <?php
    include 'header_design.php';
    ?>
    <div class="content-wrapper">
        <div class="container-fluid">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">crikcet</a></li>
   <li><a data-toggle="tab" href="#menu2">vs</a></li>
   

  </ul>

  <div class="tab-content">
    <div  id="home" class="tab-pane fade in active">
    <div class="panel panel-info">
      <form role="form" id="tform" action="#">
      <div class="panel-body">
  
    <div class="row">
    <div class="ui-widget form-group">
    <div class="col-md-2"><h4>Event</h4></div>
    <div class="col-md-4">
    <br>

      <select class="form-control" id="event_id">

      <option value="0">--Select--</option>
      <option value="2016-04-12">RCB vs SRH  12-April</option>
      <option value="2016-04-17">RCB vs DD 17-April</option>
      <option value="2016-05-02">RCB vs KKR 02-May</option>
      <option value="2016-05-07">RCB vs RPS 07-May</option>
      <option value="2016-05-11">RCB vs MI 11-May</option>
      <option value="2016-05-14">RCB vs GL 14-May</option>
      <option value="2016-05-18">RCB vs KXIP 18-May</option>
      
    </select>
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
       <div class="col-md-2 col-md-offset-1">
       <button type="reset" class="form-control btn btn-warning">Reset Button</button>
      </div>
      
    </div>

    </div>
    </form>
    </div>
 
    </div>

    




    <div  id="menu2" class="tab-pane fade">
    <div class="panel panel-info">
      <form role="form" id="tform1" action="#">
      <div class="panel-body">
  
    <div class="row">
    <div class="ui-widget form-group">
    <div class="col-md-2"><h4>Event</h4></div>
    <div class="col-md-4">
    <br>

      <select class="form-control" id="event_id2">

      <option value="0">--Select--</option>
      <option value="2016-05-07">Hard Rock Rising- Live Music and RCB vs RPS 07-May </option>
      
      
    </select>
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
            <input autocomplete="off" type="text" id="time2" name="time" class="form-control floating-label" placeholder="">
          </div>
        </div>
        </div>
      </div>
    
    <div class="row">
    
      <div class="col-md-2 col-md-offset-3">
      <input class="form-control btn btn-success" name="submit"  onclick="fun2()" type="submit" value="Get Map">
      
      </div>
       <div class="col-md-2 col-md-offset-1">
       <button type="reset" class="form-control btn btn-warning">Reset Button</button>
      </div>
      
    </div>

    </div>
    </form>
    </div>
  

    </div>





   <img id="image" /> 

  

    </div>
  </div>
  <div class="json-overlay" id='loadingmessage' style='display:none;'>
  
  </div>
    </div>

      <?php

    include 'footer.php'; 

      ?>

    
