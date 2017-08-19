<?php
//function is a security measure that returns escaped output to prevent scripts being ran through database entries
function e($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}