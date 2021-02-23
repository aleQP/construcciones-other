<?php

use Illuminate\Database\Seeder;
use App\Comentario;
use App\About;


class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Comentario::class, 5)->create();


        $about = About::where('id', '1')->first();
        if($about)
        	$about->delete();

    	$about = About::create([
    		'somos' =>
    			'Somos una empresa creada con la finalidad de ofrecer el mejor servicio y calidad en obras eléctromecanicas de media y baja tención, asi como todo tipo de proyectos electricos, abarcando todo el territorio nacional y extranjero, vamos con usted de la mano en asesoria, clara y precisa. Contamos con experiencia necesaria para Volver realidad sus proyectos , y usted pueda entregar una obra segura y perfecta a sus clientes. ',

            'mision' =>
            'Trabajar día a día para cumplir nuestros objetivos y metas, utilizando herramientas actualizadas y de vanguardia para la realización de obras innovadoras y futuras, sin dejar aun lado el capital humano y social. A través de la calidad, el compromiso y la puntualidad, para lograr ser reconocidos como empresa líder en obras eléctricas.',

            'vision' =>
            'Ser líderes en el país en nuestra área de competencia, ejecutando obras de mayor dificultad y envergadura mediante la mejora continua de nuestros procesos de trabajo y especialización del recurso humano y por disponer de infraestructura acorde con los requerimientos. GRUPO SEIVOC SA DE CV, Procurará ser una empresa única, destacada y reconocida, diferenciándose por reunir un grupo humano altamente calificado, honorable y por lograr la satisfacción del cliente a través de un enfoque integral de sus necesidades.',

            'ofrecemos' =>
            'Entregar soluciones eficaces y oportunas a nuestros clientes, con altos estándares de calidad y seguridad, soportada por personal altamente calificado y equipado en infraestructura acorde a las necesidades de los clientes; lo que nos permite ser competitivos en la áreas de ingeneria en todos sus niveles y dirección de proyectos de mediano y gran tamaño negocio de las empresa. ',
    	]);
    }
}
