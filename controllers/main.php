<?php

class Main extends Controller {

    function __construct(){
        parent::__construct();
        $this->view->render('/main/index');

    }

    function testApp(){
        echo "<p>This is the test method</p>";
    }

}

?>
