<!-- Modal -->
<div id="ModalAcceso" data-backdrop="static" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header" style="background: #3c8dbc; color: white">
        <h3 class="modal-title"><b>Enviar Acceso Proveedor</b></h3>
      </div> 

           

      <div class="modal-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 


                {!!Form::open(['route'=>'envio.store', 'method'=>'POST','url'=>'mailing','files'=>'true'])!!}
         
              <div class="form-group">

      

                  {!!Form::label('proveedor','Proveedor:')!!}
                   <input type="text" class="form-control" name="proveedor" id="proveedor" readonly="readonly" value="{{$pro->proveedor}}">
                  <br>
                  
                  {!!Form::label('correo','Correo:')!!}
                  <input type="text" class="form-control" name="correo" id="correo" readonly="readonly" value="{{$pro->correo}}">
                  <br>

                  {!!Form::label('password','Password:')!!}
                  <input type="text" class="form-control" name="correo" id="correo" readonly="readonly" value="">
                  <br>
                  
                   <!--?php $prov = DB::select('SELECT proveedor.id, proveedor FROM proveedor, prov_cat,categoria WHERE proveedor.id=prov_cat.id AND categoria.idcat=prov_cat.idcat AND categoria.nombre="" '); 
                   ?-->

                   <?php $prov = DB::select('SELECT password FROM proveedor WHERE proveedor.id='.$pro->id); 
                   ?>
                    
                 

                    <input type="hidden" name="password" value="">
                    

                          <input type="file" name="image" multiple />


                  </div>

                   <div class="modal-body">
		        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


		      			
		         
		              	<div class="form-group">
							<p>Confirme si desea enviar accesos al Proveedor: {{$pro->password}} </p>
							<p>Con Correo: {{$pro->correo}} </p>
		                  <img src="images/cargando.gif" width="175" height="50" id="cargandoAd" style="display: none;">

		              	</div>  

		              	  

		        	</div>
		      	</div>

                  <img src="images/cargando.gif" width="175" height="50" id="cargandoc" style="display: none;">

                  <button class="btn btn-lg btn-primary" type="submit" id="btnc" name="btnc">ENVIAR</button> <br><br>
         
          <button data-dismiss="modal" class="btn btn-danger" >CANCELAR</button>
               

                @include('alerts.success')
                @include('alerts.errors')




</div>
</div>




      <div class="modal-footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 


  <script src="js/jquery.js"></script>

    {!!Html::script('js/myjs.js')!!}
    {!!Html::script('js/myjscargando.js')!!}
    <script>
     
      function activareditor(){   
        $("#contenido_mail").wysihtml5();
      };

      activareditor();
    </script>



    </div>
  </div>
</div>


