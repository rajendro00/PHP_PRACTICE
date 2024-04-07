<?php

function isChecked($inputName, $value){
    if( isset($_GET[$inputName]) && is_array($_GET[$inputName]) && in_array($value, $_GET[$inputName])){
        echo "checked";
    }

}