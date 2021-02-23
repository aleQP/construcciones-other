@extends('layouts.app')
@section('content')
<div id="slider" data-section="home">
	<div class="owl-carousel owl-carousel-fullwidth">
		<!-- You may change the background color here. -->
	    <div class="item" style="background: #352f44;">
	    	<div class="container" style="position: relative;">
	    		<div class="row">
				    <div class="col-md-7 col-sm-7">
		    			<div class="fh5co-owl-text-wrap">
					    	<div class="fh5co-owl-text">
					    		<h1 class="fh5co-lead to-animate">MY TOWER CONSTRUCCIONES</h1>
								<h2 class="fh5co-sub-lead to-animate">"Tu objetivo como empresa no es tener solamente el mejor servicio al cliente sino que sea legendario”.</h3>
					    	</div>
					    </div>
				    </div>
				    <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 iphone-image">
				    	<div class="iphone to-animate-2">
				    		<img src="{{asset('img/1.jpg')}}" alt="construcciones_1" height="450px">
				    	</div>
				    </div>

	    		</div>
	    	</div>
	    </div>
		<!-- You may change the background color here.  -->
	    <div class="item" style="background: #38569f;">
	    	<div class="container" style="position: relative;">
	    		<div class="row">
	    			<div class="col-md-7 col-md-push-1 col-md-push-5 col-sm-7 col-sm-push-1 col-sm-push-5">
		    			<div class="fh5co-owl-text-wrap">
					    	<div class="fh5co-owl-text">
					    		<h1 class="fh5co-lead to-animate">GESTORÍA</h1>
								<h2 class="fh5co-sub-lead to-animate">Estudio técnico especializado para la mejor opción económica de sus obras eléctricas.</h3>
					    	</div>
					    </div>
				    </div>
				    <div class="col-md-4 col-md-pull-7 col-sm-4 col-sm-pull-7 iphone-image">
				    	<div class="iphone to-animate-2"><img src="{{asset('img/3.jpg')}}" alt="construcciones_2" height="450px"></div>
				    </div>

	    		</div>
	    	</div>
	    </div>

	    <div class="item" style="background-image:url(images/slide_5.jpg)">
	    	<div class="overlay"></div>
	    	<div class="container" style="position: relative;">
	    		<div class="row">
	    			<div class="col-md-8 col-md-offset-2 text-center">
	    				<div class="fh5co-owl-text-wrap">
					    	<div class="fh5co-owl-text">
	    						<h1 class="fh5co-lead to-animate">Presencia en toda el área metropolitana.</h1>
								<h2 class="fh5co-sub-lead to-animate">Todo tipo de soluciones ante CFE y obras eléctricas en media y baja tensión.</h3>
								<p class="to-animate-2"><a href="https://www.facebook.com/pg/ConstruccionesMyTwrs/" target="_blank" class="btn btn-primary btn-lg">Visítanos</a></p>
							</div>
						</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>

	</div>
</div>

