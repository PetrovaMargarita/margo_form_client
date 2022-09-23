<?php
$info = file_get_contents('ссылка на выгрузку валюты');
$cur = json_decode($info, true);
$usd = $cur['usd'];
$eur = $cur['eur'];
$rub = $cur['rub'];

?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="title"></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
<div class="container">

    <!--            Блок для отображения полей для заполнения           -->
    <div class="tab-1">
        <div class="row justify-content-center">
            <div class="card col col-md-6 col-lg-5">
                <div class="card-body">


                    <div class="row justify-content-center">
                        <!-- логтип формы -->
                        <div class="d-flex justify-content-center col col-md-12 mb-3">
                            <img class="img-fluid" src="img/logo.png">
                        </div>
                    </div>


                    <!-- выбор языка для формы -->
                    <!--                    Если не нужен блок, дописать в div-class "d-none"-->
                    <div class="row mb-3">
                        <div class="col text-center">
                            <i class="fas fa-globe"></i>
                            <label class="btn-ua lang-ua active btnLangChange" data-lang="ua">UA</label>
                            <label class="line"></label>
                            <label class="btn-ru lang-ru btnLangChange" data-lang="ru">RU</label>
                        </div>
                    </div>

                    <!-- форма которая будет открываться -->
                    <form name="myForm" id="validate" action="/" method="POST">
                        <?php include('form.php'); ?>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- Конец TAB1 -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>