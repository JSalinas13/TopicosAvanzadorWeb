$(document).ready(function () {
    $.ajax({
        url: 'controllers/usuario.Controller.php',
        type: 'POST',
        data: {
            opc: 1
        },
        success: function (data) {
            if (data != 0) {
                $("#MySQL").html(data);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error: ' + textStatus);
        }
    });

    $.ajax({
        url: 'controllers/usuario.Controller.php',
        type: 'POST',
        data: {
            opc: 2
        },
        success: function (data) {
            if (data != 0) {
                $("#PgSQL").html(data);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error: ' + textStatus);
        }
    });
});