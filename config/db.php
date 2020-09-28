<?php
    class Connect{
        public static function connection(){
            $cnx = new mysqli("localhost", "root", "", "Villareal");// DEPRECATED
            return $cnx;
        }
    }
?>