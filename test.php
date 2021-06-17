<?php
    include 'connect.php';
    function generateTableFromResult($result) {
        $html = "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            $keys=array_keys($row);
            $values=array_values($row);
            $html.="<tr>";
            foreach($keys as $key){
                $html.="<th>".$key."</th>";
            }
            $html.="</tr><tr>";
            foreach($values as $value){
                $html.="<td>".$value."</td>";
            }
            $html.="</tr>";
        }
        $html.="</table>";
        return $html;
     }
     
     
     // usage:
     // ...
     $result1 = mysqli_query($dbconnect, "SELECT * FROM pelanggan");
     echo generateTableFromResult($result1);
?>