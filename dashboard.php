<?php

include 'header.php'; 

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
  
    <style>
       
        .unselectable {
            -moz-user-select: -moz-none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* css formats for the gauge */
        .gauge .domain {
            stroke-width: 2px;
            stroke: #3C8DBC;
        }

        .gauge .tick line {
            stroke: #3C8DBC;
            stroke-width: 2px;
        }
        
        .gauge line {
            stroke: #3C8DBC;
        }

        .gauge .arc, .gauge .cursor {
            opacity: 0;
        }

        .gauge .major {
            fill: #3C8DBC;
            font-size: 20px;
            font-family: 'Play', verdana, sans-serif;
            font-weight: normal;
        }
        
        .gauge .indicator {
            stroke: #EE3311;
            fill: #000;
            stroke-width: 4px;
        }

        /* css formats for the segment display */
        .segdisplay .on {
            fill: #5ED0B4;

        }

        .segdisplay .off {
           fill: #5ED0B4;
            opacity: 0.15;
        }
   
    </style>
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <?php
    include 'header_design.php';
    ?>
    <div class="content-wrapper">
    <div id="dv">
        <span id="speedometer"></span>
        <span style="font-size:30px;">Prediction Accuracy Meter</span>
    </div>

    
    
   
    </div>

      <?php

    include 'footer.php'; 

      ?>

    
