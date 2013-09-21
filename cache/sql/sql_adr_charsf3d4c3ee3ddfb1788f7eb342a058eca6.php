<?php exit; ?>
1411326602
SELECT character_id, SUM(character_victories + character_defeats + character_flees) AS most_active FROM ADR_CHARACTERS_TABLE GROUP BY character_id ORDER BY most_active DESC
2
N;