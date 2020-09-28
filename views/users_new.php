
<form action="<?php if($_REQUEST['id']){ echo 'index.php?c=user&a=update';}else{ echo 'index.php?c=User&a=insert';}?>" class="form">     
<input type="hidden" name="id"  value="<?php if($_REQUEST['id']) {echo $data["user"]["id"];} ?>" />    
<div class="form-group">
    <label for="">Nombre</label>
    <input placeholder="Ingrese sus nombres" type="text" name="name" id="name" class="form-control" value="<?php if($_REQUEST['id']) {echo $data["user"]["name"];} ?>">
  </div>
  <div class="form-group">
    <label for="">Correo</label>
    <input placeholder="Ingrese su correo" type="text" name="email" id="email" class="form-control" value="<?php if($_REQUEST['id']) echo $data['user']['email'] ?>">
  </div>
  <div class="form-group">
    <label for="">Celular</label>
    <input placeholder="Ingrese su celular" type="text" name="phone" id="phone" class="form-control" value="<?php if($_REQUEST['id']) echo $data['user']['phone'] ?>">
  </div>
  <?php if($_REQUEST['id']):?> 
    <button style="display:none" type="submit" class="btn btn-block btn-warning">Editar</button>

<?php else :?>
    <button style="display:none" type="submit" class="btn btn-block btn-primary">Registrar</button>
<?php endif;?>
</form>
<script>
    $(function () {
        $(".form").submit(function (e) { 
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function (response) {               
                    $(".table").html("")
                    $(".table").html($(response).find(".table").html())  
                    <?php if($_REQUEST['id']):?> 
                        message("Registro editado exitosamente!")
                        <?php else :?>
                            message("Registro insertado exitosamente!")

                        <?php endif;?>            
                }
            });
        });
    });
</script>