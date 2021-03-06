<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/asset/style/base.css"/>
        <!--        This is the custome stylesheet that can potentially override the base stylesheet-->
        <link rel="stylesheet" type="text/css" href="{customCSS}"/>
        <script type="text/javascript" src="/asset/javascript/jquery.js"></script>
    </head>
    <body>
       <div id="container">
            <!--            navigation bar-->
            <div id="titlebar">
                <a href="/"><img src="/asset/images/Home-image.png" height="105px"/></a>
                <div id="greeting">
                    {logincred}
                </div>
            </div>
            <div id="navigation">
                {menubar}
            </div>

            <!--content block-->
            <div id="content">

                {content}
            </div>

        </div>
        <script type="text/javascript" src="/asset/javascript/bot_image.js"></script>
        <!--footer information-->
            <div id="footer" >

                Acit4850 Assignment by Casper Co, Evelyn Dai, Jimmi Lin, Justin Walk

            </div>
    </body>
</html>
