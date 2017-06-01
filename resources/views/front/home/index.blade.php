@extends('layouts.app')

@section('head-link')
  <link href="{{ asset('css/front/home/index.css') }}" rel="stylesheet">
@endsection

@section('logo-img')
  <a href="#" class="logo">
    <img src="/img/logo_devfs-light.png" alt="DevFS">
  </a>
@endsection

@section('content')
  <section class="section hero-unit">
    <div class="StripeBackground accelerated stripes-header">
      <div class="stripe s0"></div>
      <div class="stripe s1"></div>
      <div class="stripe s2"></div>
      <div class="stripe s3"></div>
      <div class="stripe s4"></div>
      <div class="stripe s5"></div>
      <div class="stripe s6"></div>
    </div>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h5>Emprendedores que programan</h5>
            <h1>Bienvenido a DeveloperFullstack, un programa presencial donde <strong>te enseñamos a utilizar las tecnologías que las startups necesitan</strong></h1>
            <nav class="cta-nav">
              <a href="#aplicar" class="btn btn-inverse btn-lg">Aplicar</a>
              <a href="#descripcion-del-programa" class="btn btn-secondary btn-lg">Conoce el programa</a>
            </nav>
          </div>
          <div class="col-sm-5 hidden-md-down">
            <div class="img-wrapper"><div class="img"></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="resumen">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 overview-item">
            <div class="img-wrapper">
              <i class="icon-calendar-31"></i>
            </div>
            <div class="description">
              <h5>del 4 de Septiembre 2017<br>al 4 de Diciembre 2017</h5>
              <p>con clases los lunes y miércoles<br>de 16:00 a 19:00 horas</p>
            </div>
          </div>
          <div class="col-sm-4 overview-item">
            <div class="img-wrapper">
              <i class="icon-map"></i>
            </div>
            <div class="description">
              <h5>4º Norte</h5>
              <p>Z. 4 - Guatemala</p>
            </div>
          </div>
          <div class="col-sm-4 overview-item">
            <div class="img-wrapper">
              <i class="icon-receipt"></i>
            </div>
            <div class="description">
              <h5>Q. 5957</h5>
              <p>Incluye acceso a las aulas, materiales de estudio y acceso al código fuente de los proyectos</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>

  <section class="section" id="descripcion-del-programa">
    <header class="section-header">
      <div class="container">
        <h2>Descripción del programa</h2>
        <h3>DevFS es la entrada al entorno de desarrollo global</h3>
        <p>Este programa convoca a jóvenes de entre 15 y 27 años interesados en tecnologías de desarrollo web y móvil y que tengan tiempo para asistir a los cursos los lunes y miércoles de 16:00 a 19:00 horas del 4 de Septiembre 2017 al 4 de Diciembre 2017</p>
      </div>
    </header>
    <div class="section-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 computer-bg-wrapper">
            <div class="computer-bg"></div>
          </div>
          <div class="col-sm-6 skills-list">
            <h4>Al terminar el programa, sabrás:</h4>
            <ul>
              <li><i class="icon-satellite"></i>Utilizar herramientas para trabajar desde donde quieras</li>
              <li><i class="icon-chip-x86"></i>Comprender los términos tecnológicos que se utilizan a nivel global</li>
              <li><i class="icon-file-code"></i>Hacer tu código más eficiente aprendiendo patrones de diseño</li>
              <li><i class="icon-smartphone-embed"></i>Trabajar con el código de otros developers</li>
              <li><i class="icon-bug"></i>Reducir la deuda técnica de tus proyectos</li>
              <li><i class="icon-new-tab"></i>Crear tus propios prototipos, buscando tus propias soluciones</li>
            </ul>
            <nav class="cta-nav">
              <a href="#aplicar" class="btn btn-inverse btn-lg">Aplicar</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>

  <section class="section" id="necesidades">
    <div class="stripes">
      <div class="stripe s1"></div>
      <div class="stripe s2"></div>
    </div>
    <header class="section-header">
      <div class="container">
        <div class="__icon-wrapper"><i class="icon-chart-growth"></i></div>
        <div class="text-wrapper">
          <h2>¿Qué necesitan las startups?</h2>
          <h5>DeveloperFullstack te prepara para enfrentarte a cualquier tecnología, la imaginación es el límite</h5>
        </div>
      </div>
    </header>
    <div class="section-content">
      <div class="container">
        <ul class="grid-list grid-list-2 grid-list-1-xs startups-needs-list">
          <li><span>Developers altamente responsivos</span> para ejecutar cambios que le permitan llegar a su visión de mediano y largo plazo</li>
          <li><span>Alta capacidad de innovación</span>. Poder adoptar nuevas tecnologías de forma ágil representa una ventaja competitiva</li>
          <li><span>Comunicación técnica efectiva</span> entre el equipo de desarrollo, las necesidades del negocio y del usuario</li>
          <li><span>Centralización</span> de los procesos de la organización</li>
          <li><span>Optimización de los recursos económicos de la compañía</span>. Inversión concreta sobre los verdaderas necesidades</li>
          <li>
            <nav class="cta-nav">
              <a href="#aplicar" class="btn btn-secondary btn-block btn-lg">Aplicar al programa</a>
            </nav>
          </li>
        </ul>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>

  <section class="section" id="tecnologias">
    <header class="section-header hidden-sm-up"></header>
    <div class="section-content">
      <div class="logos">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="logo-grid"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 push-sm-6">
            <h2>¿Qué tecnologías utilizarás?</h2>
            <h3>Las que pide el mercado (y cumplan los objetivos)</h3>
            <p>De acuerdo con el <a href="https://insights.stackoverflow.com/survey/2017" target="_blank" rel="noopener">StackExchange Developer Survey 2017</a>, éstas son las tecnologías que tienen más y mejores ofertas de empleo y oportunidades</p>
            <div class="img-wrapper">
              <img src="/img/correlated-technologies.jpg" alt="correlated technologies">
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>

  <section class="section" id="programa">
    <header class="section-header">
      <div class="container text-center">
        <h2>Distribución del programa</h2>
        <h5>Las clases son presenciales y se imparten los días Lunes y Miércoles de 16:00 a 19:00 horas<br>En ocasiones será requerido que estudies y completes proyectos de manera extra-curricular <sup>*</sup></h5>
      </div>
    </header>
    <div class="section-content">
      <div class="container-xxl">
        <div class="grid-list grid-list-4 grid-list-3-md grid-list-2-sm grid-list-1-xs schedule-cards-list">
          @foreach ($schedule as $card)
            <article class="grid-list-item schedule-card">
              <div>
                <div class="top">
                  <div class="details">
                    <span class="month">{{ $card['month'] }}</span>
                    <span class="days">{{ $card['days'] }}</span>
                  </div>
                </div>
                <ul class="content">
                  @foreach ($card['topics'] as $topic)
                    <li>{{ $topic }}</li>
                  @endforeach
                </ul>
              </div>
            </article>
          @endforeach
          <article class="grid-list-item schedule-card">
            <div>
              <nav class="cta-nav">
                <a href="#aplicar" class="btn btn-info btn-block btn-lg">Aplicar al programa</a>
              </nav>
            </div>
          </article>
        </div>
      </div>
    </div>
    <footer class="section-footer">
      <div class="container text-white text-left">
        <p><sup>*</sup> El material didáctico y recursos extra-curriculares están incluídos en la inscripción</p>
      </div>
    </footer>
  </section>

  <section class="section" id="quien">
    <header class="section-header">
      <div class="container text-center">
        <h6>¿Y quién será el instructor?</h6>
        <h2>Este patojo</h2>
        <i class="icon-chevron-down"></i>
      </div>
    </header>
    <div class="section-content">
      <div class="container">
        <div class="bio-wrapper">
          <div>
            <div class="left">
              <div class="badge"><img src="/img/logo_devfs-shadow.png" alt="DevFS Badge"></div>
              <div class="img-wrapper"></div>
            </div>
            <div class="right">
              <div class="content">
                <h3>Gustavo Ibarra</h3>
                <p>Tiene 6 años de experiencia programando en alrededor de 4 mercados diferentes: Perú, Canadá, México e Inglaterra; para diferentes compañías y proyectos que varían entre fintech, educación, computer science y salud.</p>
                <p>Ahora viene a la ciudad de Guatemala con la intención de compartir lo que ha aprendido y formar equipos de desarrollo ágiles.</p>
                <nav class="cta-nav">
                  <a href="http://soygus.com" rel="noopener" target="_blank" class="btn btn-secondary">Conoce su trabajo</a>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="aplicar">
    <header class="section-header">
      <div class="container text-center text-white">
        <h2>¿Estás listo para darle un giro a tu carrera?</h2>
        <h3>Comienza por registrarte, después contesta un breve formulario</h3>
      </div>
    </header>
    <div class="section-content">
      <div class="container-sm">
        <form action="{{ $registerForm->getOnPostActionString() }}" method="POST" id="register-form">
          {{ csrf_field() }}

          @include('fields.text', ['field' => $registerForm->getField('email')])

          <button type="submit" class="btn btn-inverse btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></button>
        </form>
      </div>
    </div>
    <footer class="section-footer">
      <div class="container text-center text-white normalize-text">
        <p>{{ date('Y') }}. &copy; DeveloperFullstack.com</p>
      </div>
    </footer>
  </section>
@endsection


@section('footer-script')
  <script>
    (function(){
      @if ($errors->has('email'))
        document.querySelector('[name=email]').focus();
      @endif
    })();
  </script>
@endsection















