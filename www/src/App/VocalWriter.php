<?php

namespace App;

class VocalWriter implements IWriterDevice
{
    private string $spoken_text;

    public function acquireVoiceMessage(): string
    {
        //Imaginons le micro qui récupère et traduit en texte la voie
        return 'Bonjour je te parle';
    }

    public function sendToScreen(string $message): void
    {
        printf(
            '<span style ="color:black;font-family:monospace">%s</span>',
            $message
        );

    }    

    public function write (string $message ): void
    {
        $this->sendToScreen($message);
    }
}