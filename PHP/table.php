<?php
echo "<div class='table-responsive-sm col-11 d-sm-flex justify-content-center'>
<table class='col-11' >
        <tr>
            <th>#</th>
            <th>Team</th>
            <th>MP</th>
            <th>W</th>
            <th>D</th>
            <th>L</th>
            <th>GF</th>
            <th>GA</th>
            <th>GD</th>
            <th>Pts</th>
        </tr>
        ";
$groupToSort=$group["countries"]; # define the array of countries that must be sorted
usort($groupToSort,"customSort"); #sort the countries inside the simulated group
for ($i = 0; $i < count($group["countries"]); $i++) {
    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>" . str_ireplace("_", " ", $group["countries"][$groupToSort[$i]["name"]]["name"]) . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["mp"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["w"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["d"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["l"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["gf"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["ga"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["gd"] . "</td>
            <td>" . $group["countries"][$groupToSort[$i]["name"]]["pts"] . "</td>
        </tr>";
}; // just loop to print the team and its stats
echo "
    </table>
    </div>";