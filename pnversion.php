<?php
 /**
 * Load the module version information
 *
 * @author		Albert PÃ©rez Monfort (aperezm@xtec.cat)
 * @return		The version information
 */
$dom = ZLanguage::getModuleDomain('iw_forms');
$modversion['name'] = 'iw_forms';
$modversion['version'] = '2.1';
$modversion['description'] = __('Description', $dom);
$modversion['displayname']    = __('IWForms', $dom);
$modversion['url'] = __('iw_forms', $dom);
$modversion['credits'] = 'pndocs/credits.txt';
$modversion['help'] = 'pndocs/help.txt';
$modversion['changelog'] = 'pndocs/changelog.txt';
$modversion['license'] = 'pndocs/license.txt';
$modversion['official'] = 0;
$modversion['author'] = 'Albert Pérez Monfort';
$modversion['contact'] = 'aperezm@xtec.cats';
$modversion['admin'] = 1;
$modversion['securityschema'] = array('iw_forms::' => '::');
$modversion['dependencies'] = array(array('modname' => 'iw_main',
											'minversion' => '2.0',
											'maxversion' => '',
											'status' => PNMODULE_DEPENDENCY_REQUIRED));
