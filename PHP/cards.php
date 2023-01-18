<!--groups variables are in data.php-->
<?php
foreach ($groups as $group) {
    echo "<div class='card col-3'>
            <div class='card-body'>
                <h5 class='card-title'>${group["name"]}</h5>
                <ul>";
    foreach ($group["countries"] as $country) {
        echo "
                    <li><img src='https://flagsapi.com/${country["flag"]}/flat/32.png' alt='${country["name"]}'><span>${country["name"]}</span></li>";
    }
    echo "</ul>
                <a class='btn btn-primary' data-target='" . str_ireplace(" ", "", $group["name"]) . "'>Simulate</a>
            </div>
        </div>";
} ?>
