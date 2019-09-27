<?php

class Connection {
    public static function make(
        $connection = 'mysql:host=127.0.0.1;dbname=tasks',
        $user = 'debian-sys-maint',
        $password = 'pJwHgTEAdNJipLlU' ) {
        try {
            return new PDO($connection, $user, $password);
            // return new PDO(
            //     $config['database.connection'], 
            //     $config['database.user'], 
            //     $config['database.password']);
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
