<?php

include 'header.php'; 

?>
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
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <?php
    include 'header_design.php';
    ?>
    <div class="content-wrapper">
    <div class="container-fluid">
    
    <div class="row">
    
    <h2>Events Visualization</h2>
    <div class="col-md-3">
    <select class="form-control" id="event_id">
      <option value="0">--Select--</option>
      <option value="1">Bishop Cotton</option>
      <option value="2">Commercial Street</option>
      <option value="3">Forum Mall</option>
      <option value="4">Chinnaswamy Stadium</option>
      <!--<option value="5">Townhall</option>-->
      
    </select>
    </div>
    <div class="col-md-3">
    <input type="submit" class="form-control btn btn-info" id="btn_images" onclick="get_images()" value="Get Images" />
    </div>
    </div>
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
      <?php

    include 'footer.php'; 

      ?>

    
