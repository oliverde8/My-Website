<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>oliverde8 - Website</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <?php
    //Load JQuery UI
    $this->addHeader('jquery_theme/jquery-ui-1.10.3.custom.min.css', \OWeb\manage\Headers::css);
    $this->addHeader('jquery/jquery-ui-1.10.3.custom.min.js', \OWeb\manage\Headers::javascript);

    //Load Ui kit
    $this->addHeader('uikit.css', \OWeb\manage\Headers::css);
    $this->addHeader('uikit.gradient.min.css', \OWeb\manage\Headers::css);
    $this->addHeader('uikit.min.js', \OWeb\manage\Headers::javascript);

    $this->headers();
    ?>
</head>
<body>

    <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-1-4 uk-margin uk-margin-top">
                <img src="<?php echo OWEB_HTML_DIR_CSS ?>/img/logo/logo_oliver.png"/>
            </div>
        </div>

        <nav class="uk-navbar">

            <ul class="uk-navbar-nav">
                <li><a href="articles.home.html" class="OWeb_nav"><?php echo $this->l('home'); ?></a></li>
                <li><a href="programs.home.html" class="OWeb_nav"><?php echo $this->l('programing'); ?></a></li>

                <li class="uk-parent" data-uk-dropdown="">
                    <a href="#">Demos <i class="uk-icon-caret-down"></i></a>

                    <div class="uk-dropdown uk-dropdown-navbar">
                        <ul class="uk-nav uk-nav-navbar">
                            <li>Jquery - ui
                                <ul>
                                    <li><a href="demo.jquery.ui.Accordion.html">Accordion</a></li>
                                    <li><a href="demo.jquery.ui.Tabs.html">Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                More Soon
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a href="#"><?php echo $this->l('more'); ?></a></li>
            </ul>

        </nav>

        <?php
        $this->display();
        ?>
    </div>


    <div class="uk-container uk-container-center uk-text-center uk-margin-bottom">
        <hr/>
        <div class="uk-panel uk-panel-box">
        <div class="uk-grid">
                <div class="uk-width-1-3">.</div>
                <div class="uk-width-1-3">
                    <p class="powered">
                        Powered by OWeb <?= OWEB_VERSION ?> <br/>
                        <a href="articles.Categorie.html?catId=9">About OWeb</a>
                        | <a href="articles.Categorie.html?catId=10">About The Website</a>
                    </p>
                </div>
                <div class="uk-width-1-3">
                    <p class="generated">Generaterd in <?php echo \OWeb\OWeb::getInstance()->get_stringRuntTime(); ?> Seconds</p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>