<div id="fh5co-about-us" data-section="about" style="background:#fbf7f0;">
	<div class="container">
		<div class="row row-bottom-padded-lg" id="about-us">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate">Nuestra empresa</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h3>Somos una empresa de carácter social, que ofrece el servicio público de energía eléctrica, servicio fundamental para el desarrollo de una nación.</h3>
					</div>
				</div>
			</div>
			<div class="col-md-8 to-animate">
				<img src="{{asset('img/8.jpg')}}" class="img-responsive img-rounded " alt="construcciones_3">
			</div>
			<div class="col-md-4 to-animate">
				<h2>Construcciones - MyTwrs</h2>
				<p>Somos una empresa creada con la finalidad de ofrecer el mejor servicio y calidad en obras electromecánicas de media y baja tensión, así como todo tipo de proyectos eléctricos, abarcando todo el territorio nacional y extranjero, vamos con usted de la mano en asesoría, clara y precisa.</p>
				<p>Contamos con experiencia necesaria para Volver realidad sus proyectos, y usted pueda entregar una obra segura y perfecta a sus clientes.</p>
				<p><a href="#" class="btn btn-primary" data-nav-section="features">Nuestros proyectos</a></p>
			</div>
		</div>
		{{-- <div class="row" id="team" style="border: 1px solid blue">
			<div class="col-md-12 section-heading text-center to-animate">
				<h2>Proyectos</h2>
			</div>
			<div class="col-md-12">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-4 text-center to-animate">
						<div class="person">
							<img src="{{asset('img/2.jpg')}}" class="img-responsive img-rounded" alt="Person">
							<h3 class="name">Hospital ISSSTE</h3>
							<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
						</div>
					</div>
					<div class="col-md-4 text-center to-animate">
						<div class="person">
							<img src="{{asset('img/6.jpg')}}" class="img-responsive img-rounded" alt="Person">
							<h3 class="name">Gran Hotel Ciudad de México</h3>
							<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
						</div>
					</div>
					<div class="col-md-4 text-center to-animate">
						<div class="person">
							<img src="{{asset('img/7.jpg')}}" class="img-responsive img-rounded" alt="Person">
							<h3 class="name">Gasolinera pemex</h3>
							<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
</div>

<div id="fh5co-press" data-section="press" style="background:#cdc9c3;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="single-animate animate-press-1">MISIÓN y VISIÓN</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<!-- Press Item -->
				<div class="fh5co-press-item to-animate">
					<div class="fh5co-press-img" style="background-image:url('img/servicios/mision.jpg');">
					</div>
					<div class="fh5co-press-text">
						<h3 class="h2 fh5co-press-title">Misión <span class="fh5co-border"></span></h3>
						<p>Trabajar día a día para cumplir nuestros objetivos y metas, utilizando herramientas actualizadas y de vanguardia para la realización de obras innovadoras y futuras, sin dejar a un lado el capital humano y social.</p>
						<p>A través de la calidad, el compromiso y la puntualidad, para lograr ser reconocidos como empresa líder en obras eléctricas.</p>
					</div>
				</div>
				<!-- Press Item -->
			</div>
			<div class="col-md-6">
				<!-- Press Item -->
				<div class="fh5co-press-item to-animate">
					<div class="fh5co-press-img" style="background-image:url('img/servicios/vision.jpg');">
					</div>
					<div class="fh5co-press-text">
						<h3 class="h2 fh5co-press-title">Visión <span class="fh5co-border"></span></h3>
						<p>Ser líderes en el país en nuestra área de competencia, ejecutando obras de mayor dificultad y envergadura mediante la mejora continua de nuestros procesos de trabajo y especialización del recurso humano y por disponer de infraestructura acorde con los requerimientos.</p>
						<p>GRUPO SEIVOC SA DE CV, procurará ser una empresa única, destacada y reconocida, diferenciándose por reunir un grupo humano altamente calificado, honorable y por lograr la satisfacción del cliente a través de un enfoque integral de sus necesidades.</p>
					</div>
				</div>
				<!-- Press Item -->
			</div>
		</div>
	</div>
</div>

<div id="fh5co-features" data-section="features" style="background:#fbf7f0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="single-animate animate-features-1">Proyectos</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 single-animate animate-features-2">
						<h3>Estos son algunos de nuestros mejores proyectos realizados a través del tiempo.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-bottom-padded-sm">
			<div class="col-md-4 text-center to-animate">
				<div class="person">
					<img src="{{asset('img/2.jpg')}}" class="img-responsive img-rounded " alt="Person">
					<h3 class="name">Hospital ISSSTE</h3>
					<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
				</div>
			</div>
			<div class="col-md-4 text-center to-animate">
				<div class="person">
					<img src="{{asset('img/6.jpg')}}" class="img-responsive img-rounded" alt="Person">
					<h3 class="name">Gran Hotel Ciudad de México</h3>
					<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
				</div>
			</div>
			<div class="col-md-4 text-center to-animate">
				<div class="person">
					<img src="{{asset('img/7.jpg')}}" class="img-responsive img-rounded" alt="Person">
					<h3 class="name">Gasolinera pemex</h3>
					<p>Nullam non lacinia orci, at feugiat nibh. Ut feugiat facilisis libero ut tristique. Cras eget leo et quam condimentum accumsan vitae id eros. Nunc eu odio id neque sollicitudin faucibus.</p>
				</div>
			</div>

		</div>
	</div>
</div>

<div id="fh5co-our-services" data-section="services" style="background:#cdc9c3;">
	<div class="container">
		<div class="row row-bottom-padded-sm">
			<div class="col-md-12 section-heading text-center">
				<h2 class="to-animate">Nuestros servicios</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h3>Obras de gran magnitud en media tensión: plazas comerciales, fabricas, gasolineras, tiendas comerciales, hoteles, hospitales.</h3>
						<h3>Obras en baja tensión: conjuntos habitacionales, casas residenciales, departamentos.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="box to-animate">
					{{-- <div class="icon colored-1"><span><i class="icon-mustache"></i></span></div> --}}
					<img src="{{asset('img/servicios/1.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Soluciones eficaces y oportunas</h3>
					<p>Entregar soluciones eficaces y oportunas a nuestros clientes.</p>
				</div>
				<div class="box to-animate">
					{{-- <div class="icon colored-4"><span><i class="icon-heart"></i></span></div> --}}
					<img src="{{asset('img/servicios/2.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Altos estándares de calidad y seguridad</h3>
					<p>Garantizar que la atención que se proporciona a los usuarios cumple con los estándares internacionales de calidad y los protege de riesgos inherentes.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box to-animate">
					{{-- <div class="icon colored-2"><span><i class="icon-screen-desktop"></i></span></div> --}}
					<img src="{{asset('img/servicios/3.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Soporte por personal altamente calificado</h3>
					<p>	Equipo de trabajo altamente calificado y motivado.</p>
				</div>
				<div class="box to-animate">
					{{-- <div class="icon colored-5"><span><i class="icon-rocket"></i></span></div> --}}
					<img src="{{asset('img/servicios/4.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Equipos en infraestructura acorde a las necesidades de los clientes</h3>
					<p>	Mejorar las condiciones físicas tiene una relación directa con el desarrollo de la sociedad en nuestros clientes.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box to-animate">
					{{-- <div class="icon colored-3"><span><i class="icon-eye"></i></span></div> --}}
					<img src="{{asset('img/servicios/5.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Competitivos en las áreas de ingeniería en todos sus niveles</h3>
					<p>Servicios que cumplan con la calidad de los mercados, precios y maximizando los rendimientos.</p>
				</div>
				<div class="box to-animate">
					{{-- <div class="icon colored-6"><span><i class="icon-user"></i></span></div> --}}
					<img src="{{asset('img/servicios/6.jpg')}}" class="img-fluid" alt="..." height="150px">
					<h3>Dirección de proyectos de mediano y gran tamaño negocio de las empresas.</h3>
					<p>	Aplicación de conocimientos, habilidades, herramientas y técnicas de calidad.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-pricing" data-section="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2 class="single-animate animate-pricing-1">Contáctanos</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext single-animate animate-pricing-2">
						<h3>Cualquier duda o comentario no dudes en contactarnos por llamada, mensaje o correo electrónico. Nosotros te atenderemos.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 0px;">
            <div class="col-md-12">
                <div class="well well-sm">
                	<form method="POST" action="{{ route('send.comment') }}" class="form-horizontal">
                		@csrf
                        <fieldset>
                            <legend class="text-center header">Contáctanos</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre completo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-building"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Correo electrónico" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="company" type="text" placeholder="Compañia" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="description" name="description" placeholder="Deja aquí tu mensaje. Cuando lo recibamos te daremos pronta respuesta." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
	</div>
</div>

@include('includes.footer')


@endsection

