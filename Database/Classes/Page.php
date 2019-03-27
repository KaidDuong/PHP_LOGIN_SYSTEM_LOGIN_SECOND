<?php
class Page{
    //Force the user to logged in or redirect
    public static function ForceLogin(){
        if (isset($SESSION['user_id'])){
            //the user is allowed here
        }else{
            //not allowed here
            // redirect to login pagr
            header("Location:../Source/Login.php");
            exit;
        }
    }
    //Force the user to redirect
    public  static function ForceDashboard()
    {
        if(isset($_SESSION['user_id'])){
            // the user is allower here but redirect anyway
            header("Location:../Source/Dashboard.php");
            exit;
        }else{
            //the user is not allowed here
        }
    }
}
?>