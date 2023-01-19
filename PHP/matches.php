<?php
foreach ($groups as $group) {
    $keys = array_keys($group["countries"]);
    echo "
    <form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' id='" . str_ireplace(" ", "", $group["name"]) . "' class='hide' method='post'>
    <div class='container d-flex flex-wrap col-12'>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 1</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M1' id='" . $group["countries"][$keys[0]]["name"] . "M1'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M1' id='" . $group["countries"][$keys[1]]["name"] . "M1'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 2</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M1' id='" . $group["countries"][$keys[2]]["name"] . "M1'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M1' id='" . $group["countries"][$keys[3]]["name"] . "M1'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 3</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M2' id='" . $group["countries"][$keys[2]]["name"] . "M2'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M2' id='" . $group["countries"][$keys[0]]["name"] . "M2'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 4</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M2' id='" . $group["countries"][$keys[3]]["name"] . "M2'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M2' id='" . $group["countries"][$keys[1]]["name"] . "M2'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 5</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M3' id='" . $group["countries"][$keys[0]]["name"] . "M3'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M3' id='" . $group["countries"][$keys[3]]["name"] . "M3'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card col-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 6</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M3' id='" . $group["countries"][$keys[2]]["name"] . "M3'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M3' id='" . $group["countries"][$keys[1]]["name"] . "M3'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "M3'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png'>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <input type='text' class='hide' name='group' value='" . str_ireplace("G", "g", str_ireplace(" ", "", $group["name"])) . "'>
    <input type='submit' value='Simulate'>";
    include "PHP/table.php";
    echo "</form>";
}