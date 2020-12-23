$(document).ready( () => {
    $.post(
        './controller/promociones.php',
        {pagina:pagina},
        msg => {
            $('#listpromos').html(msg)
        }
    )
});