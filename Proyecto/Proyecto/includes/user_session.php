<?php
class UserSession{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($ids){
        $_SESSION['ids'] = $ids;
    }
    public function getCurrentUser(){
        return $_SESSION['ids'];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>