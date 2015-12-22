<?php
$size = 300;
$image=imagecreatetruecolor($size, $size);
$x1 = 200; $y1 = 200;
$x2 = 400; $y2 = 100;
$color = imagecolorallocate($image, 75, 75, 75);

// // 用白色背景加黑色边框画个方框
// $back = imagecolorallocate($image, 255, 255, 255);
// $border = imagecolorallocate($image, 0, 0, 0);
// imagefilledrectangle($image, 0, 0, $size - 1, $size - 1, $back);
// imagerectangle($image, 0, 0, $size - 1, $size - 1, $border);

// $yellow_x = 100;
// $yellow_y = 75;
// $red_x    = 120;
// $red_y    = 165;
// $blue_x   = 187;
// $blue_y   = 125;
// $radius   = 150;

// // 用 alpha 值分配一些颜色
// $yellow = imagecolorallocatealpha($image, 255, 255, 0, 75);
// $red    = imagecolorallocatealpha($image, 255, 0, 0, 75);
// $blue   = imagecolorallocatealpha($image, 0, 0, 255, 75);

// // 画三个交迭的圆
// imagefilledellipse($image, $yellow_x, $yellow_y, $radius, $radius, $yellow);
// imagefilledellipse($image, $red_x, $red_y, $radius, $radius, $red);
// imagefilledellipse($image, $blue_x, $blue_y, $radius, $radius, $blue);

// // 不要忘记输出正确的 header！
// header('Content-type: image/png');

// // 最后输出结果
// imagepng($image);
// imagedestroy($image);
// $im = imagecreate(100,100);

// $string = 'Note that the first letter is a N';

// $bg = imagecolorallocate($im, 255, 255, 255);
// $black = imagecolorallocate($im, 0, 0, 0);

// // prints a black "Z" on a white background
// imagecharup($im, 3, 10, 10, $string, $black);

// header('Content-type: image/png');
// imagepng($im);
// $img = imagecreatetruecolor(450, 450);
// $white = imagecolorallocate($img, 255, 255, 255);
// $red = imagecolorallocate($img, 255, 0, 0);
// $black = imagecolorallocate($img, 0, 0, 0);
// $grey = imagecolorallocate($img, 211, 211, 211);

// imagefill($img, 0, 0, $white);
// imagearc($img, 224, 224, 400, 400, 0, 0, $black);
// imagefilledarc($img, 224, 224, 15, 15, 0, 0, $black, IMG_ARC_PIE);

// for ($zz = 0; $zz < 60; $zz++) {
//     $digitCoords['x'][] = 175 * cos(deg2rad(($zz-10) * (360/60))) + 224;
//     $digitCoords['y'][] = 175 * sin(deg2rad(($zz-10) * (360/60))) + 224;
// }

// for ($zz = 0; $zz < 60; $zz++) {
//     if ($zz % 5 == 0)
//         imagestring($img, 5, $digitCoords['x'][$zz] - 4, $digitCoords['y'][$zz] - 6, ($zz/5) + 1, $black);
//     else
//         imagefilledarc($img, $digitCoords['x'][$zz], $digitCoords['y'][$zz], 3, 3, 0, 0, $grey, IMG_ARC_PIE);
// }

// $seconds = date('s');
// $minutes = date('i') + ($seconds/60);
// $hours = date('h') + ($minutes/60);

// $r_sec = 175;
// $r_min = 175;
// $r_hr = 125;

// $x_sec = $r_sec * cos(deg2rad(($seconds-15) * (360/60))) + 224;
// $y_sec = $r_sec * sin(deg2rad(($seconds-15) * (360/60))) + 224;

// $x_min = $r_min * cos(deg2rad(($minutes-15) * (360/60))) + 224;
// $y_min = $r_min * sin(deg2rad(($minutes-15) * (360/60))) + 224;

// $x_hr = $r_hr * cos(deg2rad(($hours-3) * (360/12))) + 224;
// $y_hr = $r_hr * sin(deg2rad(($hours-3) * (360/12))) + 224;

// imageline($img, 224, 224, $x_sec, $y_sec, $red);
// imagesetthickness($img, 3);
// imageline($img, 224, 224, $x_min, $y_min, $black);
// imagesetthickness($img, 5);
// imageline($img, 224, 224, $x_hr, $y_hr, $black);

// header("Content-type: image/png");
// imagepng($img);

// imagedestroy($img);
function imagelinethick($image, $x1, $y1, $x2, $y2, $color, $thick = 1)
{
    /* 下面两行只在线段直角相交时好使
    imagesetthickness($image, $thick);
    return imageline($image, $x1, $y1, $x2, $y2, $color);
    */
    if ($thick == 1) {
        return imageline($image, $x1, $y1, $x2, $y2, $color);
    }
    $t = $thick / 2 - 0.5;
    if ($x1 == $x2 || $y1 == $y2) {
        return imagefilledrectangle($image, round(min($x1, $x2) - $t), round(min($y1, $y2) - $t), round(max($x1, $x2) + $t), round(max($y1, $y2) + $t), $color);
    }
    $k = ($y2 - $y1) / ($x2 - $x1); //y = kx + q
    $a = $t / sqrt(1 + pow($k, 2));
    $points = array(
        round($x1 - (1+$k)*$a), round($y1 + (1-$k)*$a),
        round($x1 - (1-$k)*$a), round($y1 - (1+$k)*$a),
        round($x2 + (1+$k)*$a), round($y2 - (1-$k)*$a),
        round($x2 + (1-$k)*$a), round($y2 + (1+$k)*$a),
    );
    imagefilledpolygon($image, $points, 4, $color);
    return imagepolygon($image, $points, 4, $color);
}
imagelinethick($image, $x1, $y1, $x2, $y2, $color, $thick = 1)

?>