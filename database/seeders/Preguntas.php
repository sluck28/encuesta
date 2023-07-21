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
                'question' => '¿A qué rango de edad perteneces?',
                'options' => ['18-25', '26-35', '36-45', '46-55', '56-65', '65+']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cuál es tu genero?',
                'options' => 'Respuesta Libre'
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Àrea en la que te desenvuelves actualmente:', 'options' => ['Administración', 'Almacén', 'Compras', 'Dirección', 'Diseño', 'Importaciones', 'Logística', 'Marketing', 'Operaciones', ' Recursos Humanos', 'Tecnología', 'Ventas']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cuánto tiempo llevas trabajando en la organización?',
                'options' => [
                    'Menos de 6 meses',
                    'De 6 meses a 1 año',
                    'De 1 a 2 años',
                    '3 a 4 años',
                    '5 a 6 años', 'Mas de 7 años
                '
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿A qué empresa perteneces?',
                'options' => [
                    'BH México',
                    'Bh Cancún '
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?',
                'options' => [
                    'Siempre',
                    'Casi siempre',
                    'Algunas veces',
                    'Casi nunca ',
                    'Nunca'
                ]
            ]
        );


        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué es lo que más te gusta de trabajar en BH TRADE MARKET? (Puedes seleccionar dos opciones)',
                'options'=>['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos',
                ]

            ]
        );


        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)',
                'options'=>['Compañeros de trabajo',
                'Instalaciones',
                'Liderazgo',
                'Tareas que realiza',
                'Gratificaciones/ pagos']
                
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)',
                'options'=>['Muy buena ',
                'Mala ',
                'Regular ',
                'Buena ',
                'Excelente']
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones',
                'options' =>['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca'
                ]

            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Las actividades que desempeñas en tu puesto son de tu agrado?',
                'options'=>['Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?',
                'options'=>['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo calificarías las instalaciones de tu organización?',
                'options'=>['Muy malas',
                'Malas',
                'Regulares',
                'Buenas ',
                'Excelentes']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Qué te gustaría mejorar en cuanto a lideres, herramientas e instalaciones de BH TRADE MARKET?',
                'options' => 'Respuesta libre'                
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente',
                'options'=>['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ',
                'Nunca']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?',
                'options' =>['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca 
                ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te sientes comprometido con el éxito de tu empresa?',
                'options'=>['Siempre',
                'Casi siempre',
                'Algunas veces',
                'Casi nunca ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Se reconocen los logros de los colaboradores en tu empresa?',
                'options'=>['Nada de acuerdo',
                'Poco de acuerdo ',
                'Moderadamente de acuerdo',
                'Bastante de acuerdo',
                'Totalmente de acuerdo
                ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?',
                'options'=>[
                    'Si',
                'No',
                'No se '
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?',
                'options' =>['Menos de 1 año',
                '1 año',
                '2 años ',
                'Mas de 2 años']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo es tu relación con tus compañeros de trabajo?',
                'options'=>['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?',
                'options'=>['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente'
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?',
                'options'=>['Siempre ',
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca'
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => 'Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?',
                'options'=>['Nada motivante',
                'Poco motivante ',
                'Moderadamente motivante ',
                'Muy motivante ',
                'Extremadamente motivante
                ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?',
                'options'=>['Siempre' ,
                'Casi siempre ',
                'Algunas veces ',
                'Casi nunca ',
                'Nunca
                ']
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tus compañeros de trabajo?',
                'options'=>['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre']
                
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Cómo es la relación con tu jefe?',
                'options'=>['Muy mala',
                'Mala',
                'Regular',
                'Buena',
                'Excelente']                
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Sientes que puedes confiar en tu jefe?',
                'options'=>['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
                ]
            ]
        );

        DB::table('preguntas')->insert(
            [
                'question' => '¿Te sientes escuchado por la Dirección de BH TRADE MARKET? ',
                'options'=>['Nunca',
                'Casi Nunca ',
                'Algunas veces',
                'Casi siempre ',
                'Siempre'
                ]
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Has tenido algún problema con tus compañeros de trabajo?',
                'options'=>['Si', 'No ']
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces la misión y visión de BH TRADE MARKET?',
                'options' =>['Si ',
                'No ',
                'No tenemos']
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces el código de ética de BH TRADE MARKET?',
                'options'=>['Si ',
                'No ',
                'No tenemos'
                ]
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces los valores organizacionales de BH TRADE MARKET?',
                'options'=>['Si',
                'No ',
                'No tenemos']
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Conoces la línea de denuncias internas de BH TRADE MARKET?',
                'options'=>['Si', 
                'No',
                'No tenemos']
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Crees que se comete algún tipo de injusticia en tu trabajo?',
                'options'=>['Si', 
                'No' ]
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?',
                'options'=>['Si',
                'No'
                ]
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Te gustaría compartirnos la situación de la cual fuiste testigo que vayan en contra de nuestros valores o colaboradores?',
                'options'=>['Si espacio abierto',
                'NO '
                ]
            ]
        );
        DB::table('preguntas')->insert(
            [
                'question' => '¿Te gustaría darnos algún comentario adicional? ',
                'options'=>'Respuesta abierta '
            ]   
        );
    }
}
