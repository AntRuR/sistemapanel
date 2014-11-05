<?php //á
?><div style="clear:left;">Procesos</div><?php

include("lib/webutil.php");
require_once('lib/simple_html_dom.php');
chdir("base2/procesos");

set_time_limit(0);

echo '<div style="clear:left;">';
prin('fin');
echo '</div>';

include($_GET['proceso']);

echo '<div style="clear:left;">';
prin('fin');
echo '</div>';
