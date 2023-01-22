<?php
// create the cards of groups with the custom button attr and data from data.php
foreach ($groups as $group) {
    echo "<div class='card col-lg-3 col-sm-5 col-10 '>
            <div class='card-body'>
                <h5 class='card-title'>${group["name"]}</h5>
                <ul>";
    foreach ($group["countries"] as $country) {
        echo "
                    <li><img src='https://flagsapi.com/${country["flag"]}/flat/32.png' alt='${country["name"]}'><span>".str_ireplace("_"," ",$country["name"])."</span></li>";
    }
    echo "</ul>
                <a class='btn btn-primary' href='#".str_ireplace(" ","",$group["name"])."' data-target='" . str_ireplace(" ","",$group["name"]) . "'>Simulate</a>
            </div>
        </div>";
}
