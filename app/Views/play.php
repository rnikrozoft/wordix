<?php include('templates/header-script.php'); ?>

<body>
    <canvas></canvas>
    <div class="absolute-center">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-auto card">
                    <div class="card-body">
                        <input class="inputs" type="text" maxlength="1" id="c1" required />
                        <input class="inputs" type="text" maxlength="1" id="c2" />
                        <input class="inputs" type="text" maxlength="1" id="c3" />
                        <input class="inputs" type="text" maxlength="1" id="c4" />
                        <input class="inputs" type="text" maxlength="1" id="c5" />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 pt-5">
                <div class="col-12 text-center">
                    <h1 id="translated_area"></h1>
                </div>
            </div>
        </section>
        <span id="close"><i class="fa fa-fw fa-times-circle-o"></i></span>
    </div>

    <section class="fixed-bottom">
        <div class="container w-600">
            <div class="row">
                <div class="header-footer"></div>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-3 px-0">
                    <a href="/ufaeat-register" class="footer-item">
                        <i data-feather="alert-circle" width="60" height="60"></i>
                        <div class="text-footer">Hint</div>
                    </a>
                </div>
                <div class="col-3 px-0">
                    <a href="#howtoplay" data-toggle="modal" class="footer-item">
                        <i data-feather="help-circle" width="60" height="60"></i>
                        <div class="text-footer">How to play</div>
                    </a>
                </div>
                <div class="col-3 px-0">
                    <a href="/game-test" class="footer-item">
                        <i data-feather="star" width="60" height="60"></i>
                        <div class="text-footer">Leaderboard</div>
                    </a>
                </div>
                <div class="col-3 px-0">
                    <a href="https://line.me/R/ti/p/%40794hbmjm" rel="nofollow" target="_blank" class="footer-item blink_me">
                        <i data-feather="user" width="60" height="60"></i>
                        <div class="text-footer">My Profile</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include('modal/howtoplay.php'); ?>
    <?php include('templates/footer-script.php'); ?>
</body>

</html>