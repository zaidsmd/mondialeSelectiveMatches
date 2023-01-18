<?php
include "PHP/data.php";
include "PHP/head.php";
if (isset($_POST["group"])){
    $group = $_POST["group"];
    $keys = array_keys($$group["countries"]);
    $Match1 = [$$group["countries"][$keys[0]]["name"]=>(int)$_POST[$$group["countries"][$keys[0]]["name"]."M1"],
        $$group["countries"][$keys[1]]["name"]=>(int)$_POST[$$group["countries"][$keys[1]]["name"]."M1"]];
    $Match2 = [$$group["countries"][$keys[2]]["name"]=>(int)$_POST[$$group["countries"][$keys[2]]["name"]."M1"],
        $$group["countries"][$keys[3]]["name"]=>(int)$_POST[$$group["countries"][$keys[3]]["name"]."M1"]];
    $Match3 = [$$group["countries"][$keys[2]]["name"]=>(int)$_POST[$$group["countries"][$keys[2]]["name"]."M2"],
        $$group["countries"][$keys[0]]["name"]=>(int)$_POST[$$group["countries"][$keys[0]]["name"]."M2"]];
    $Match4 = [$$group["countries"][$keys[1]]["name"]=>(int)$_POST[$$group["countries"][$keys[1]]["name"]."M2"],
        $$group["countries"][$keys[3]]["name"]=>(int)$_POST[$$group["countries"][$keys[3]]["name"]."M2"]];
    $Match5 = [$$group["countries"][$keys[0]]["name"]=>(int)$_POST[$$group["countries"][$keys[0]]["name"]."M3"],
        $$group["countries"][$keys[3]]["name"]=>(int)$_POST[$$group["countries"][$keys[3]]["name"]."M3"]];
    $Match6 = [$$group["countries"][$keys[2]]["name"]=>(int)$_POST[$$group["countries"][$keys[2]]["name"]."M3"],
        $$group["countries"][$keys[1]]["name"]=>(int)$_POST[$$group["countries"][$keys[1]]["name"]."M3"]];

    echo $$group["countries"][$keys[1]]["name"];
    echo (int )$_POST[$$group["countries"][$keys[0]]["name"]."M1"];
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

