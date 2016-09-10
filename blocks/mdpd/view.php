<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  require_once('parsedown/MyParsedown.php');
?>
<div id="MDPD<?php echo intval($bID)?>" class="MDPD">
<?php
  echo MyParsedown::instance()->setMarkupEscaped(true)->setBreaksEnabled(true)->text($content);
?>
</div>
