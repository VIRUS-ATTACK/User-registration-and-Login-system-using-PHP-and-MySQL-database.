<?php
    require('core.inc.php');
    require('sql_connect.php');
    if(log_in()){
        $firstname = getUserField('firstname');
        $lastname = getUserField('lastname');
        ?>
            <html>
            <head>
            <title><?php echo 'Hello '.$firstname ?> </title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="surya teja achanta,php Login form web template, SmartPhone Compatible php web template" />
            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
            <style>
                @import url('https://fonts.googleapis.com/css?family=Griffy');
            h1{
                font-family: 'Roboto';
                font-size: 3vw;
            }
            body{
                text-align: center;
                color: white;
                background: linear-gradient(to left, #5C258D , #4389A2);
            }
            footer{
            color: #fff; 
            font-family: "Courier";
            margin: 10px 0 0 10px;
            white-space: nowrap;
            overflow: hidden;
            }
            .w3-button {width:150px;}
            .w3copyright-agile {
                margin: 2em 0 1em;
                text-align: center;
            }
            .w3copyright-agile p {
                font-size: .9em;
                color: #fff;
                line-height: 1.8em;
                letter-spacing: 1px;
                font-weight: 100;
            }
            .w3copyright-agile p a{
                color: #fff;
                transition: 0.5s all;
                -webkit-transition: 0.5s all;
                -moz-transition: 0.5s all;
                -o-transition: 0.5s all;
                -ms-transition: 0.5s all;
            }
            .w3copyright-agile p a:hover{
                color: #EE2424; 
            }

            </style>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            </head>

            <body>

            <h1><?php echo 'you\'re logged in successfully Mr/Ms '.$firstname.' '.$lastname ?></h1>
            <div class="w3-container">
                <a href='logout.php' <p><button class="w3-button w3-pink" onclick="logout.php">logout</button></p></a>
            </div>
            <div class="w3copyright-agile">
                <p>made with <span style = "color: red;">❤️</span> by <strong><a style="text-decoration:none;" class="link" href="https://virus-attack.github.io/my-website/">SURYA TEJA ACHANTA</a></strong> 2018. All Rights Reserved</p>
            </div> 
            </body>

            </html>
        <?php
        //echo '<br>you\'re logged in successfully M.r '.$firstname.' '.$lastname.' <a href=\'logout.php\'>logout</a>';
    }
    else{
        require('login_form.php');
    }
    
?>

  