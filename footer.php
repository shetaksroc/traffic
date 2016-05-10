<?php
echo '
<footer class="main-footer">
      
        <strong>Copyright &copy; 2015-2016 <a href="dashboard.php">Traffic Prediction</a>.</strong> All rights reserved.
      </footer>
      </div>
      <script type="text/javascript" src="js/d3.v3.min.js"></script>
    <script type="text/javascript" src="js/pointerevents.js"></script>
    <script type="text/javascript" src="js/pointergestures.js"></script>
    <script type="text/javascript" src="js/iopctrl.js"></script>
      <script>
    $("#time").ptTimeSelect();
    $("#time2").ptTimeSelect();
    $("#date").datepicker({ dateFormat: "yy-mm-dd" });
    $("#tform").submit(function(e) {
    e.preventDefault();
});

  $("#tform1").submit(function(e) {
    e.preventDefault();
});
    </script>
        
     <script>
   var speedAccel = [ 1, 2, 6, 3, 3, 4,84.5];
        var svg = d3.select("#speedometer")
                .append("svg:svg")
                .attr("width",600)
                .attr("height",500);


        var gauge = iopctrl.arcslider()
                .radius(250)
                .events(false)
                .indicator(iopctrl.defaultGaugeIndicator);
        gauge.axis().orient("in")
                .normalize(true)
                .ticks(12)
                .tickSubdivide(3)
                .tickSize(10, 8, 10)
                .tickPadding(5)
                .scale(d3.scale.linear()
                        .domain([0, 160])
                        .range([-3*Math.PI/4, 3*Math.PI/4]));

        var segDisplay = iopctrl.segdisplay()
                .width(200)
               .digitCount(5)
         
               // .negative(false)
            .decimals(2);
               ;

        svg.append("g")
                .attr("class", "segdisplay")
                .attr("transform", "translate(130, 200)")
        
                .call(segDisplay);

        svg.append("g")
                .attr("class", "gauge")
                .call(gauge);
  i=0;
  
        var timer = setInterval(function () {
              
         segDisplay.value(i);
        gauge.value(i); 
                  
           if(i==90)
           {
    segDisplay.value(84.5);
        gauge.value(84.5);
}
else
 i+=1;    
           
              }, 200);
        
           segDisplay.value(84.5);
        gauge.value(84.5); 
       
      
    
           
    
    </script>
      </body>
	</html>
      ';



?>