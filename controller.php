<?php
namespace Concrete\Package\Mdpd;

use Package;
use BlockType;
use SinglePage;
use Loader;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package {

  protected $pkgHandle = "mdpd";
  protected $appVersionRequired = "5.5";
  protected $pkgVersion = "1.0";

  public function getPackageName() {
    return t('MDPD');
  }

  public function getPackageDescription() {
    return t('To indicate markdowntext by using parsedown library.');
  }

	public function install() {
    $pkg = parent::install();
		// install list block
    BlockType::installBlockTypeFromPackage('mdpd', $pkg);
	}
}
