<?php
    require '../includes/funciones.php';
    incluirTemplates('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <a href="<?php $_SERVER['SERVER_NAME'] ?>/bienesraices/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>
    </main>

<?php
    incluirTemplates('footer');
?>