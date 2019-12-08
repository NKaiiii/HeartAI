<?php 
    #file h-his.txt for save prediction history
    $hisfile = fopen("h-his.txt","r") or die("Unable to open file!");
    $array = explode("\n", file_get_contents('h-his.txt'));
    #his array to save data from file as array
    $his = [];
    for($i=0;$i<sizeof($array);$i++){
        $list = explode(",",$array[$i]);
        array_push($his,$list);
    }
    fclose($hisfile);

    #edit data value
    for($i=0;$i<sizeof($his);$i++){
        for($j=0;$j<sizeof($his[$i]);$j++){
            //edit sex
            if($j==3){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Male',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','Female',$his[$i][$j]);
                }
            }

            //edit cp
            if($j==4){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Typical Angina',$his[$i][$j]);
                }else if($his[$i][$j]=='1'){
                    $his[$i][$j] = str_replace('1','Atypical Angina',$his[$i][$j]);
                }else if($his[$i][$j]=='2'){
                    $his[$i][$j] = str_replace('2','Non—Anginal Pain',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('3','Asymptotic',$his[$i][$j]);
                }
            }

            //edit fbs 
            if($j==7){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Less than 120mg/dl',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','More than 120mg/dl',$his[$i][$j]);
                }
            }

            //edit restecg
            if($j==8){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Normal',$his[$i][$j]);
                }else if($his[$i][$j]=='1'){
                    $his[$i][$j] = str_replace('1','Having ST-T wave abnormality',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('2','Left ventricular hyperthrophy',$his[$i][$j]);
                }
            }

            //edit exang 
            if($j==10){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','No',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','Yes',$his[$i][$j]);
                }
            }

            //edit slope
            if($j==12){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Upsloping',$his[$i][$j]);
                }else if($his[$i][$j]=='1'){
                    $his[$i][$j] = str_replace('1','Flat',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('2','Downsloping',$his[$i][$j]);
                }
            }

            //edit thal
            if($j==14){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Normal',$his[$i][$j]);
                }else if($his[$i][$j]=='1'){
                    $his[$i][$j] = str_replace('1','Fixed Detect',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('2','Reversible defect',$his[$i][$j]);
                }
            }

            //edit result 
            if($j==15){
                if($his[$i][$j]=='0'){
                    $his[$i][$j] = str_replace('0','Yes',$his[$i][$j]);
                }else{
                    $his[$i][$j] = str_replace('1','No',$his[$i][$j]);
                }
            }
        }
    }
?>