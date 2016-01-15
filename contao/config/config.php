<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-message-element-text
 * @license    LGPL-3.0+
 * @filesource
 */

/**
 * Message elements
 */
$GLOBALS['TL_MCE']['texts'][] = 'text';

/**
 * Events
 */
$GLOBALS['TL_EVENT_SUBSCRIBERS'][] = 'Avisota\Contao\Message\Element\Text\DefaultRenderer';
