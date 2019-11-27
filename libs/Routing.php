<?php
//get request
$request=$_SERVER["REQUEST_URI"];
$request=explode('/',$request);
// var_dump($request[2 ]); die;
if(file_exists('Controllers/'.$request[2].'.php')){

    require('Controllers/'.$request[2].".php");
    $model=ucfirst($request[2]);
    require('Models/'.$request[2].".php");
}
$currentmodel= new  $model;
$currentcontroller= new $request[2]($currentmodel);
$currentfunction=$request[3];


if(method_exists($currentcontroller,$currentfunction)){

    if(isset($request[7])){

        $currentcontroller->$currentfunction($request[4],$request[5],$request[6],$request[7]);

    }elseif(isset($request[6])){

        $currentcontroller->$currentfunction($request[4],$request[5],$request[6]);
    
    }elseif(isset($request[5])){

        $currentcontroller->$currentfunction($request[4],$request[5]);
    
    }elseif(isset($request[4])){

        $currentcontroller->$currentfunction($request[4]);
    
    }else{
        $currentcontroller->$currentfunction();
    }
}

