<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="js/forms.js"></script>
    <script src="js/scripts.js"></script>
    <script src="plugins/toast/jquery.toast.min.js"></script>
    <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>

    <title>PowerWashers</title>
</head>
<body>
    <footer class="p-5 bg-white text-dark" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <p>Mr. Clean</p>
                    <p>01001 Žilina</p>
                    <p>
                        <a href="mailto:powerwashing@clean.com" target="_blank"
                        >powerwashing@clean.com</a
                        >
                    </p>
                    <p><b>+421 900 800 700</b></p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <p>IČO: 49683721</p>
                    <p>DIČ: 3948173645</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <p>
                        <a class="terms" href="#">Terms of service</a>
                    </p>
                    <p><a class="terms" href="#">Data processing agreement</a></p>
                    <p><a class="unsubscribe" data-bs-toggle="modal" data-bs-target="#unsub" href="#unsub">Unsubscribe from
                            newsletter</a></p>
                    <div class="modal fade" id="unsub" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Unsubscribe from newsletter</h4>
                                </div>
                                <div class="modal-body">
                                    <p>We are sorry to see you go! Please input your email address below to no longer
                                        receive our newsletter</p>
                                    <form method="post" onsubmit="return false" id="unsub-form">
                                        <div class="row mb-3 " style="background-color:white">
                                            <div class="col-6 mx-auto" id="input-mail">
                                                <input type="text" class="form-control input" placeholder="Email address"
                                                       id="unsub-mail" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6 mx-auto text-center ">
                                                <button type="submit" onclick="unsubscribe()"
                                                        class="btn btn-outline-dark btn-block unsub" value="Unubscribe"
                                                        name="unsub">Unsubscribe
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href='' onclick="openInNewTab('https://www.facebook.com/')" class="fa fa-facebook"></a>
                    <a href='' onclick="openInNewTab('https://www.youtube.com/')"><i class="fa fa-youtube"></i></a>
                    <a href='' onclick="openInNewTab('https://www.instagram.com/')"><i class="fa fa-instagram"></i></a>
                    <div>
                        <p> Number of visitors: <?= $app->getVisitors(); ?></p>
                        <?= $app->updateVisitors(); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>