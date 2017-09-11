<?php

namespace App\UIApplication;

class UIApplication_1 extends AbstractUIApplication
{
    public $sections = [
        \App\Section\InformacionPersonal::class,
        \App\Section\DatosDeVivienda::class,
    ];
}
