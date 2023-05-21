<?php
//var_dump($dataProvider);
foreach ($result as $data){
    echo $data['name'].'*'.$data['imageurl'].'*'.$data['description'].'*'.$data['Id'].'*'.$data['month'].'&';
}
?>
