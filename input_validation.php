<!DOCTYPE html>

<html>

<!--    NAVIGATION BAR-->
<?php include "header.html";?>
<?php include "title.html";?>

<?php
    $aResult = array();
    if( !isset($_POST['code']) ) { $aResult['error'] = 'ERROR: No code passed to input_validation.php';}
    $code=$_POST["code"];
    $nickname = "my_sample";

    if( isset($_POST['nickname']) ) {
        $nickname = $_POST['nickname'];

        // Replace all non-alphanumeric characters with underscores
        $nickname = preg_replace('/[^a-zA-Z0-9]/', '_', $nickname);
    }

    $url="analysis.php?code=$code";
    $run_url="run_algorithm.php";
    $filename_variants="user_uploads/$code.variants";
    $filename_copynumber="user_uploads/$code.copynumber";

    $back_button= "<form action=\"./\" method=GET><button type=\"submit\" class=\"center btn btn-danger\">Back</button></form>";
    //$continue_button= "<form action=\"$url\"><input type=\"hidden\" name = \"code\" value=\"$code\"><button type=\"submit\" class=\"center btn btn-success\">Continue</button></form>";
    
    $continue_button= "<form 
        action=\"$run_url\" 
        method=\"post\">
            <input type=\"hidden\" name = \"code\" value=\"$code\">   
            <input type=\"hidden\" name=\"nickname\" value=\"$nickname\">  
            <button type=\"submit\" class=\"center btn btn-success\">Continue</button>
        </form>";
        
        // <input type=\"hidden\" name=\"read_length\" value=\"$read_length\"> 
    
    if (!file_exists ($filename_variants) and !file_exists ($filename_copynumber)) {
        echo "<div class=\"alert center alert-danger\" role=\"alert\">No files uploaded</div>";
        echo "$back_button";
        exit;
    }
    else if (!file_exists ($filename_variants)) {
        echo "<div class=\"alert center alert-danger\" role=\"alert\">No file uploaded for variants</div>";
        echo "$back_button";
        exit;
    }
    else if (!file_exists ($filename_copynumber)) {
        echo "<div class=\"alert center alert-danger\" role=\"alert\">No file uploaded for copy number</div>";
        echo "$back_button";
        exit;
    } else {
        echo "<div class=\"alert center alert-success\" role=\"alert\">Great! Both files were uploaded</div>";
        echo "$continue_button";
    }
?>
</body>
</html>
