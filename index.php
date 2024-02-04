<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1</title>
</head>

<body>


    <h2>Resultados con MySQL</h2>
    <table class="table">
        <thead>
            <tr>
                <th style="width: 1%">
                    Usuario
                </th>
                <th style="width: 20%">
                    Contraseña
                </th>
            </tr>
        </thead>
        <tbody id="MySQL">

        </tbody>
    </table>



    <h2>Resultados con PgSQL</h2>
    <table class="table table-striped projects tabla-scroll">
        <thead>
            <tr>
                <th style="width: 1%">
                    Usuario
                </th>
                <th style="width: 20%">
                    Contraseña
                </th>
            </tr>
        </thead>
        <tbody id="PgSQL">

        </tbody>
    </table>

    
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/usuario.js"></script>  

</body>

</html>