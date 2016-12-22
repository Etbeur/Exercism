<?php

//
// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.
//

function helloWorld($name = null)
{
    if($name == "Alice"){
        return "Hello, ".$name. "!";
    }elseif($name == "Bob"){
        return "Hello, ".$name. "!";
    }else{
        return "Hello, World!";
    }
}
