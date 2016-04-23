<?php

include 'header.php'; 

?>

  <script>

    function fun1()
    {
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
        background-image: url('images/chose1.gif');
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
  <h2>Traffic Prediction</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Predicted Map</a></li>
 
  </ul>

  <div class="tab-content">
    <div  id="home" class="tab-pane fade in active">
    <div class="panel panel-info">
      <form role="form" id="tform" action="#">
      <div class="panel-body">
  
    <div class="row">
    <div class="ui-widget form-group">
    <div class="col-md-2"><h4>Route</h4></div>
    <div class="col-md-4">
    <br>
      <select name="route" id="route" class="form-control floating-label" required>
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
       <div class="col-md-2 col-md-offset-1">
       <button type="reset" class="form-control btn btn-warning">Reset Button</button>
      </div>
      
    </div>

    </div>
    </form>
    </div>

  <img id="image" /> 

    </div>


    </div>
  </div>
  <div class="json-overlay" id='loadingmessage' style='display:none;'>
  
  </div>
  
</div>
      <?php

      include 'footer.php'; 

      ?>