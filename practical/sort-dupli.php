<?php

$data = [5, 2, 6, 9, 4, 8, 9, 0, 2, 3, 3, 3, 4, 5, 5];

$count = 0;

foreach ($data as $val) {
    $count++;
};

// sorting 

for ($i = 0; $i < $count; $i++) {

    for ($j = $i + 1; $j < $count; $j++) {

        if ($data[$i] > $data[$j]) {
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }
}

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$newdata = [];
$ucount = 0;




for ($i = 0; $i < $count; $i++) {
    $found = false;

    for ($j = 0; $j < $ucount; $j++) {
        if ($data[$i] == $newdata[$j]) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $newdata[$ucount] = $data[$i];
        $ucount++;
    }
};

echo"<pre>";
print_r($newdata);
echo"</pre>";
