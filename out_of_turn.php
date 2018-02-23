         <?php

        mysql_connect("localhost", "root", "") or die (mysql_error ());

        mysql_select_db("reg") or die(mysql_error());

            $strSQL = "SELECT * FROM users_alpha";

            $rs = mysql_query($strSQL);

            while($row = mysql_fetch_array($rs)) {

      echo 

      } 

        ?> 