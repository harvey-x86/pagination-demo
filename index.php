<?php
    $curPage = intval($_GET["current"]) ?? 0;
    
    $prev = ($curPage <= 0) ? $curPage : ($curPage - 2);
    $next = $curPage + 2;
?>
<html>

    <body>
        <h1>HOPE THIS HELPS - HARVEY :)</h1>
        <table>
            <tr><th>Full Name</th><th>Email Address</th></tr>
            <?php
                $connection = new mysqli("", "", "", "");
                
                $q = $connection -> query("SELECT fullname, email FROM ash_test LIMIT 2 OFFSET {$curPage}");
                
                while ($row = $q -> fetch_assoc()) {
                    echo "<tr><td>{$row['fullname']}</td><td>{$row['email']}</td></tr>";
                }
                
                echo "</table><a href=\"http://harveycoombs.com/tetsing/?current={$prev}\">Prev.</a><a href=\"http://harveycoombs.com/tetsing/?current={$next}\">Next</a>";
            ?>
    </body>

</html>
