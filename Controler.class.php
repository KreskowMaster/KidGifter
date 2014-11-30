<?php

class Controler {

    public function showHome() {
        
        $model = new Model(DBHOST, DBPORT, DBUSERNAME, DBPASSWORD, DBNAME);
        
        
        
        
        include './home.php';
    }

}
