<?php
//���� �� ���� � PVP �� �����-�������� � WOW
$Enemy = 110;
$YourLVL = 100;
$Storm = ('Cast Divine storm');
$Bubble = ('Cast Bubble+homestone');
If ($YourLVL > $Enemy) {
	echo ($Storm);
} elseif ($YourLVL === $Enemy) {
	echo ($Bubble);
} else {
	echo '���� �� �� �� ������� �����!';
}