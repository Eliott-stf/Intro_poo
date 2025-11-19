<?php

/**
 * Interface IWriterDevice
 * Une interface est une espece de contrat qui oblige une classe a posséder les méthodes de cette interface 
 * "a implementer les méthodes" 
 */

namespace App;

interface IWriterDevice
{
    public function write( string $message ): void;
}