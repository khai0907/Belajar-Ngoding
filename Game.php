<?php
echo "welcome to my game\n";
while (true) {
echo "===== GAME TEBAK ANGKA =====\n";
echo "TEBAK ANGKA ANTARA 1 DAN 9!\n";
$computer = rand(1,9);
echo "MASUKKAN TEBAKANMU : ";
$player = trim(fgets(STDIN));
if($player == $computer) {
    echo "menang. Angka komputer $computer.\n";
    exit;
}else{
    echo "kalah. Angka komputer adalah $computer.\n";
}
}
