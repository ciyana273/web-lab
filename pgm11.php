<?php
$IndianPlayers = array("M S Dhoni","Ravindra Jadeja","Ruturaj Gaikward","Mohsin Khan");
echo "<table border='1'>
                  <tr>
                       <th>SL NO</th>
                       <th>Player Name</th>
                   </tr>";
$i=1;
foreach ($IndianPlayers as $Player)  {
             echo"<tr>
                             <td>$i</td>
                            <td>$Player</td>
                           </tr>";
                           $i++;
}
echo "</table>";
?>
