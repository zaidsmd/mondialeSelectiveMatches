<?php
if ($_POST[$$group["countries"][$keys[0]]["name"] . "M1"] != "" && $_POST[$$group["countries"][$keys[1]]["name"] . "M1"]) {
    $match1 = [$$group["countries"][$keys[0]]["name"] => (int)$_POST[$$group["countries"][$keys[0]]["name"] . "M1"],
        $$group["countries"][$keys[1]]["name"] => (int)$_POST[$$group["countries"][$keys[1]]["name"] . "M1"]];
    $$group["countries"][$keys[0]]["mp"] += 1;
    $$group["countries"][$keys[1]]["mp"] += 1;
    if ($match1[$$group["countries"][$keys[0]]["name"]] > $match1[$$group["countries"][$keys[1]]["name"]]) {
        $$group["countries"][$keys[0]]["w"] += 1;
        $$group["countries"][$keys[0]]["gf"] += $match1[$$group["countries"][$keys[0]]["name"]];
        $$group["countries"][$keys[0]]["ga"] += $match1[$$group["countries"][$keys[1]]["name"]];
        $$group["countries"][$keys[0]]["gd"] += $$group["countries"][$keys[0]]["gf"] - $$group["countries"][$keys[0]]["ga"];
        $$group["countries"][$keys[0]]["pts"] += 3;
        $$group["countries"][$keys[1]]["l"] += 1;
        $$group["countries"][$keys[1]]["ga"] += $match1[$$group["countries"][$keys[0]]["name"]];
        $$group["countries"][$keys[1]]["gd"] += $$group["countries"][$keys[1]]["gf"] - $$group["countries"][$keys[1]]["ga"];
    }
} else {
    $match1 = null;
}
function Calc(&$country1,&$country2,$round,&$match){
    if ($_POST[$country1["name"].$round]!="" && $_POST[$country2["name"].$round]!=""){
        $match = [$country1["name"]=>(int)$_POST[$country1["name"].$round],
            $country2["name"]=>$_POST[$country2["name"].$round]];
        $country1["mp"] +=1;
        $country2["mp"] +=1;
        if ($$match[$country1["name"]] > $match[$country2["name"]]){
            $country1["w"] +=1;
            $country1["gf"] += $match[$country1["name"]];
            $country1["ga"] += $match[$country2["name"]];
            $country1["gd"] = $country1["gf"] - $country1["ga"];
            $country1["pts"] += 3;
            $country2["l"] +=1;
            $country2["ga"] += $match[$country1["name"]];
            $country2["gf"] += $match[$country2["name"]];
            $country2["gd"] += $country2["gf"] - $country2["ga"];
        }elseif ($$match[$country1["name"]]<$match[$country2["name"]]){
            $country2["gf"] += $match[$country2["name"]];
            $country2["w"] +=1;
            $country2["gd"] = $country2["gf"] - $country2["ga"];
            $country2["ga"] += $match[$country1["name"]];
            $country1["l"] +=1;
            $country2["pts"] += 3;
            $country1["ga"] += $match[$country2["name"]];
            $country1["gf"] += $match[$country1["name"]];
            $country1["gd"] += $country1["gf"] - $country1["ga"];
        }else {
            $country1["gf"] += $match[$country1["name"]];
            $country2["gf"] += $match[$country2["name"]];
            $country2["ga"] += $match[$country1["name"]];
            $country1["ga"] += $match[$country2["name"]];
            $country1["gd"] += $country1["gf"]-$country1["ga"];
            $country2["gd"] += $country2["gf"]-$country2["ga"];
            $country1["d"] +=1;
            $country2["d"] +=1;
            $country2["pts"] +=1;
            $country1["pts"] +=1;
        }
    }else {
        $match = null;
    }
}