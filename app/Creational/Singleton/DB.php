<?php

namespace MyApp\Creational\Singleton;

/**
 * Bewertung: 
 * + Automatisches Lazy loading 
 * + schnell und unkompliziert
 * + kann abgeleitet werden, um Funktionen hinzuzufügen
 * - kann bei übermäßiger Verwendung zu prozeduralem Code führen
 * - erschwert somit Wartung
 * Verwendung:
 * - Druckaufträge
 * - Logging
 * - Cache und Treiber
 */
class DB
{

    /**
     * Variable which holds instanciated database connection
     *
     * @var DB
     */
    private static ?DB $instance = null;

    /**
     * Make Constructor private
     */
    private function __construct()
    {
        print_r("constructor is called");
        print_r("<br />");
    }

    /**
     * Singleton getInstance function
     *
     * @return DB
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            print_r("instanciating db connection");
            print_r("<br />");
            self::$instance = new DB();
        } else {
            print_r("instanciating not necessary");
            print_r("<br />");
        }

        print_r("returning db connection");
        print_r("<br />");
        return self::$instance;
    }
}
