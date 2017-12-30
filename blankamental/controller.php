<?php
namespace Concrete\Package\Blankamental;

use Package;
use PageTheme;

class Controller extends Package
{

	protected $pkgHandle = 'blankamental';
	protected $appVersionRequired = '5.7.5.2';
	protected $pkgVersion = '0.9.0';

	public function getPackageDescription()
	{
		return t('A blank theme. Contains all the Elemental areas without any surrounding html and a blank css/less file.');
	}

	public function getPackageName()
	{
		return t('Blankamental');
	}

	public function install()
	{
		$pkg = parent::install();
		PageTheme::add('blankamental', $pkg);
	}

}
