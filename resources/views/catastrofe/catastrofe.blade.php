@extends('layouts.app')

 @section('scripts')
  @parent
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
   <script type="text/javascript">
  $(function() {
          $( "#datepicker" ).datepicker( "option", "dateFormat", 'dd-mm-yy');
  });
  </script>
@stop


@section('styles')
    @parent
    <style>
        
.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
    padding: 10px 40px 60px;
    margin: 10px 0px 60px;
    border: 1px solid GREY;
    }
    
</style>
@stop
@section('content')



<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Ingresar Catastrofe</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label class="col-md-4 control-label" for="selectbasic">Tipo Catastrofe</label>
                      <div class="col-md-4">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                          <option value="1">Option one</option>
                          <option value="2">Option two</option>
                        </select>
                      </div>
                    </div>







                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Lugar" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Fecha Inicio" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Fecha Termino" required>
                    </div>

                    <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de la catastrofe</label>
                            <input name="fecha" id="datepicker" class="form-control" placeholder="Elegir" required>
                    </div>

                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Descripcion" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>
@endsection


