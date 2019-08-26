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
use Joomla\Database\DatabaseDriver;

/**
 * Foo plugin.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0
 */
class plgExtensionFoo extends CMSPlugin
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
	 * @var    DatabaseDriver
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
	 * Event Triggered in the compiler [on Before Get]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeGet(&$config, $compiler)
	{
		// do something on the jcb_ce_onBeforeGet event
	}

	/**
	 * Event Triggered in the compiler [on After Get]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterGet(&$context, $compiler)
	{
		// do something on the jcb_ce_onAfterGet event
	}

	/**
	 * Event Triggered in the compiler [on Before Query Component Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeQueryComponentData(&$context, &$id, &$query, &$db)
	{
		// do something on the jcb_ce_onBeforeQueryComponentData event
	}

	/**
	 * Event Triggered in the compiler [on Before Model Component Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeModelComponentData(&$context, &$component)
	{
		// do something on the jcb_ce_onBeforeModelComponentData event
	}

	/**
	 * Event Triggered in the compiler [on After Model Component Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterModelComponentData(&$context, &$component)
	{
		// do something on the jcb_ce_onAfterModelComponentData event
	}

	/**
	 * Event Triggered in the compiler [on Before Query View Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeQueryViewData(&$context, &$id, &$query, &$db)
	{
		// do something on the jcb_ce_onBeforeQueryViewData event
	}

	/**
	 * Event Triggered in the compiler [on Before Model View Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeModelViewData(&$context, &$view, &$placeholders)
	{
		// do something on the jcb_ce_onBeforeModelViewData event
	}

	/**
	 * Event Triggered in the compiler [on After Model View Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterModelViewData(&$context, &$view, &$placeholders)
	{
		// do something on the jcb_ce_onAfterModelViewData event
	}

	/**
	 * Event Triggered in the compiler [on Before Query Custom View Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeQueryCustomViewData(&$context, &$id, &$table, &$query, &$db)
	{
		// do something on the jcb_ce_onBeforeQueryCustomViewData event
	}

	/**
	 * Event Triggered in the compiler [on Before Model Custom View Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeModelCustomViewData(&$context, &$view, &$id, &$table)
	{
		// do something on the jcb_ce_onBeforeModelCustomViewData event
	}

	/**
	 * Event Triggered in the compiler [on After Model Custom View Data]
	 *

	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterModelCustomViewData(&$context, &$view)
	{
		// do something on the jcb_ce_onAfterModelCustomViewData event
	}

	/**
	 * Event Triggered in the compiler [on Before Query Field Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeQueryFieldData(&$context, &$id, &$query, &$db)
	{
		// do something on the jcb_ce_onBeforeQueryFieldData event
	}

	/**
	 * Event Triggered in the compiler [on Before Model Field Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeModelFieldData(&$context, &$field)
	{
		// do something on the jcb_ce_onBeforeModelFieldData event
	}

	/**
	 * Event Triggered in the compiler [on After Model Field Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterModelFieldData(&$context, &$field)
	{
		// do something on the jcb_ce_onAfterModelFieldData event
	}

	/**
	 * Event Triggered in the compiler [on After Set Joomla Version Data]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterSetJoomlaVersionData(&$context, &$joomlaVersionData)
	{
		// do something on the jcb_ce_onAfterSetJoomlaVersionData event
	}

	/**
	 * Event Triggered in the compiler [on Before Set Libaries]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeSetLibaries(&$context, &$libraries)
	{
		// do something on the jcb_ce_onBeforeSetLibaries event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Fields]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildFields(&$context, &$dynamicFields, &$readOnly, &$dbkey, &$view, &$component, &$view_name_single, &$view_name_list, &$placeholders, &$langView, &$langViews)
	{
		// do something on the jcb_ce_onBeforeBuildFields event
	}

	/**
	 * Event Triggered in the compiler [on After Build Fields]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildFields(&$context, &$dynamicFields, &$readOnly, &$dbkey, &$view, &$component, &$view_name_single, &$view_name_list, &$placeholders, &$langView, &$langViews)
	{
		// do something on the jcb_ce_onAfterBuildFields event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Files Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildFilesContent(&$context, &$componentData, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildFilesContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Admin Edit View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAdminEditViewContent(&$context, &$view, &$viewName_single, &$viewName_list, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildAdminEditViewContent event
	}

	/**
	 * Event Triggered in the compiler [on After Build Admin Edit View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAdminEditViewContent(&$context, &$view, &$viewName_single, &$viewName_list, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onAfterBuildAdminEditViewContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Admin List View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAdminListViewContent(&$context, &$view, &$viewName_single, &$viewName_list, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildAdminListViewContent event
	}

	/**
	 * Event Triggered in the compiler [on After Build Admin List View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAdminListViewContent(&$context, &$view, &$viewName_single, &$viewName_list, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildAdminListViewContent event
	}

	/**
	 * Event Triggered in the compiler [on After Build Admin List View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAdminViewContent(&$context, &$view, &$viewName_single, &$viewName_list, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onAfterBuildAdminViewContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Custom Admin View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildCustomAdminViewContent(&$context, &$view, &$code, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildCustomAdminViewContent event
	}

	/**
	 * Event Triggered in the compiler [on After Build Custom Admin View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildCustomAdminViewContent(&$context, &$view, &$code, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onAfterBuildCustomAdminViewContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Site View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildSiteViewContent(&$context, &$view, &$code, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onBeforeBuildSiteViewContent event
	}

	/*
	 * Event Triggered in the compiler [on After Build Site View Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildSiteViewContent(&$context, &$view, &$code, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onAfterBuildSiteViewContent event
	}

	/**
	 * Event Triggered in the compiler [on After Build Files Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildFilesContent(&$context, &$componentData, &$fileContentStatic, &$fileContentDynamic, &$placeholders, &$hhh)
	{
		// do something on the jcb_ce_onAfterBuildFilesContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Admin Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAdminLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onBeforeBuildAdminLang event
	}

	/**
	 * Event Triggered in the compiler [on After Build Admin Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAdminLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onAfterBuildAdminLang event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Site Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildSiteLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onBeforeBuildSiteLang event
	}

	/**
	 * Event Triggered in the compiler [on After Build Site Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildSiteLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onAfterBuildSiteLang event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Site Sys Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildSiteSysLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onBeforeBuildSiteSysLang event
	}

	/**
	 * Event Triggered in the compiler [on After Build Site Sys Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildSiteSysLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onAfterBuildSiteSysLang event
	}

	/**
	 * Event Triggered in the compiler [on Before Build Admin Sys Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAdminSysLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onBeforeBuildAdminSysLang event
	}

	/**
	 * Event Triggered in the compiler [on After Build Admin Sys Lang]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAdminSysLang(&$context, &$langContent, &$langPrefix, &$componentName)
	{
		// do something on the jcb_ce_onAfterBuildAdminSysLang event
	}

	/**
	 * Event Triggered in the compiler [on Before Build All Lang Files]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAllLangFiles(&$context, &$languages, &$langTag)
	{
		// do something on the jcb_ce_onBeforeBuildAllLangFiles event
	}

	/**
	 * Event Triggered in the compiler [on Before Set File Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeSetFileContent(&$context, &$name, &$path, &$bom, &$view)
	{
		// do something on the jcb_ce_onBeforeSetFileContent event
	}

	/**
	 * Event Triggered in the compiler [on Get File Contents]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onGetFileContents(&$context, &$content, &$name, &$path, &$bom, &$view)
	{
		// do something on the jcb_ce_onGetFileContents event
	}

	/**
	 * Event Triggered in the compiler [on Before Set File Content]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeWriteFileContent(&$context, &$content, &$name, &$path, &$bom, &$view)
	{
		// do something on the jcb_ce_onBeforeWriteFileContent event
	}

	/**
	 * Event Triggered in the compiler [on Before Set Config Fieldsets]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeSetConfigFieldsets(&$context, &$timer, &$configFieldSets, &$configFieldSetsCustomField, &$componentDataConfig, &$extensionsParams, &$placeholders)
	{
		// do something on the jcb_ce_onBeforeSetConfigFieldsets event
	}

	/**
	 * Event Triggered in the compiler [on After Set Config Fieldsets]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterSetConfigFieldsets(&$context, &$timer, &$configFieldSets, &$configFieldSetsCustomField, &$extensionsParams, &$frontEndParams, &$placeholders)
	{
		// do something on the jcb_ce_onAfterSetConfigFieldsets event
	}

	/**
	 * Event Triggered in the compiler [on Before Update Repo]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeUpdateRepo(&$context, &$componentPath, &$repoFullPath, &$componentData)
	{
		// do something on the jcb_ce_onBeforeUpdateRepo event
	}

	/**
	 * Event Triggered in the compiler [on After Update Repo]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterUpdateRepo(&$context, &$componentPath, &$repoFullPath, &$componentData)
	{
		// do something on the jcb_ce_onAfterUpdateRepo event
	}

	/**
	 * Event Triggered in the compiler [on Before Zip Component]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeZipComponent(&$context, &$componentPath, &$filepath, &$tempPath, &$componentFolderName, &$componentData)
	{
		// do something on the jcb_ce_onBeforeZipComponent event
	}

	/**
	 * Event Triggered in the compiler [on Before Backup Zip]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBackupZip(&$context, &$filepath, &$tempPath, &$backupPath, &$componentData)
	{
		// do something on the jcb_ce_onBeforeBackupZip event
	}

	/**
	 * Event Triggered in the compiler [on Before Move To Server]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeMoveToServer(&$context, &$filepath, &$tempPath, &$componentSalesName, &$componentData)
	{
		// do something on the jcb_ce_onBeforeMoveToServer event
	}

	/**
	 * Event Triggered in the compiler [on After Zip Component]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterZipComponent(&$context, &$filepath, &$tempPath, &$componentFolderName, &$componentData)
	{
		// do something on the jcb_ce_onAfterZipComponent event
	}

	/**
	 * Event Triggered in the compiler [on Before Zip Plugin]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeZipPlugin(&$context, &$filepath, &$tempPath, &$pluginFolderName, &$pluginData)
	{
		// do something on the jcb_ce_onBeforeZipPlugin event
	}

	/**
	 * Event Triggered in the compiler [on After Zip Plugin]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterZipPlugin(&$context, &$filepath, &$tempPath, &$pluginFolderName, &$pluginData)
	{
		// do something on the jcb_ce_onAfterZipPlugin event
	}

	/**
	 * onExtensionAfterUpdate.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onExtensionAfterUpdate($installer, $extention_id)
	{

	}

	/**
	 * Event Triggered in the compiler [on Before Build Access Sections]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onBeforeBuildAccessSections(&$context, $compiler)
	{
		// do something on the jcb_ce_onBeforeBuildAccessSections event
	}

	/**
	 * Event Triggered in the compiler [on After Build Access Sections]
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function jcb_ce_onAfterBuildAccessSections(&$context, $compiler)
	{
		// do something on the jcb_ce_onAfterBuildAccessSections event
	}

}
