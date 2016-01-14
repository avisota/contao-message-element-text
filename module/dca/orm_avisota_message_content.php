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
    'type'      => array('cell', 'type', 'headline'),
    'text'      => array('text'),
    'image'     => array('addImage'),
    'expert'    => array(':hide', 'cssID', 'space'),
    'published' => array('invisible'),
);

$GLOBALS['TL_DCA']['orm_avisota_message_content']['fields']['text'] = array
(
    'label'       => &$GLOBALS['TL_LANG']['orm_avisota_message_content']['text'],
    'exclude'     => true,
    'search'      => true,
    'inputType'   => 'textarea',
    'eval'        => array('mandatory' => true, 'rte' => 'tinyNews', 'helpwizard' => true),
    'explanation' => 'insertTags'
);
