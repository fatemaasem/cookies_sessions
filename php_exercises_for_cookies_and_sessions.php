<?php 

function set_cookie_named_and_value_time($cookieName ,$cookieValue,$expirationTime ){//time as string contain number of hour
    $timeInSecond='';
    if($expirationTime[0]>='1'&&$expirationTime[0]<='9'){echo 'yes';
        $timeInSecond.=$expirationTime[0];
        if($expirationTime[0]=='1'){
            if($expirationTime[1]>='0'&&$expirationTime[1]<='9')
            $timeInSecond.=$expirationTime[1];}
        else if($expirationTime[0]=='2'){
            if($expirationTime[1]>='0'&&$expirationTime[1]<='4') $timeInSecond.=$expirationTime[1];}
        }
        echo  $timeInSecond."<br>";
        $timeInSecond=(int)$timeInSecond+time();
        setcookie($cookieName ,$cookieValue,$timeInSecond);
    }

  
   function retrieve_and_display_the_value_of_cookie($cookieName ){
    if(isset($_COOKIE[$cookieName]))echo $_COOKIE[$cookieName]."<br>";
    else echo "Cookie 'username' not found.";
    }
    function The_last_time_the_session_was_accessed_by_the_user(){
session_start();
if(isset($_SESSION['last_visit'])){
    echo date('Y-m-d H:i:s',  $_SESSION['last_visit'])."<br>";
   
    $_SESSION['last_visit']=time();
}
else{
    $_SESSION['last_visit']=time();
    echo 'The session is start now \n';
}
    }
    The_last_time_the_session_was_accessed_by_the_user();
?>