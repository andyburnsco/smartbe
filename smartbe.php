<?php

require_once 'smartbe.civix.php';

//CRM_Core_Resources::singleton()->addStyleFile('com.example.foo', 'bar.css');

/**
 * Implementation of hook_civicrm_config
 */
function smartbe_civicrm_config(&$config) {
  _smartbe_civix_civicrm_config($config);
}

function smartbe_civicrm_dashboard( $contactID, &$contentPlacement ) {
  CRM_Core_Resources::singleton()->addStyle(<<<EOT
#civicrm-dashboard h1 { font-size:12px; }
#crm-container .column {float:none;}
#crm-container .column-0, #crm-container .column-1 {width:100%;}

EOT
);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function smartbe_civicrm_xmlMenu(&$files) {
  _smartbe_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function smartbe_civicrm_install() {
  return _smartbe_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function smartbe_civicrm_uninstall() {
  return _smartbe_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function smartbe_civicrm_enable() {
  return _smartbe_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function smartbe_civicrm_disable() {
  return _smartbe_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function smartbe_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _smartbe_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function smartbe_civicrm_managed(&$entities) {
  return _smartbe_civix_civicrm_managed($entities);
}
