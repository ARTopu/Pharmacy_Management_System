<?php

   
    
    echo "<table border= 1px solid black>";
    echo "<tr>";
    echo "<th>pName</th>";
    echo "<th>pID</th>";
    echo "<th>age</th>";
    echo "<th>phone</th>";
    echo "<th>date</th>";
    echo "<th>address</th>";
    echo "<th>mediName</th>";
    echo "<th></th>";
    echo "</tr>";

    for($i = 0; $i<sizeof($data); ++$i){
        echo "<tr>";
        echo "<td>".$data[$i]->pName."</td>";
        echo "<td>".$data[$i]->pID."</td>";
        echo "<td>".$data[$i]->age."</td>";
        echo "<td>".$data[$i]->phone."</td>";
        echo "<td>".$data[$i]->date."</td>";
        echo "<td>".$data[$i]->address."</td>";
        echo "<td>".$data[$i]->mediName."</td>";
        echo "<td>
        <form action='../view/managePrUpdate.php' method='post'>
        <input type='hidden' name='indexno' value='".$i."'>
        <input type='submit' value ='Update'>
        </form>
        </td>";
        echo "</tr>";
    }

    echo "</table>";
    
?>
<br>
    <a href="../view/prescription.html"><input type="submit" name="back"  value="Back" ></a>
