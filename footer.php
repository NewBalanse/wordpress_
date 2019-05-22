<?php wp_footer() ?>

<div class="row" style="background-color: #393a3f">
    <div class="container d-flex flex-sm-row flex-column mt-4 mb-4">
        <div class="col">
            <div class="col">
                <h6 class="h5 text-white text-uppercase">navigation</h6>
            </div>
            <div class="col" id="footer">
                <?php wp_nav_menu('menu=menu1') ?>
            </div>
        </div>

        <div class="col">
            <div class="col">
                <h6 class="h5 text-white text-uppercase">contacts</h6>
            </div>
            <div class="col d-flex flex-column">
                <div class="col d-flex flex-md-nowrap">
                    <div class="col-1">
                        <img src="<?php echo get_template_directory_uri() . '/image/icons/contact/Layer-115-copy1.png' ?>">
                    </div>

                    <p style="color: #999999;">+792 567 8745</p>
                </div>
                <div class="col d-flex flex-md-nowrap">
                    <div class="col-1">
                        <img src="<?php echo get_template_directory_uri() . '/image/icons/contact/email-copy-21.png' ?>">
                    </div>

                    <p style="color: #999999;">contact@blueowlcreative.com</p>
                </div>
                <div class="col d-flex flex-md-nowrap">
                    <div class="col-1">
                        <img src="<?php echo get_template_directory_uri() . '/image/icons/contact/map-pin.png' ?>">
                    </div>

                    <p style="color: #999999;">3451 52nd Ave., New York City</p>
                </div>
            </div>
        </div>
        <div class="col">

            <?php

            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 'success') {
                    echo '<span>Message success</span>';
                }

                if ($_GET['msg'] == 'error') {
                    echo '<span><strong>Error</strong></span>';
                }

            }

            echo '<style>textarea[name="comment"],texarea[name="message"]{display:none;}</style>';
            ?>

            <form action="<?php echo site_url() ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp"
                           placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                           placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="inputPhone" aria-describedby="phoneHelp"
                           placeholder="Phone" name="phone">
                </div>
                <div class="form-group">
                    <textarea class="form-control" required="true" name="message"
                              placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary text-uppercase">Contact Us</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="col d-flex justify-content-center flex-row mt-5 mb-5">

            <?php if (is_active_sidebar('true_foot')) : ?>
                <a class="pr-2" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/image/social/Layer-50-copy.png' ?>">
                </a>
                <a class="pr-2" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/image/social/Layer-46.png' ?>">
                </a>
                <a class="pr-2" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/image/social/Shape-33.png' ?>">
                </a>
                <a class="pr-2" href="#">
                    <img src="<?php echo get_template_directory_uri() . '/image/social/Shape-36.png' ?>">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() . '/image/social/Shape-37.png' ?>">
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="row" style="background-color: #2e2d2d;">
    <div class="container d-flex justify-content-start">
        <div class="col p-3">
            <p style="color: #888888;">© Copyright 2013 | Powered By WordPress</p>
        </div>
    </div>
</div>
</div>
</body>
</html>