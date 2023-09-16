<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bob extends Model
{
    public function respondTo($message): string
    {

        if (preg_match('/^[A-Z\d\s!]+\?+$/', $message)) {
            return "Calmez-vous, je sais ce que je fais !";
        }

        if (preg_match('/\?\s*$/', $message)) {
            return "Bien sûr.";
        }

        if (preg_match('/^[A-Z\d\s!]+$/', $message)) {
            return "Whoa, calmos !";
        }

        if (trim($message) === "") {
            return "Bien, on fait comme ça !";
        }

        return "Peu importe !";
    }

}
