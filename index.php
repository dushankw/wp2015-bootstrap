<?php
    require_once('app/output.php');
    
    function getDataFromDB() {
        return 'Hi Trevor';
    }

    $data = getDataFromDB();
    $view = new output('view.php'); 
    $view->set('data', $data);
    $view->render();
?>
