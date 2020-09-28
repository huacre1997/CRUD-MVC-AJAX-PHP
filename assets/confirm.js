$(document).ready(function () {
    $("#add").on("click",function (e) { 
        var hr=$(this).attr("a")
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: hr,
            success: function (response) {
                console.log(window.location.host+"/"+hr)
                $.confirm({
                    closeIcon: true, // explicitly show the close icon
                    icon:"fa fa-user-plus",
                    columnClass: 'col-lg-5 col-md-8 col-md-offset-4 col-xs-8 col-xs-offset-4',
                    title: "Registrar Usuario",
                    content: response,
                    theme:"material",
                    type:"blue",
                    buttons: {
                        formSubmit: {
                            text: 'Registrar',
                            btnClass: 'btn-blue',
                            action: function () {
                                this.$content.find('.btn').trigger('click')

                            }
                        },
                   
                    },
           
                });

            }
        });
    
    });
    $(document).on("click", ".edit", function (e) {
        var hr=$(this).attr("a")
        console.log(hr)
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: hr,
            success: function (response) {
                console.log(window.location.host+"/"+hr)
                $.confirm({
                    closeIcon: true,
                    columnClass: 'col-lg-4 col-md-8 col-md-offset-4 col-xs-8 col-xs-offset-4',
                    containerFluid: true, 
                    icon:"fa fa-edit",
                    title: "Editar Usuario",
                    content: response,
                    theme:"material",
                    type:"orange",
                    buttons: {
                        formSubmit: {
                            text: 'Editar ',

                            btnClass: 'btn-warning',
                            action: function () {
                                this.$content.find('.btn').trigger('click')

                            }
                        },
                     
                    },
                
                });

            }
        });
    
    });
    $(document).on("click", ".delete", function (e) {
        var hr=$(this).attr("a")
        console.log(hr)
        e.preventDefault();
            $.confirm({
                    title: 'Confirmar!',  
                    icon:"fas fa-exclamation-triangle",
                    content: 'Desea eliminar el usuario?!',
                    theme:"modern",
                    type:"red",
                    buttons: {
                        Eliminar: function () {
                          $.ajax({
                            type: "POST",
                            url: hr,
                              success: function (response) {
                                $(".table").html("")
                                $(".table").html($(response).find(".table").html())  
                                message("Registro eliminado exitosamente!")  
                              }
                          });         
                        },
                        Cancelar: function () {
                        },
                    
                    }        
        });
    
    });

});
var message=(mensaje)=>{
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })   
      Toast.fire({
        icon: 'success',
        title: mensaje
      })  
}