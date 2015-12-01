$(function () {
    $('.button-checkbox').each(function () {

        // opciones
        var $opcionSeleccion = $(this),
            $miBoton = $opcionSeleccion.find('button'),
            $checkbox = $opcionSeleccion.find('input:checkbox'),
            color = $miBoton.data('color'),
            opciones = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Manejador de evento
        $miBoton.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            actualizarPantalla();
        });
        $checkbox.on('change', function () {
            actualizarPantalla();
        });

        // acciones
        function actualizarPantalla() {
            var estaAceptado = $checkbox.is(':checked');

            // Set the button's state
            $miBoton.data('state', (estaAceptado) ? "on" : "off");

            // Set the button's icon
            $miBoton.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + opciones[$miBoton.data('state')].icon);

            // Update the button's color
            if (estaAceptado) {
                $miBoton
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $miBoton
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function inicializar() {

            actualizarPantalla();

            // Inject the icon if applicable
            if ($miBoton.find('.state-icon').length == 0) {
                $miBoton.prepend('<i class="state-icon ' + opciones[$miBoton.data('state')].icon + '"></i>');
            }
        }
        inicializar();
    });

        var camposMaximos = 3;
        var agregar = $('.agregar');
        var botonAgregar = $('botonAgregar');

        var contador = 1;

    $('#botonAgregar').click(function(evento){
        
        evento.preventDefault();

        if(contador < camposMaximos)
        {
            if(contador == 1)
            {
                $(agregar).append('<br>');
            }
           
            contador = contador + 1;
            $(agregar).append('<div class=form-group><input type="email" name="correo" id="correo" class="form-control input-lg" placeholder="Correo Electronico" tabindex="4"></div>');
        }
        else
        {
            $('#errores').html("Solo puedes tener un máximo de 3 correos");
            $('#errores').addClass('alert alert-danger');
        }

    });

    
});
