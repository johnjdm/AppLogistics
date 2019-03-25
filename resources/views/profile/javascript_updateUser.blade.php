<script type="text/javascript">
$(document).ready(function() {

 $('#update').on('click',function(){
   updateUser();
 });

 function updateUser() {

    var Nombre = document.getElementById('full_name_user').value;
    var pass_1 = document.getElementById('new_password').value;
    var pass_2 = document.getElementById('password_confirm').value;

    if(pass_1 == '' && pass_2 =='')  {
      M.toast({html: 'Las Contraseñas Estan Vacías. Intenta de Nuevo...'})
      return;
    } else if( pass_1 =='')  {
      M.toast({html: 'La Nueva Contraseña Esta Vacía. Intenta de Nuevo...'})
      document.getElementById('password_confirm').value = "";
      return;
    } else if( pass_2 =='')  {
      document.getElementById('new_password').value = "";
      M.toast({html: 'La Contraseña de Confirmación Esta Vacía. Intenta de Nuevo...'})
      return;
    } else if(pass_1 != pass_2) {
      M.toast({html: 'Las Contraseñas No Son Iguales. Intenta de Nuevo...'})
      document.getElementById('new_password').value = "";
      document.getElementById('password_confirm').value = "";
      return;
    }

    $.ajax({
      url    : "/profile/updateUser",
      method : 'GET',
      data: { clave:pass_1, nombre:Nombre },
      success: function(data) {
        console.log(data);
        var json = JSON.parse(data);
        if(json.status == "OK") {
          M.toast({html: 'Datos del Perfil Actualizados Correctamente.'})
          document.getElementById('new_password').value = "";
          document.getElementById('password_confirm').value = "";
        } else {
                M.toast({html: 'No se Pudo Actualizar la Clave Correctamente.'})
               }
      }
    });
  }

});
</script>
