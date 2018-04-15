<?php
header('Content-Type: application/json');

    $aResult = array();
    echo "ssdsdsdsd";

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['argument']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['saveIntro']) {
            case 'add':
                $aResult['result'] = addIntro($_POST['argument']);
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

function addIntro($content){
    $fp = fopen("../content/intro.txt","w+");
    fwrite($fp,$content);
    fclose($fp);
    return $content;
}

?>