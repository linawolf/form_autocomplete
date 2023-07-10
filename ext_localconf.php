<?php


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}

ExtensionManagementUtility::addTypoScriptSetup('@import \'EXT:form_autocomplete/Configuration/TypoScript/setup.typoscript\'');
