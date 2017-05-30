<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $schedule = [
        [
            'month' => 'Septiembre 2017',
            'days' => '4 y 6 de 16:00 a 19:00 hrs',
            'topics' => [
                'Introducción',
                'Uso de los recursos y material didáctico',
                'Setup de ambientes de desarrollo'
            ],
        ],
        [
            'month' => 'Septiembre 2017',
            'days' => '11 y 13 de 16:00 a 19:00 hrs',
            'topics' => [
                'Elevator pitch',
                'Selección de proyectos',
                'Presentación al equipo de diseño',
            ],
        ],
        [
            'month' => 'Septiembre 2017',
            'days' => '18 y 19 de 16:00 a 19:00 hrs',
            'topics' => [
                'Selección de tecnologías',
                'Asignación de equipos',
                'Introducción a Docker',
                'Setup de máquinas virtuales',
            ],
        ],
        [
            'month' => 'Septiembre 2017',
            'days' => '25 y 27 de 16:00 a 19:00 hrs',
            'topics' => [
                'Introducción a CLI',
                'Introducción a GIT',
                'Introducción a GitHub',
            ],
        ],
        [
            'month' => 'Octubre 2017',
            'days' => '2 y 4 de 16:00 a 19:00 hrs',
            'topics' => [
                'Maquetación en HTML',
                'Estructura de recursos del frontend',
            ],
        ],
        [
            'month' => 'Octubre 2017',
            'days' => '9 y 11 de 16:00 a 19:00 hrs',
            'topics' => [
                'Estructura de rutas',
                'Estructura de controladores',
            ],
        ],
        [
            'month' => 'Octubre 2017',
            'days' => '16 y 18 de 16:00 a 19:00 hrs',
            'topics' => [
                'Introducción a RDBMS y NoSQL',
                'Creación de migraciones',
                'Creación de seeders'
            ],
        ],
        [
            'month' => 'Octubre 2017',
            'days' => '23 y 25 de 16:00 a 19:00 hrs',
            'topics' => [
                'Creación de modelos',
                'Creación de entidades y adaptadores',
            ],
        ],
        [
            'month' => 'Octubre/Nov 2017',
            'days' => '30 y 1 de 16:00 a 19:00 hrs',
            'topics' => [
                'Introducción a CRUD',
                'Introducción a REST',
            ],
        ],
        [
            'month' => 'Noviembre 2017',
            'days' => '6 y 8 de 16:00 a 19:00 hrs',
            'topics' => [
                'Validadores',
                'HTTP',
                'Requests y Responses'
            ],
        ],
        [
            'month' => 'Noviembre 2017',
            'days' => '13 y 15 de 16:00 a 19:00 hrs',
            'topics' => [
                'Automatización',
                'Builds',
                'Deployments',
            ],
        ],
        [
            'month' => 'Noviembre 2017',
            'days' => '20 y 22 de 16:00 a 19:00 hrs',
            'topics' => [
                'Integración contínua',
            ],
        ],
        [
            'month' => 'Noviembre 2017',
            'days' => '27 y 29 de 16:00 a 19:00 hrs',
            'topics' => [
                'Resolución de conflictos con GIT',
            ],
        ],
        [
            'month' => 'Diciembre 2017',
            'days' => '4 y 6 de 16:00 a 19:00 hrs',
            'topics' => [
                'Recap',
                'Demo day',
                'Graduación',
            ],
        ],

    ];

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = $this->schedule;

        return view('front/landing/home', compact('schedule'));
    }
}