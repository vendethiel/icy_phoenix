<?php exit; ?>
1411326694
SELECT character_id, SUM(character_victories + character_defeats + character_flees) AS most_active FROM ip_adr_characters GROUP BY character_id ORDER BY most_active DESC
71
a:1:{i:0;a:2:{s:12:"character_id";s:1:"2";s:11:"most_active";s:1:"0";}}