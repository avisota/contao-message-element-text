<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-message-element-text
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Table orm_avisota_message_content
 * Entity Avisota\Contao:MessageContent
 */
$GLOBALS['TL_DCA']['orm_avisota_message_content']['metapalettes']['text'] = array
(
	'type'   => array('type', 'cell', 'headline'),
	'text'   => array('text', 'definePlain', 'personalize'),
	'image'  => array('addImage'),
	'expert' => array(':hide', 'cssID', 'space')
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['metasubpalettes']['definePlain'] = array
(
	'plain'
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['text']        = array
(
	'label'       => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['text'],
	'exclude'     => true,
	'search'      => true,
	'inputType'   => 'textarea',
	'eval'        => array('mandatory' => true, 'rte' => 'tinyNews', 'helpwizard' => true),
	'explanation' => 'insertTags'
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['definePlain'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['definePlain'],
	'exclude'   => true,
	'inputType' => 'checkbox',
	'eval'      => array('submitOnChange' => true)
);
$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['plain']       = array
(
	'label'       => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['plain'],
	'exclude'     => true,
	'search'      => true,
	'inputType'   => 'textarea',
	'eval'        => array('mandatory' => true, 'helpwizard' => true),
	'explanation' => 'insertTags'
);
