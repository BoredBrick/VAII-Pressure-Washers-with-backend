
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
                <p><a class="unsubscribe" data-bs-toggle="modal" data-bs-target="#unsub" href="#unsub">Unsubscribe from newsletter</a></p>

                <div class="modal fade" id="unsub" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Unsubscribe from newsletter</h4>
                            </div>
                            <div class="modal-body">
                                <p>We are sorry to see you go! Please input your email address below to no longer receive our newsletter</p>

                                <?php
                                $mailErr = "";
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if(isset($_POST["unsub"])) {
                                        if (isset($_POST["mail"])) {
                                            if($app->isEmailValid($_POST["mail"])) {
                                                if(!$app->removeNewsLetter($_POST["mail"])) {?>
                                                    <div class="alert alert-warning" role="alert">
                                                        Mail not found.
                                                    </div>
                                                <?php } else { ?>
                                                    <script>
                                                        alert("Your email has been removed.");
                                                    </script>
                                                <?php }
                                            } else { ?>
                                                <div class="alert alert-warning" role="alert">
                                                    Invalid Email.
                                                </div>
                                            <?php }
                                        } else { ?>
                                            <div class="alert alert-warning" role="alert">
                                                Email field must not be empty.
                                            </div>
                                        <?php }
                                    }
                                }
                                ?>

                                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="container" style="background-color:white">
                                        <input type="text" placeholder="Email address" name="mail" required>
                                    </div>
                                    <div class="container">
                                        <button type="submit" class="btn btn-outline-dark unsub" value="Unubscribe" name="unsub">Unsubscribe</button>
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
                <a href='javascript:newTab("http://www.facebook.com")' class="fa fa-facebook" )"></a>
                <a href='javascript:newTab("http://www.youtube.com")'><i class="fa fa-youtube"></i></a>
                <a href='javascript:newTab("http://www.instagram.com")'><i class="fa fa-instagram"></i></a>
                <div>
                    <p> Number of visitors: <?=$app->getVisitors();?></p>
                    <?=$app->updateVisitors();?>
                </div>
            </div>
        </div>
    </div>
</footer>