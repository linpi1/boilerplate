<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

defined('_JEXEC') or die;

use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Foo plugin.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0
 */
class plgInstallerFoo extends CMSPlugin
{
	/**
	 * Application object
	 *
	 * @var    CMSApplication
	 * @since  1.0.0
	 */
	protected $app;

	/**
	 * Database object
	 *
	 * @var    JDatabaseDriver
	 * @since  1.0.0
	 */
	protected $db;

	/**
	 * Affects constructor behavior. If true, language files will be loaded automatically.
	 *
	 * @var    boolean
	 * @since  1.0.0
	 */
	protected $autoloadLanguage = true;

	/**
	 * onInstallerBeforePackageDownload.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onInstallerBeforePackageDownload(&$url, &$headers)
	{

	}

	/**
	 * onExtensionAfterUpdate.
	 *
	 * @param   string  $context  The context of the content being passed to the plugin.
	 * @param   array   $eid      Extension ids to un/publish
	 * @param   int     $value    Publish value
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onExtensionAfterUpdate($context, $eid, $value)
	{

	}

	/**
	 * onInstallerBeforeDisplay.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onInstallerBeforeDisplay(&$showJedAndWebInstaller, &$displayObject)
	{

	}

	/**
	 * onInstallerViewBeforeFirstTab.
	 *
	 * @return  array of tabs
	 *
	 * @since   1.0
	 */
	public function onInstallerViewBeforeFirstTab($tabs = array())
	{
		return $tabs;
	}

	/**
	 * onInstallerAddInstallationTab.
	 *
	 * @return  array of tabs
	 *
	 * @since   1.0
	 */
	public function onInstallerAddInstallationTab($tabs = array())
	{
		return $tabs;
	}

	/**
	 * onInstallerViewAfterLastTab.
	 *
	 * @return  array of tabs
	 *
	 * @since   1.0
	 */
	public function onInstallerViewAfterLastTab($tabs = array())
	{
		return $tabs;
	}

	/**
	 * onInstallerBeforeInstallation.
	 * 
	 * This event allows an input pre-treatment, a custom pre-packing or custom installation.
	 * (e.g. from a JSON description).
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 */
	public function onInstallerBeforeInstallation($model, &$package)
	{
		
	}

	/**
	 * onInstallerBeforeInstaller.
	 * 
	 * This event allows a custom installation of the package or a customization of the package:
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 */
	public function onInstallerBeforeInstaller($model, &$package)
	{
		
	}

	/**
	 * onInstallerAfterInstaller.
	 * 
	 * This event allows a custom a post-flight
	 *
	 * @return  boolean
	 *
	 * @since   1.0
	 */
	public function onInstallerAfterInstaller($model, &$package, $installer, &$result, &$msg)
	{
		
	}
}
