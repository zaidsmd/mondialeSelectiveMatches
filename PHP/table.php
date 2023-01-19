<?php
echo "<table class='col-10'>
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
for ($i=0; $i< count($group["countries"]);$i++){
    echo "<tr>
            <td>".($i+1)."</td>
            <td>".str_ireplace("_"," ",$group["countries"][$keys[$i]]["name"])."</td>
            <td>".$group["countries"][$keys[$i]]["mp"]."</td>
            <td>".$group["countries"][$keys[$i]]["w"]."</td>
            <td>".$group["countries"][$keys[$i]]["d"]."</td>
            <td>".$group["countries"][$keys[$i]]["l"]."</td>
            <td>".$group["countries"][$keys[$i]]["gf"]."</td>
            <td>".$group["countries"][$keys[$i]]["ga"]."</td>
            <td>".$group["countries"][$keys[$i]]["gd"]."</td>
            <td>".$group["countries"][$keys[$i]]["pts"]."</td>
        </tr>";
}; echo "
    </table>";