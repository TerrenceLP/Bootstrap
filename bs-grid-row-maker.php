<?php
$parties = array("foo", "bar", "hello", "world", "xxx", "876", "777");
$rowgrid = '<div class="row">';
$count = 0;
$numOfCols = 3;
$bootstrapColWidth = 4 / $numOfCols;

        foreach ($parties as $key => $value) {
            
              $rowgrid .= '<div class="col-md-'.$bootstrapColWidth.'">'.$value.' <br> Title of Party <br> Event Date</div>';
            
            $count++;
            if ($count % $numOfCols == 0) {
              $rowgrid .= '</div><div class="row">';
            }
            
        }

$rowgrid .= '</div>';
echo $rowgrid;
?>
