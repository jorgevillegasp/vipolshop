<?php

use Laravel\Jetstream\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Jetstream Stack
    |--------------------------------------------------------------------------
    |
    | Este valor de configuración informa a Jetstream qué "pila" será
    | usando para su aplicación. En general, este valor se establece para usted
    | durante la instalación y no será necesario cambiarlo después.
    |
    */

    'stack' => 'livewire',

    /*
    |--------------------------------------------------------------------------
    | Caracteristicas
    | ------------------------------------------------- -------------------------
    |
    | Algunas de las funciones de Jetstream son opcionales. Puede desactivar las funciones
    | eliminándolos de esta matriz. Eres libre de eliminar solo algunos
    | estas características o incluso puede eliminarlas todas si es necesario.
    |
    */

    'features' => [
        Features::profilePhotos(),
        Features::api(),
        // Features::teams(),
    ],

];
