<!DOCTYPE html>

<html>


<!--    NAVIGATION BAR-->
    <?php include "header.html";?>
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />

                    <!-- ////////////////////////////////////////////////// -->
                    <!-- ////////////////      RESULTS     //////////////// -->
                    <!-- ////////////////////////////////////////////////// -->
                    
                     <!--  HEADER -->
                    <div class="thumbnail frame">
                        <div class = "caption" style="text-align: center"><h3 id="nickname_header"></h3></div>
                    </div>

                    
                    <div id="results">
                       
                        <!--  All plots  -->
                        <div class="thumbnail plot_frame frame">
                            <form name="show_visualizer" id="show_visualizer" action="vis.html"  method="get">
                                <!-- add hidden fields for code and nickname, as well as submit button from analysis_page_script.js-->
                            </form>
                            
                        </div>
                    </div>
           
    <!--View analysis later-->
    <div id="codepanel" >
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">View analysis later</h3>
          </div>
          <div id="code" class="panel-body">
            <?php
                $code=$_GET["code"];
                $url="http://qb.cshl.edu/splitthreader/analysis.php?code=$code";
    
                echo "Return to view your results at any time: <input type=\"text\" class=\"form-control\" value=\"$url\"></input>";
            ?>
          </div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////// -->
    <!-- /////////////      Progress info     ///////////// -->
    <!-- ////////////////////////////////////////////////// -->
    <div class="panel panel-default center" id="progress_panel">
      <div class="panel-heading">
        <h3 class="panel-title">Progress</h3>
      </div>
      <div class="panel-body">
        <div id="plot_info">
        Checking progress...
        </div>
      </div>
    </div> <!-- End of progress info -->
    <!-- ////////////////////////////////////////////////// -->
    


    
<!--   jquery must be first because bootstrap depends on it   -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type='text/javascript' src="js/analysis_page_script.js?rndstr="<?php rand(100000,999999) ?> ></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>

</body>
</html>




