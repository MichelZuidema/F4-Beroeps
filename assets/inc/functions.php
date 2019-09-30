<?php
/**
 *
 * Hashes an integer
 *
 * @param  int $n integer to hash
 * @link   https://stackoverflow.com/questions/24350891/how-to-encrypt-decrypt-an-integer-in-php
 * @return int
 */
function numhash($n) {
    return (((0x0000FFFF & $n) << 16) + ((0xFFFF0000 & $n) >> 16));
}
?>