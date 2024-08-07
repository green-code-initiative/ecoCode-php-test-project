<?php

/* exemple 1 */

for ($i = 1; $i <= 10; ++$i) {
    echo $i;
}

/* exemple 2 */

for ($i = 1; ; ++$i) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* exemple 3 */

$i = 1;
while (true) {
    if ($i > 10) {
        break;
    }
    echo $i;
    ++$i;
}

/* exemple 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, ++$i); // NOK {{Do not call a function in for-type loop declaration}}


function somewhatCalcMax()
{
    return 500;
}


for ($i = 0; $i <= somewhatCalcMax(); ++$i) { // NOK {{Do not call a function in for-type loop declaration}}
    var_dump($i);
}

$maxI = somewhatCalcMax();
for ($i = 0; $i <= $maxI; ++$i) { // COMPLIANT
    var_dump($i);
}
