<?php

include('./internlink.php');
?>

        <?php
        
        $select_query="SELECT * FROM `icompany` ";
        $result_query=mysqli_query($con,$select_query);

        while($row=mysqli_fetch_assoc($result_query))
        {
          $cid=$row['cid'];
          $iname=$row['iname'];
          $cimage=$row['cimage'];
          echo "   <div class='responsive '>
          <div class='container-envelope'>
            <svg class='cirle-a' height='160' width='160'>
              <circle cx='80' cy='80' r='80' />
            </svg>
            <svg class='cirle-b' height='60' width='60'>
              <circle cx='30' cy='30' r='30' />
            </svg>
            <svg class='cirle-c' height='600' width='600'>
              <circle cx='300' cy='300' r='300' />
            </svg>
            <svg class='cirle-d' height='60' width='60'>
              <circle cx='30' cy='30' r='30' />
            </svg>
            <img src='./assets/$cimage' >
            <div class='col-xs-12'>
              <p>$iname</p>
              <a target='_blank' href='comp.php?cid=$cid' class='more-link'>KNOW MORE</a>
            </div>
          </div>
          </div>";
        }
        ?>
        



       


