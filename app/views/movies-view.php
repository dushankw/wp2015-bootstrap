<!doctype html>
<html>
    <head>
        <style>
            <?php require_once('css/main.css'); ?>
        </style>
        <script type = "text/javascript" src = "app/views/select.js"></script>
    </head>
    <body>
        <div id = "header" class = "main">
            <h1>Welcome to the Rivola Cinema</h1>
            <?php require_once('menu.php'); ?>
        </div>
        <div id = "content" class = "main">
             <div id = "films">
                <h1>You picked: <?php echo $choice; ?></h1>
             </div>
        </div>
        <div id = "footer" class = "main">
            <p>Copyright Rivola Cinema Incorporated, 2015</p>
        </div>
    </body>
</html>
