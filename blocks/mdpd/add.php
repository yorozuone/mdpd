<?php
    // ���܂��Ȃ�
    defined('C5_EXECUTE') or die(_("Access Denied."));
    // �t�H�[���w���p�[�ǂݍ���
    $form = Core::make('helper/form');
?>
<label class="control-label"><?php echo t('MarkDownText')?></label>
<?php echo $form->textarea('content', '', array('style' => 'width:100%;height:340px')) ?>