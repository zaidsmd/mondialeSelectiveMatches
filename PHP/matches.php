<?php
// here to make matches print dynamically I have to pass by every possible match what gives me 6 cards then loops them for other groups with unique id and data
foreach ($groups as $group) {
    $keys = array_keys($group["countries"]); // this one here is to get the name of country then use its index to make the process dynamically to all groups
    echo "
    <form action='" . htmlspecialchars($_SERVER["PHP_SELF"])."#".str_ireplace(" ", "", $group["name"]) . "' id='" . str_ireplace(" ", "", $group["name"]) . "' class='hide' method='post'>
    <div class='container d-flex flex-wrap col-12'>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 1</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "M1'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M1' id='" . $group["countries"][$keys[0]]["name"] . "M1'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M1' id='" . $group["countries"][$keys[1]]["name"] . "M1'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "M1'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 2</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M1' id='" . $group["countries"][$keys[2]]["name"] . "M1'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M1' id='" . $group["countries"][$keys[3]]["name"] . "M1'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "M1'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 3</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "M2'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M2' id='" . $group["countries"][$keys[2]]["name"] . "M2'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M2' id='" . $group["countries"][$keys[0]]["name"] . "M2'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "M2'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 4</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "M2'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M2' id='" . $group["countries"][$keys[3]]["name"] . "M2'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M2' id='" . $group["countries"][$keys[1]]["name"] . "M2'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "M2'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 5</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[0]]["name"] . "M3'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[0]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[0]]["name"] . "M3' id='" . $group["countries"][$keys[0]]["name"] . "M3'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[3]]["name"] . "M3' id='" . $group["countries"][$keys[3]]["name"] . "M3'>
                    <label for='" . $group["countries"][$keys[3]]["name"] . "M3'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[3]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
        <div class='card 10 col-lg-5'>
            <div class='card-body'>
                <h5 class='card-title'>Match 6</h5>
                <div class='form'>
                    <label for='" . $group["countries"][$keys[2]]["name"] . "M3'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[2]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                    <input type='text' name='" . $group["countries"][$keys[2]]["name"] . "M3' id='" . $group["countries"][$keys[2]]["name"] . "M3'>
                    <div>
                        <div class='circle'></div>
                        <div class='circle'></div>
                    </div>
                    <input type='text' name='" . $group["countries"][$keys[1]]["name"] . "M3' id='" . $group["countries"][$keys[1]]["name"] . "M3'>
                    <label for='" . $group["countries"][$keys[1]]["name"] . "M3'>
                        <img src='https://flagsapi.com/" . $group["countries"][$keys[1]]["flag"] . "/flat/64.png' alt='coutry flag'>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <p class='error'>Please enter a positive integer numebr.</p>
    <input type='text' class='hide' name='group' value='" . str_ireplace("G", "g", str_ireplace(" ", "", $group["name"])) . "'>
    <input type='submit' class='btn btn-primary' value='Simulate'>";
    include "PHP/table.php";
    echo "</form>";
}
//the line 124 is a hidden input, so I can know what group is simulated to make sure after the button click
// the same group is shown and not switched back to the default group which is Group A # check <script> in foot.php to understand more #