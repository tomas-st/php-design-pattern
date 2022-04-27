<?php

namespace MyApp\Creational\AbstractFactory;

/**
 * unabhängigkeit von Erzeugung von Produkten
 * system mit ein oder mehreren Proudktfamilien konfigurieren
 * Gruppe von Produkten gemeinsam erzeugen
 * wenn in einer Klassenbibliothek die Schnittstelle von Produkten ohne deren Implementierung bereitgestellt werden sollen.
 * Bsp: Anwendung einer graf. Benutzeroberfläche mit unterschiedlichen Oberflächenmotiven
 */
class AbstractCarFactory
{
    public function __construct()
    {
        print_r("Car Constructor called");
        print_r("<br>");
    }

    public function createBlueCar()
    {
        return "blue";
    }
}
