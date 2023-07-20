<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Preguntas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('preguntas')->insert(
            [
                'question' => '¿A qué rango de edad perteneces?'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cuál es tu genero?'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿A qué empresa perteneces?'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?'

            ]
        );


        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en BH TRADE MARKET? (Puedes seleccionar dos opciones)'

            ]
        );


        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de BH TRADE MARKET?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?'

            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de BH TRADE MARKET? '

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces la misión y visión de BH TRADE MARKET?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces el código de ética de BH TRADE MARKET?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de BH TRADE MARKET?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de BH TRADE MARKET?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?'

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? '

            ]
        );
    }
}
