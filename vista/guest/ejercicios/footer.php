<script type="text/javascript" src="<?= base_url() ?>plantillas/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>plantillas/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>plantillas/js/app.js"></script>
<script>
        $(document).ready(function() {
            $('.icon_menu').tooltip();
      	});
</script>
<!--Esto es solo para cuando este logueado ya que envia los datos por ajax-->
<script type="text/javascript">
    var select = 0;
    var puntaje = 0;
    var limite= 0;
    var inputs = 0;
    var pasos = 0;
	$('.form-ejercicios').on('submit',function(){
		$( ".form-ejercicios input[type='text']" ).each(function( index ) {
			if($(this).val()==$(this).data('rsp') || $(this).val()==$(this).data('opcional')){
			puntaje= puntaje +100;
		   }
           inputs = inputs+1;
        });

        $.ajax({
          type:'POST',
          dataType:"json",
          url:"<?=base_url()?>ejercicios/validar",
          data:('puntaje='+puntaje+'&radios='+(limite/4)+'&inputs='+inputs+'&pasos='+pasos),
          beforeSend: function()
          {
            // antes de enviar
          },
          success: function(respuesta)
          {
            if(respuesta.r =="done"){
             // alert(respuesta.m);
              puntaje = 0;
              inputs = 0;
              $('.form-ejercicios').remove();
              $('.callout').remove();
              $('.now-now').html('<div class="alert alert-success" role="alert"><h4>Aviso!</h4><p>'+respuesta.m+'</p></div>');
            }
          },
          error: function(request, error)
          {
              console.log(arguments);
              alert(" Lo sentimos habido un error intentalo mas tarde . . . " + error);
          }
        });


	   return false;
    });

    // para obtener el limite de los inputs
    $(".seleccion input[type='radio']").each(function(index){
        limite = limite+1;
    });
   //para obtener el limite pasos
   $('.form-ejercicios > .box').each(function(){
        pasos = pasos+1;
    });
    // valida la seleccion de los radio button
    $(".form-ejercicios input[type='radio']").click(function(){
         if($(this).is(':checked')) {
            if('this'==$(this).data('rsp') ||'this'==$(this).data('opcional')){
                    puntaje= puntaje +100;
            }
            select=select+1;
            if(select >=(limite/4)){
                $(".form-ejercicios input[type='radio']").each(function(index){
                   $(this).remove();
                });
                $('.seleccion').html('<div class="alert alert-info alert-dismissable"><h4><i class="icon fa fa-check"></i>Aviso!</h4>Gracias ya has seleccionado 10 opciones <span class="fa  fa-trophy"></span></div>');
            }
        } else {
            alert("No está activado");
        }

    });
</script>




<script>
        var input;
            $("input[type='text']").focus(function(){
               input = $(this);
               exe();
            });

            $(document).keypress(function(){
                exe();
            });
            $('#exp').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\^{}");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
             $('#sqrt').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\\sqrt{}");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
            $('#fraccion').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\\frac{a}{b}");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
            $('#ln').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\\ln");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
        $('#sen').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\sin");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
        $('#cos').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"\cos");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
        $('#tan').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"tan");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
           $('#cot').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"cot");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
        $('#sec').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"sec");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
           $('#csc').click(function(){
                var old =  $(input).val();
                var valor = $(input).val(old+"csc");
                $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
                exe();
            });
           
        
          function exe(){
              var valor = $(input).val();
              $('.view').html('<img src="https://latex.codecogs.com/gif.latex?'+valor+'"/>');
          }
    </script>
</body>
</html>