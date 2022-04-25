<?php

namespace sf;

class DB {

    /**
     * Variable which holds instanciated database connection
     *
     * @var DB
     */
    private static $instance = null;
    
    /**
     * Make Constructor private
     */
    private function __construct () {
        print('constructor is called');
    }

    /**
     * Singleton getInstance function
     *
     * @return DB
     */
    public static function getInstance() {
        if (self::$instance ==null) {
            print('instanciating db connection');
            self::$instance = new DB();
        }

        print('returning db connection');
        return self::$instance;

    }
}