<h1 class="nombre-pagina">Crear nueva cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div id="app">

    <nav class="tabs">
        <button type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Informacion Cita</button>
        <button type="button" data-paso="3">Resumen</button>
        
    </nav>

    <!-- AGREGAR SERVICIOS DESEADOS -->
    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuacion</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>

    <!-- RELLENO DE DATOS DEL CLIENTE -->
    <div id="paso-2" class="seccion">
        <h2>Tus datos yy cita</h2>
        <p class="text-center">Coloca tus datos y fecha de la cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" value="<?php echo strtoupper($nombre) ?>" disabled>
            </div>
            <div class="campo">
                <label for="fecha">Fecha</label>
                <input id="fecha" type="date" placeholder="Fecha de la cita">
            </div>
            <div class="campo">
                <label for="hora">Hora</label>
                <input id="hora" type="time" placeholder="Hora de la cita">
            </div>
        </form>
    </div>

    <!-- RESUMEN DEL SERVICIO A REALIZAR -->
    <div id="paso-3" class="seccion">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la informacion sea correcta</p>
    </div>

    <div class="paginacion">
        <button
        id="anterior"
        class="boton"
        >&laquo; Anterior</button>
        <button
        id="siguiente"
        class="boton"
        >Siguiente &raquo;</button>
    </div>
</div>


<?php
    $script = "
        <script src='build/js/app.js'></script>
    ";
?>