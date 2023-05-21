<?php
foreach ($result as $res=>$value)
    echo $value['username'].'*'.$value['level'].'*'.$value['hiscore_arena'].'*'.$value['hiscore_story'].'*'.$value['hiscore_tilltheend'].'*'.$value['hiscore_classic'].'&';
//if(next($res &$result))echo '&';
?>
