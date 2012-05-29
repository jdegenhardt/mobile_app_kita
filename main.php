<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>BI WebApp</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="scripts/jQuery_mobile/jquery.mobile-1.1.0.css"/>
    <script src="scripts/jQuery/jquery-1.7.2.js"></script>
    <script src="scripts/jQuery_mobile/jquery.mobile-1.1.0.js"></script>

    <!-- iframe Settings -->
    <style type="text/css">
        html, body { margin: 0; padding: 0; height: 100%; }
        iframe {
            position: absolute;
            left: 0; width: 100%; height: 100%;
            border: none; padding-top: 0px;
            box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box;
        }
    </style>
    <!-- /iframe Settings -->

    <!-- paragraph border Settings -->
    <style type="text/css">
        p {
            padding-bottom: 8px;
            padding-left: 8px;
            padding-right: 8px;
            padding-top: 8px;
            border-width: 3px;


            margin-bottom: 0px;
            margin-top: 0px;
        }
    </style>
    <!-- /paragraph border Settings -->

    <!-- Tabelle tr trennlinie Settings -->
    <style type="text/css">
        .tabellenlinie:first-child {
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: lightskyblue;
        }
    </style>
    <!-- /Tabelle tr trennlinie Settings -->

    <!-- Newstabelle Settings -->
    <style type="text/css">
        .newspic {
            border-top-width: 3px;
            border-bottom-width: 3px;
            border-left-width: 3px;
            border-right-width: 0px;
            border-color: lightskyblue;
            border-style: dotted;
            margin-bottom: 5px;
        }
        .newsmsg {
            border-top-width: 3px;
            border-bottom-width: 3px;
            border-left-width: 0px;
            border-right-width: 3px;
            border-color: lightskyblue;
            border-style: dotted;
            margin-bottom: 5px;
        }
        .newsdatum {
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: lightskyblue;
            margin-top: 10px;
        }
    </style>
    <!-- /Newstabelle Settings -->

</head>
<body>

<div data-role="page" id="social" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Social Media</h1>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news">Aktuelles</a></li>
                <li><a href="#social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/social.inc"); ?>
    <!-- /content -->
</div>

<div data-role="page" id="social_facebook" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Facebook</h1>
        <a href="#social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news">Aktuelles</a></li>
                <li><a href="#social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/social/facebook.inc"); ?>
    <!-- /content -->
</div>

<div data-role="page" id="social_twitter" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>Twitternews</h1>
        <a href="#social" data-icon="arrow-l">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news">Aktuelles</a></li>
                <li><a href="#social" class="ui-btn-active ui-state-persist">Social Media</a></li>
                <li><a href="#berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/social/twitter.inc"); ?>
    <!-- /content -->
</div>

<div data-role="page" id="berichte" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>KiTapl&auml;tze</h1>
        <a href="#berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news">Aktuelles</a></li>
                <li><a href="#social">Social Media</a></li>
                <li><a href="#berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/berichte.inc"); ?>
    <!-- /content -->
</div>

<div data-role="page" id="berichte_kita" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>KiTapl&auml;tze</h1>
        <a href="#berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news">Aktuelles</a></li>
                <li><a href="#social">Social Media</a></li>
                <li><a href="#berichte" class="ui-btn-active ui-state-persist">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/berichte/kita.inc"); ?>
    <!-- /content -->
</div>

<div data-role="page" id="news" data-add-back-btn="false">
    <!-- header -->
    <div data-role="header" data-position="fixed">
        <h1>News</h1>
        <a href="#berichte" data-icon="arrow-l" data-direction="reverse" data-transition="slide">Back</a>
        <!-- navbar -->
        <div data-role="navbar">
            <ul>
                <li><a href="#news" class="ui-btn-active ui-state-persist">Aktuelles</a></li>
                <li><a href="#social">Social Media</a></li>
                <li><a href="#berichte">Berichte</a></li>
            </ul>
        </div>
        <!-- /navbar -->
    </div>
    <!-- /header -->
    <!-- content -->
    <?php readfile("includes/news.inc"); ?>
    <!-- /content -->
</div>

</body>
</html>