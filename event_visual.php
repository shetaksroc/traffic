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

    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      height: 50%;
      margin: auto;
  }
  .carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
  WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
  Need to override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}   


    .carousel-content 
    {
  position: absolute;
  bottom: 10%;
  left: 25%;
  z-index: 20;
  color: #3C8DBC;
  //text-shadow: 0 1px 2px rgba(0,0,0,.6);
  font-weight: bold;
  font-size: 30px;
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


  <div class="row" style="display:none;" id="img_grid" >
    <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
    <li data-target="#myCarousel" data-slide-to="8"></li>
    <li data-target="#myCarousel" data-slide-to="9"></li>
    <li data-target="#myCarousel" data-slide-to="10"></li>
    <li data-target="#myCarousel" data-slide-to="11"></li>
    <li data-target="#myCarousel" data-slide-to="12"></li>
    <li data-target="#myCarousel" data-slide-to="13"></li>
    <li data-target="#myCarousel" data-slide-to="14"></li>
    <li data-target="#myCarousel" data-slide-to="15"></li>
    <li data-target="#myCarousel" data-slide-to="16"></li>
    <li data-target="#myCarousel" data-slide-to="17"></li>
    <li data-target="#myCarousel" data-slide-to="18"></li>
    <li data-target="#myCarousel" data-slide-to="19"></li>
    <li data-target="#myCarousel" data-slide-to="20"></li>
    <li data-target="#myCarousel" data-slide-to="21"></li>
    <li data-target="#myCarousel" data-slide-to="22"></li>
    <li data-target="#myCarousel" data-slide-to="23"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_0">
      <div class="carousel-content">
        <p>00:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_1">
      <div class="carousel-content">
        <p>01:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_2">
      <div class="carousel-content">
        <p>02:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_3">
      <div class="carousel-content">
        <p>03:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_4">
      <div class="carousel-content">
        <p>04:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_5">
      <div class="carousel-content">
        <p>05:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_6">
      <div class="carousel-content">
        <p>06:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_7">
      <div class="carousel-content">
        <p>07:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_8">
      <div class="carousel-content">
        <p>08:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_9">
      <div class="carousel-content">
        <p>09:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_10">
      <div class="carousel-content">
        <p>10:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_11">
      <div class="carousel-content">
        <p>11:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_12">
      <div class="carousel-content">
        <p>12:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_13">
      <div class="carousel-content">
        <p>13:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_14">
      <div class="carousel-content">
        <p>14:00</p>
      </div>
    </div>
     <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_15">
      <div class="carousel-content">
        <p>15:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_16">
      <div class="carousel-content">
        <p>16:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_17">
      <div class="carousel-content">
        <p>17:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_18">
      <div class="carousel-content">
        <p>18:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_19">
      <div class="carousel-content">
        <p>19:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_20">
      <div class="carousel-content">
        <p>20:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_21">
      <div class="carousel-content">
        <p>21:00</p>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_22">
      <div class="carousel-content">
        <p>22:00</p>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/800x600" class="thumbnail img-responsive" id="img_23">
      <div class="carousel-content">
        <p>23:00</p>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

    <span class="fa fa-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  </div>

  <!-- Left and right controls -->
  
</div>
    <!--
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
    -->
     
  
  
</div>
    </div>
</div>
      <?php

    include 'footer.php'; 

      ?>

    
