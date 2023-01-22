<?php
// include head html and the arrays where groups and teams stocked
include "PHP/data.php";
include "PHP/head.php";
if (isset($_POST["group"])) {
    $group = $_POST["group"];
    $keys = array_keys($$group["countries"]);
    Calc($$group["countries"][$keys[0]],$$group["countries"][$keys[1]],"M1",$match1);
    Calc($$group["countries"][$keys[2]],$$group["countries"][$keys[3]],"M1",$match2);
    Calc($$group["countries"][$keys[0]],$$group["countries"][$keys[2]],"M2",$match3);
    Calc($$group["countries"][$keys[3]],$$group["countries"][$keys[1]],"M2",$match4);
    Calc($$group["countries"][$keys[0]],$$group["countries"][$keys[3]],"M3",$match5);
    Calc($$group["countries"][$keys[2]],$$group["countries"][$keys[1]],"M3",$match6);
    $groups = [$groupA, $groupB, $groupC, $groupD, $groupE, $groupF, $groupG, $groupH];
}
?>
    <section>
        <div class="line">
            Groups
        </div>
        <div class="container d-flex flex-wrap col-12">
            <?php
            include "PHP/cards.php"
            ?>
        </div>
    </section>
<section>
    <div class="line">
        Simulation
    </div>
    <?php
        include "PHP/matches.php";
         ?>
</section>
<?php
///////////////********************* functions *****************////////////
//this function calcules stats and fill them in the groups arrays in data.php
function Calc(&$country1,&$country2,$round,&$match){
    if ($_POST[$country1["name"].$round]!="" || $_POST[$country2["name"].$round]!=""){
        $match = [$country1["name"]=>(int)$_POST[$country1["name"].$round],
            $country2["name"]=>(int)$_POST[$country2["name"].$round]];
        $country1["mp"] +=1;
        $country2["mp"] +=1;
        if ((int)$match[$country1["name"]] >(int) $match[$country2["name"]]){
            $country1["w"] +=1;
            $country2["l"] +=1;
            $country1["gf"] += (int) $match[$country1["name"]];
            $country1["ga"] += (int) $match[$country2["name"]];
            $country2["ga"] += (int) $match[$country1["name"]];
            $country2["gf"] += (int) $match[$country2["name"]];
        }elseif ((int)$match[$country1["name"]]<(int)$match[$country2["name"]]){
            $country1["l"] +=1;
            $country2["w"] +=1;
            $country2["ga"] += (int) $match[$country1["name"]];
            $country1["ga"] += (int) $match[$country2["name"]];
            $country2["gf"] += (int) $match[$country2["name"]];
            $country1["gf"] += (int) $match[$country1["name"]];
        }else {
            $country1["gf"] += (int) $match[$country1["name"]];
            $country2["gf"] += (int) $match[$country2["name"]];
            $country2["ga"] += (int) $match[$country1["name"]];
            $country1["ga"] += (int) $match[$country2["name"]];
            $country1["d"] +=1;
            $country2["d"] +=1;
        }
        $country1["pts"] = (($country1["w"]*3)+ $country1["d"]);
        $country2["pts"] = (($country2["w"]*3)+ $country2["d"]);
        $country1["gd"]= $country1["gf"]-$country1["ga"];
        $country2["gd"]= $country2["gf"]-$country2["ga"];
    }else {
        $match = null;
    }
}
//this function is custom sort that I used to mach brief needs
function customSort($a,$b){
    global $match1;
    global $match2;
    global $match3;
    global $match4;
    global $match5;
    global $match6;
    if ($a["pts"]==$b["pts"]){
        if ($a["gd"]==$b["gd"]){
            if ($a["gf"]==$b["gf"]){
               if (isset($match1) ||isset($match2)||isset($match3) ||isset($match4) || isset($match5) ||isset($match6)){
                   if (isset($match1)){
                       if (isset($match1[$a["name"]])&& isset($match1[$b["name"]])){
                           if ($match1[$a["name"]]>$match1[$b["name"]]) {
                               return -1;
                           }elseif ($match1[$a["name"]]<$match1[$b["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
                   if (isset($match2)){
                       if (isset($match2[$a["name"]])&& isset($match2[$b["name"]])){
                           if ($match2[$a["name"]]>$match2[$b["name"]]) {
                               return -1;
                           }elseif ($match2[$a["name"]]<$match2[$b["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
                   if (isset($match3)){
                       if (isset($match3[$a["name"]])&& isset($match3[$b["name"]])){
                           if ($match3[$a["name"]]>$match3[$b["name"]]) {
                               return -1;
                           }elseif ($match3[$a["name"]]<$match3[$b["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
                   if (isset($match4)){
                       if (isset($match4[$a["name"]])&& isset($match4[$b["name"]])){
                           if ($match4[$a["name"]]>$match4[$b["name"]]) {
                               return -1;
                           }elseif ($match4[$b["name"]]>$match4[$a["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
                   if (isset($match5)){
                       if (isset($match5[$a["name"]])&& isset($match5[$b["name"]])){
                           if ($match5[$a["name"]]>$match5[$b["name"]]) {
                               return -1;
                           }elseif ($match5[$a["name"]]<$match5[$b["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
                   if (isset($match6)){
                       if (isset($match6[$a["name"]])&& isset($match6[$b["name"]])){
                           if ($match6[$a["name"]]>$match6[$b["name"]]) {
                               return -1;
                           }elseif ($match6[$a["name"]]<$match6[$b["name"]]){
                               return 1;
                           }else return 0;
                       }
                   }
               }else {
                   return 0;
               }
            }elseif ($a["gf"]>$b["gf"]){
                return -1;
            }else{
                return 1;
            }
        }elseif ($a["gd"]>$b["gd"]){
            return -1;
        }else{
            return 1;
        }
    }elseif ($a["pts"]>$b["pts"]){
        return -1;
    }else {
        return 1;
    }
}
///////////////********************* end of functions *****************////////////
//include html footer
include "PHP/foot.php";
