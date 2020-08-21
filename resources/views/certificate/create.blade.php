@extends('core.base')
@section('content')

  <h2>Gerar Certificado</h2>

  <div id="wrapper">
     <div class="main-content">
       <div class="card-content">
          @if( isset($errors) && count($errors) > 0 )
              <div class="alert alert-danger">
                  @foreach( $errors->all() as $error )
                      <p>{{$error}}</p>
                  @endforeach
              </div>
          @endif

       <form action="{{route('generate.certificate')}}">

         <!-- Aluno -->
          <div class="row">
            <div class="col-md-12">
              <div class="form-group col-lg-6 col-xs-12">
                  <label for="nome" class="color-blue">Nome do Aluno:</label>
                  <input type="text" name="nome" id="nome"
                  class="form-control"/>
              </div>
            </div>
          </div>

          <!-- Curso -->
           <div class="row">
             <div class="col-md-12">
               <div class="form-group col-lg-6 col-xs-12">
                   <label for="curso" class="color-blue">Curso:</label>
                   <input type="text" name="curso" id="curso"
                   class="form-control"/>
               </div>
             </div>
           </div>

           <div class="col-md-12">
              <button class="btn btn-success" type="submit" data-toggle="tooltip" title="Cadastrar" > <span>Visualizar</span></button>
           </div>
     </form>
     </div>
  </div>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
    $(document).ready(function () {
      $('.data').datepicker({
        format: 'mm/dd/yyyy'
      });
    });
</script>
@endsection
