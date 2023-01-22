<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="javascript/script.js"></script>
<script type="text/javascript" >
    //this one is to make sure that the last group simulated is the one that will be shown when the form is submitted and page refreshes
    document.querySelector("#<?php if (isset($_POST["group"])){ echo str_ireplace('g','G',$_POST["group"]); }else{ echo "GroupA" ;}?>").classList.remove('hide');
    <?php
        //this one is to refill the scores that was filled the input is updated with stats table
        if (isset($_POST["group"])){
            $group = $_POST["group"];
            $keys = array_keys($$group["countries"]);
            if ($match1!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[0]]["name"]."M1').value = ".$match1[$keys[0]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[1]]["name"]."M1').value = ".$match1[$keys[1]].";";
            }
            if ($match2!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[2]]["name"]."M1').value = ".$match2[$keys[2]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[3]]["name"]."M1').value = ".$match2[$keys[3]].";";
            }
            if ($match3!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[0]]["name"]."M2').value = ".$match3[$keys[0]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[2]]["name"]."M2').value = ".$match3[$keys[2]].";";
            }
            if ($match4!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[1]]["name"]."M2').value = ".$match4[$keys[1]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[3]]["name"]."M2').value = ".$match4[$keys[3]].";";
            }
            if ($match5!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[0]]["name"]."M3').value = ".$match5[$keys[0]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[3]]["name"]."M3').value = ".$match5[$keys[3]].";";
            }
            if ($match6!= null){
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[1]]["name"]."M3').value = ".$match6[$keys[1]].";";
                echo "document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$$group["countries"][$keys[2]]["name"]."M3').value = ".$match6[$keys[2]].";";
            }
        }
    ?>

</script>
</body>
</html>