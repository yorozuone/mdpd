<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  require_once('parsedown/MyParsedown.php');
?>
<div id="PHPMarkDownBlock<?php echo intval($bID)?>" class="\MarkDownTextPD">
<?php
  echo MyParsedown::instance()->setMarkupEscaped(true)->setBreaksEnabled(true)->text($content);
?>
</div>
