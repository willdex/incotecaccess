  
<?php $__env->startSection('contenido'); ?> 





 <div class="col-lg-1">  
  </div>


  <!--div class="col-lg-10"-->  

<center> <h2 style="text-transform: uppercase; font-weight: bold;"> Lista de Proveedores </h2> </center>
    
    

    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="table-responsive"> 

      
          <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
              <thead>
                <th style="font-size: 16px;"><center>Proveedor</center></th>
                <th style="font-size: 16px;"><center>Correo</center></th>
                <th style="font-size: 16px;"><center>Teléfono</center></th>
                <th style="font-size: 16px;"><center>Dirección</center></th>
              </thead>
              <tbody align="center" id="body_empresa">          
              <?php foreach($prov as $user): ?>
              <tr>
  <td style="font-size: 15px;"><?php echo e($user->proveedor); ?> </td>          
                <td style="font-size: 15px;"><?php echo e($user->correo); ?></td>
                <td style="font-size: 15px;"><?php echo e($user->telefono); ?></td>
                <td style="font-size: 15px;"><?php echo e($user->direccion); ?></td>
              </tr>
              <?php endforeach; ?>
              </tbody>          
          </table>

      <div class="pull-left"> <?php echo $prov->render(); ?>  </div>

      </div>
  <button class='btn btn-primary' style="font-size: 14px; background-color: green;" data-toggle="modal" data-target="#modalAcceso" >Enviar Acceso</button>
<<<<<<< HEAD
=======
   <a href="consultar"><button class='btn btn-primary' style="font-size: 14px; " >Consultar</button>
>>>>>>> 736d1e0fa8d123b52701071be3bfc67bec4e74da
    </div>
  </div>

  <!--/div-->



    <div class="col-lg-1">  
    </div>


      




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>