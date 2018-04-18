<?php

function escape($html){
	return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTES, "UTF-8");
}