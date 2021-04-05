<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>

    <body>
        <style>
        body {
            background-color: #4169E1;

        }

        h1 {
            color: white;
            text-align: center;
        }

        p {
            font-family: verdana;
            font-size: 20px;
        }

        .ukuran {
            font-size: 30px;
            margin: 20px;
        }
        </style>
        <h1>Poli Kesehatan Ibu dan Anak (KIA)
            <br>Puskesmas Makrayu</br><br>
            <img src="<?=base_url()?>assets/img/puskesmas.png" alt="" height="330px" weight="290px">
        </h1>
        <br>
        <center>
            <div class="ukuran">
                <table>
                    <tr>
                        <td>
                            <img src="<?=base_url()?>assets/img/ibuhamil.jpg" alt="" height="150px" weight="200px">
                            <br>
                            <center><button class="btn btn-info"><a href="<?php echo site_url(
    'puskesmas/login_puskesmas'
); ?>">Puskesmas</a></button></center>
                        </td>
                        <td>
                            <p style="color:DodgerBlue">...................</p>
                        </td>

                        <td>
                            <img src="<?=base_url()?>assets/img/posyandu.jpg" alt="" height="150px" weight="200px">
                            <br>
                            <center> <button class="btn btn-info"><a href="<?php echo site_url(
    'jadwal'
); ?>">Posyandu</a></button></center>
                        </td>
                        <td>
                            <p style="color:DodgerBlue">...................</p>
                        </td>
                        <td>
                            <img src="<?=base_url()?>assets/img/admin.png" alt="" height="150px" weight="200px">
                            <br>
                            <center> <button class="btn btn-info"><a href="<?php echo site_url(
    'admin/login'
); ?>">Superadmin</a></button></center>
                        </td>



                    </tr>
                </table>
            </div>

            <div><a class="badge bg-warning" href="<?=base_url('')?>/puskesmas/registrasi/forgot_password">Forgot
                    Password</a> </div>
        </center>
    </body>

</html>