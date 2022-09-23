<!DOCTYPE html>
<html lang="<?= $_GET['lang']; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card col col-md-8 col-lg-8">
            <div class="card-body">

                <div class="row d-flex  justify-content-center text-center mb-3">
                    <div class="col col-md-12" style="margin: 60px 0 40px 0;">
                        <img class="img-fluid" src="img/success.ico">
                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-10 mb-4 text-center">
                    <div class="col-md-12">

                        <h2>
                            <div class="success_1 mb-3"></div>
                        </h2>
                        <h4>
                            <div class="success_2 mb-4" style="font-weight: 400;"><label class="ok_page1" ></label>
                                <span style="font-weight: bold"><?= '#' . $_GET['order']; ?> </span><label class="ok_page2"></label>
                            </div>
                        </h4>


                        <div class="d-grid gap-2 col col-md-6 col-lg-4 mx-auto">
                            <a class="btn btn-success back_site" style="padding: 12px !important;" href="site"  role="button"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

</body>
</html>