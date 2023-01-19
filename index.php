<?php
include "PHP/data.php";
include "PHP/head.php";
if (isset($_POST["group"])) {
    $group = $_POST["group"];
    $keys = array_keys($$group["countries"]);
    if ($_POST[$$group["countries"][$keys[0]]["name"] . "M1"] != "" && $_POST[$$group["countries"][$keys[1]]["name"] . "M1"]) {
        $match1 = [$$group["countries"][$keys[0]]["name"] => (int)$_POST[$$group["countries"][$keys[0]]["name"] . "M1"],
            $$group["countries"][$keys[1]]["name"] => (int)$_POST[$$group["countries"][$keys[1]]["name"] . "M1"]];
    } else {
        $match1 = null;
    }
    if ($_POST[$$group["countries"][$keys[2]]["name"] . "M1"] != "" && $_POST[$$group["countries"][$keys[3]]["name"] . "M1"] != "") {
        $match2 = [$$group["countries"][$keys[2]]["name"] => (int)$_POST[$$group["countries"][$keys[2]]["name"] . "M1"],
            $$group["countries"][$keys[3]]["name"] => (int)$_POST[$$group["countries"][$keys[3]]["name"] . "M1"]];
    } else {
        $match2 = null;
    }
    if ($_POST[$$group["countries"][$keys[2]]["name"] . "M2"] != "" && $_POST[$$group["countries"][$keys[0]]["name"] . "M2"]) {
        $match3 = [$$group["countries"][$keys[2]]["name"] => (int)$_POST[$$group["countries"][$keys[2]]["name"] . "M2"],
            $$group["countries"][$keys[0]]["name"] => (int)$_POST[$$group["countries"][$keys[0]]["name"] . "M2"]];
    } else {
        $match3 = null;
    }
    if ($_POST[$$group["countries"][$keys[1]]["name"] . "M2"]!=""&&$_POST[$$group["countries"][$keys[3]]["name"] . "M2"]){
        $match4 = [$$group["countries"][$keys[1]]["name"] => (int)$_POST[$$group["countries"][$keys[1]]["name"] . "M2"],
            $$group["countries"][$keys[3]]["name"] => (int)$_POST[$$group["countries"][$keys[3]]["name"] . "M2"]];
    }else {
        $match4 = null;
    }
    if ($_POST[$$group["countries"][$keys[0]]["name"] . "M3"]!=""&&$_POST[$$group["countries"][$keys[3]]["name"] . "M3"]!=""){
        $match5 = [$$group["countries"][$keys[0]]["name"] => (int)$_POST[$$group["countries"][$keys[0]]["name"] . "M3"],
            $$group["countries"][$keys[3]]["name"] => (int)$_POST[$$group["countries"][$keys[3]]["name"] . "M3"]];
    }else {
        $match5=null;
    }
    if ($_POST[$$group["countries"][$keys[2]]["name"] . "M3"]!=""&&$_POST[$$group["countries"][$keys[1]]["name"] . "M3"]!=""){
        $match6 = [$$group["countries"][$keys[2]]["name"] => (int)$_POST[$$group["countries"][$keys[2]]["name"] . "M3"],
            $$group["countries"][$keys[1]]["name"] => (int)$_POST[$$group["countries"][$keys[1]]["name"] . "M3"]];
    }else{
        $match6 = null;
    }
    print_r($match1);

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
        include "PHP/matches.php"
        ?>
    </section>
<?php
include "PHP/foot.php";

