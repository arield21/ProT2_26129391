<div class="">
<div class="container mt-1 mb-1 d-flex justify-content-center">
  <div class="card" style="width: 50%;">
    <div class="card-header text-center" >
      <h2> Iniciar sesion</h2>
    </div>
    <form method="post" action="<?php echo base_url('')?>">
      <div class="card-body" media="(max-width:768px)">
        <div class="mb-2">
          <label for="exampleFormControlImput1" class="form-label">Correo</label>
          <input  name="email" type="text" class="form-control" placeholder="correo">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlImput1" class="form-label">Password</label>
          <input  name="pass" type="password" class="form-control" placeholder="contraseña">
        </div>
        <input type="submit" value="Ingresar" href="" class="btn btn-success">
       <a href="registro" class="btn btn-danger">Cancelar</a>
       <br>
       <br><span>¿Aùn no se registro? <a href="registro">
       Registrarse aqui</a></span>
     </div>
    </form>
  </div>            
</div>

</div>
<div>
  
<p><br>
  <br>
  <br>
  <br>
  <br>
</p>
</div>



<!--Mensaje de Error-->
        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                          <?= (session()->getFlashdata('msg'))?>
                    </div>
         <?php endif;?>
     <!--inicio del formulario de login    "<?php echo base_url('login'); ?>"    <?php echo base_url('registro'); ?>-->
     

  
