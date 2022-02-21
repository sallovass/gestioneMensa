<?php
function getUtente($pdo, $uid){
	$sql = <<<SQL
		select *
		from utenti 
		where uid = :uid 
	SQL;
	
}