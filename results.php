<?php
require('common.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="shakespeak.css">
        <link rel="shortcut icon" type="image/png" href="/willy-shakes.png"/>
        <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
            
        <title>Shakespeak Results</title>
    </head>

    <body>
		<div class="container mt-5">
            <h1 class="graffiti-font">
            <?php
                if (!$_SESSION['problems']) {
                    echo 'He hath understoodeth!';
                } else echo 'Your Language is a Pox on the Past!';
            ?>
            </h1>
            
            <h2 class="graffiti-font" style="font-size: 26px;">Thine Input:</h2>
            <p class="body-font">
                <?php 
                    echo ($_SESSION['raw']);
                ?>
            </p>

            <?php
            if ($_SESSION['problems']) {
                echo '<h2 class="graffiti-font" style="font-size: 26px; text-align: center; color: #FF0000">Thou art vile. Write again. Unknown Words:</h2>';
                echo '<p class="body-font">';
                foreach ($_SESSION['problems'] as $problem) {
                    echo $problem;
                    echo '<br>';
                }
            } 
            else echo '<h2 class="graffiti-font" style="font-size: 26px; text-align: center; color: #008000">Thou art cunning. He hath understood.</h2><br>'
            ?>

            <h2 class="graffiti-font" style="font-size: 26px;">Thine score:</h2>
            <p class="body-font">
                <?php 
                    echo ($_SESSION['finalScore']);
                ?>
            </p>

            <br>
            <div style="text-align: center">
                <form action="/">
                    <button type="submit" class="btn btn-primary custom-button mt-4 body-font right-align">Try Again</button>
                </form>
            </div>
        </div>
	</body>
</html>
