<?php
namespace Concrete\Package\Mdpd;

use Package;
use BlockType;
use Concrete\Core\Block\BlockType\Set as BlockTypeSet;
use Loader;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

  protected $pkgHandle = "mdpd";
  protected $appVersionRequired = "5.7";
  protected $pkgVersion = "1.0.3";

  public function getPackageName() {
    return t('MDPD');
  }

  public function getPackageDescription() {
    return t('To indicate markdowntext by using parsedown library.');
  }

	public function install() {

    $pkg = parent::install();

    BlockType::installBlockTypeFromPackage('mdpd', $pkg);

    $bt = BlockType::getByHandle('mdpd');
    $btSet = BlockTypeSet::getByHandle('basic');

    if (is_object($bt) && is_object($btSet)) {
      $btSet->addBlockType($bt);
    }

	}

  public function upgrade() {

    parent::upgrade();

    $bt = BlockType::getByHandle('mdpd');

    $btSet = BlockTypeSet::getByHandle('basic');

    if (is_object($bt) && is_object($btSet)) {
      $btSet->addBlockType($bt);
    }

  }

}
