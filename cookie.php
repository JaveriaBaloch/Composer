<?php
setcookie('visited',true);

if(isset($_COOKIE['visited'])){
    echo "<h1>Welcome Back!</h1>";
    setcookie('visited',false,time()-3000000);
}else{
    echo "<h1>Welcome</h1>";
}

///removing cookie