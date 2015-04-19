<?php
    require_once('app/templater.php');

    # Make sure we have our requested film
    if(isset($_GET['film'])) {
        # Instantiate a new view
        $view = new templater('views/movies-view.php');

        # Basic protection from script injection (you MUST do more if this will be sent to a database, see https://www.owasp.org/index.php/SQL_Injection)
        $output = htmlentities($_GET['film']);

        # Handle bad inputs
        if(strlen($output) < 1) {
            $output = 'Invalid input';
        }

        # Set variable and render template
        $view->set('choice', $output);
        $view->render();
    } else {
        # Redirect for errors
        header('Location:index.php');
    }
?>
