<?php
/**
 * Created by PhpStorm.
 * User: Arthur Fernandes
 * Date: 04/12/2017
 * Time: 21:38
 */
    for ($i = 0; $i < 10; $i++){
        $random = rand(1,100);
        if ($random%3 == 0 and $random%5 == 0){
            echo'<h3>Três Cinco</h3>';
        } else {
            if ($random%3 == 0 or $random%5 == 0){
                if ($random%3 == 0){
                    echo '<h3>Três</h3>';
                }
                if ($random%5 == 0){
                    echo '<h3>Cinco</h3>';
                }
            } else {
                echo'<h3>'.$random.'</h3>';
            }
        }
    }
?>
<style>
    h3{
        text-align: center;
    }
</style>
