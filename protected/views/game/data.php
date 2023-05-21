<?=$model->username?>
<?$data=$model->playerdatas[0];?>
*
<?=$data->level?>
*
<?=$data->bombs?>
*
<?=$data->range?>
*
<?=$data->speed?>
*
<?=$data->trigger?>
*
<?=$data->wallthrough?>
*
<?=$data->bombthrough?>
*
<?=$data->bombprof?>
*
<?=$data->life?>
*
<?=$data->hiscore_arena?>
*
<?=$data->hiscore_story?>
*
<?=$data->hiscore_classic?>
*
<?=$data->hiscore_tilltheend?>
<? if($data->lastDonate)
    if(strtotime($data->lastDonate->donate_end)>  strtotime(date('Y-m-d'))){ 
echo '*'.$data->lastDonate->donate_end.'*'.$data->lastDonate->donate->bombs.'*'.$data->lastDonate->donate->range.'*'.$data->lastDonate->donate->life.'*'.$data->lastDonate->donate->trigger;  
echo '*'.$data->lastDonate->donate->speed.'*'.$data->lastDonate->donate->wallthrough.'*'.$data->lastDonate->donate->bombthrough.'*'.$data->lastDonate->donate->bombprof;;

}
    ?>
