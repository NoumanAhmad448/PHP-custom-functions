<?php 

/************
 * 
 * show output on screen just like echo but with colors schemes and 
 * deciding dynamically what type of input is given and what to use 
 * to show the output
 * 
 * 
 * @param Mixed
 * @return void
 * @author Nouman Ahmad
 * 
 */

function dd($ob,$exitOnPrint=false,$exactIndex="",$maxIndex= 0,$showDataTypes=false,$bgColor="#2b2a27",$color="#fff",
            $fontSize="14px")
{
    echo "<div style='max-width: 100%'><pre style='background-color: ".$bgColor." !important;color: ".$color." !important;max-width: 100%; 
                padding: 6px; font-size: ".$fontSize."; margin-top: 4px; margin-bottom: 4px; overflow-wrap: break-all;text-align: justify
                '>";
    if(is_array($ob) && !empty($maxIndex)){
        $final_index = count($ob) < $maxIndex ? count($ob) : $maxIndex;
        for($i = 0; $i < $final_index; $i++){
            if($showDataTypes){
                var_dump($ob[$i]);
                echo "<br/>";
            }
            else{
                print_r($ob[$i]);
                echo "<br/>";
            }
        }
    }
    else if(is_array($ob) && $exactIndex != "" ){
        if($showDataTypes){
            var_dump($ob[$exactIndex] ? $ob[$exactIndex] : "index out of index err");;
        }else{
            print_r($ob[$exactIndex] ? $ob[$exactIndex] : "index out of index err");
        }
    }
    else{
        if($showDataTypes){
            var_dump($ob);        
        }else{
            print_r($ob);
        }

    }

    echo "</pre></div>";

    if($exitOnPrint){
        exit;
    }
}

