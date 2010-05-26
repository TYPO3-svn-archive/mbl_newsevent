<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

//$TYPO3_CONF_VARS["FE"]["XCLASS"]["ext/tt_news/pi/class.tx_ttnews.php"]=t3lib_extMgm::extPath($_EXTKEY)."class.mbl_newsevent.php";

//if(!is_array($TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'])) { $TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'] = array(); }

if (TYPO3_MODE!='BE')	{
require_once(t3lib_extMgm::extPath('mbl_newsevent').'class.mbl_newsevent.php');
}
$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraItemMarkerHook'][] = 'tx_mblnewsevent'; 

$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraCodesHook'][] = 'tx_mblnewsevent'; 

$TYPO3_CONF_VARS['EXTCONF']['tt_news']['selectConfHook'][] = 'tx_mblnewsevent';

$TYPO3_CONF_VARS['EXTCONF']['tt_news']['extraGlobalMarkerHook'][] = 'tx_mblnewsevent';
?>