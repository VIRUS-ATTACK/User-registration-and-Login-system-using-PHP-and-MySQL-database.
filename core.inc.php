<?php
    ob_start();
    session_start();
    $current_name = $_SERVER['SCRIPT_NAME'];
    //$_SERVER['HTTP_REFERER'] tells the website you are visiting where you came from when you clicked a link to the site
    
    @$http_referer = $_SERVER['HTTP_REFERER'];
     
    
    function log_in(){
        if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id'])){
            return true;
        }
        else{
            return false;
        }
    }
    function mysqli_result($res, $row, $field=0) { 
        $res->data_seek($row); 
        $datarow = $res->fetch_array(); 
        return $datarow[$field]; 
    } 

    function getUserField($field){
        $query = "select `$field` from users where id ='".$_SESSION['user_id']."'";
        global $conn;
        if($query_run = mysqli_query($conn,$query)){
            if($query_result = mysqli_result($query_run,0,$field)){
                return $query_result;
            }
        }
    }

?>