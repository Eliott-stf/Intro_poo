<?php

namespace App;

class ScreenManager
{
    public static function display( IWriterDevice $device, string $message )
    {
        $device->write( $message );
    }
}