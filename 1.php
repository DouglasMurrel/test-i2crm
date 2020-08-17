<?php
function isValidTriangle(int $a, int $b, int $c): bool {
    if(gmp_sign(gmp_sub(gmp_add($a, $b), $c))<=0)return false;
    if(gmp_sign(gmp_sub(gmp_add($a, $c), $b))<=0)return false;
    if(gmp_sign(gmp_sub(gmp_add($b, $c), $a))<=0)return false;
    return true;
}
