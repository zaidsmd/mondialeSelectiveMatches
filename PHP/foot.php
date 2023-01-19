<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="javascript/script.js"></script>
<script type="text/javascript" >
    document.querySelector("#<?php if (isset($_POST["group"])){ echo str_ireplace('g','G',$_POST["group"]); }else{ echo "GroupA" ;}?>").classList.remove('hide');
    <?php
        if ((isset($_POST["group"]))){
//            echo "
//            document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$group["countries"][$keys[0]]["name"]."M1').value =".$match1[$group["countries"][$keys[0]]["name"]].";
//            ";
//            echo "
//            document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$group["countries"][$keys[1]]["name"]."M1').value =".$match1[$group["countries"][$keys[1]]["name"]]."
//            ";
//            echo "
//            document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$group["countries"][$keys[2]]["name"]."M1').value =".$match2[$group["countries"][$keys[2]]["name"]]."
//            ";
//            echo "
//            document.querySelector('#".str_ireplace('g','G',$_POST["group"])." #".$group["countries"][$keys[3]]["name"]."M1').value =".$match2[$group["countries"][$keys[3]]["name"]]."
//            ";
        }
    ?>
</script>
</body>
</html>