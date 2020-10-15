<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ClientesPDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        html{
            font-size: 12px;
        }
    </style>

</head>

<body>
    <h1 class="text-center">
        VIPOLSHOP <br>
        Reporte de Proveedores</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Edad</th>
            </tr>
        </thead>

        <tbody>
            @for ($i = 0; $i < 15; $i++)
                <tr>
                    <th>1316669991</th>
                    <td>Jorge washington Villegas Polanco</td>

                    <td>0958963256 - 052649566</td>
                    <td>jorge@hotmail.com</td>
                    <td>9 de octubre y olmedo</td>
                    <td>25</td>
                </tr>
            @endfor
        </tbody>
    </table>
</body>

</html>
