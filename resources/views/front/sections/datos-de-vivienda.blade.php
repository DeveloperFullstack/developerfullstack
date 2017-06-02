<form action="{{ $section->getOnPostActionString() }}" method="POST" id="register-form">
{{ csrf_field() }}
  <section class="section" id="{{ $section->getSlug() }}">
    <header class="section-header">
      <div class="container text-center">
        <h1>Datos de vivienda</h1>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">
        @include('fields/text', ['field' => $section->getField('zip_code')])
        <div class="grid-list grid-list-2 grid-list-1-xs">
          <article class="grid-list-item">
            @include('fields/select', ['field' => $section->getField('country_id')])
          </article>
          <article class="grid-list-item">
            @include('fields/select', ['field' => $section->getField('state_id')])
          </article>
          <article class="grid-list-item">
            @include('fields/text', ['field' => $section->getField('neighborhood')])
          </article>
          <article class="grid-list-item">
            @include('fields/text', ['field' => $section->getField('city')])
          </article>
          <article class="grid-list-item">
            @include('fields/text', ['field' => $section->getField('street')])
          </article>
          <article class="grid-list-item">
            @include('fields/text', ['field' => $section->getField('interior')])
          </article>
        </div>
      </div>
    </div>
    <footer class="section-footer">
      <div class="container-sm">
        <button type="submit" class="btn btn-inverse btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></button>
      </div>
    </footer>
  </section>
</form>
