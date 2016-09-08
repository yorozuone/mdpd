<?php
namespace Concrete\Package\Mdpd\Block\Mdpd;
use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {

  protected $btTable = 'btMDPD';
  protected $btInterfaceWidth = "600";
  protected $btWrapperClass = 'ccm-ui';
  protected $btInterfaceHeight = "500";
  protected $btCacheBlockRecord = true;
  protected $btCacheBlockOutput = true;
  protected $btCacheBlockOutputOnPost = true;
  protected $btCacheBlockOutputForRegisteredUsers = true;
  protected $btIgnorePageThemeGridFrameworkContainer = true;

  public $content = "";

  public function getBlockTypeName() {
    return t("MDPD");
  }

  public function getBlockTypeDescription() {
    return t("To indicate markdowntext by using parsedown library.");
  }


  public function view() {
    $this->set('content', $this->content);
  }

  public function save($data) {
    $args['content'] = isset($data['content']) ? $data['content'] : '';
    parent::save($args);
  }

}
