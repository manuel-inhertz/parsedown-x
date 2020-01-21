<?php
/**
 * @name parsedownX
 * @description The ultimate Markdown Parser for MODX
 *
 * USAGE
 *
 *  [[parsedownX? &input=`[[*content]]` &file=`/path/to/file.md` &safe=`1`]]
 * 
 * Can also be used as an output modifier
 * 
 *  [[*content:parsedownX]]
 *
 * Copyright 2020 by Manuel InHertz <manuel@manuel-inhertz.com>
 * Created on 21-01-2020
 *
 * PROPERTIES:
 *
 * &input string
 * &file  string
 * &safe  integer. Default: 0
 * &inline integer. Default: 0
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package parsedownx
 */

$core_path = $modx->getOption('parsedownx.core_path', null, MODX_CORE_PATH. 'components/parsedownx/');
include_once $core_path .'/vendor/autoload.php';

$input    = (string) $modx->getOption('input', $scriptProperties, $input);
$file     = (string) $modx->getOption('file', $scriptProperties, '');
$safeMode = (int)    $modx->getOption('safe', $scriptProperties, 0);
$inline   = (int)    $modx->getOption('inline', $scriptProperties, 0);

// Load Parsedown class
$Parsedown = new Parsedown();
if (!($Parsedown instanceof Parsedown)) return $input;

// Check if save mode is enabled
if ($safeMode) $Parsedown->setSafeMode(true);

// Check if a file path has been set
if ($file !== '') {
    // Get file content
    $content = file_get_contents($file);

    if(!$inline) {
        // Parse markdown file content into HTML
        return $Parsedown->text($content);
    } else {
        // Parse markdown file content into inline HTML
        return $Parsedown->line($content);
    }
} else if ($input !== '') {
    if (!$inline) {
        // Parse markdown input content into HTML
        return $Parsedown->text($input);
    } else {
        // Parse markdown input content into inline HTML
        return $Parsedown->line($input);
    }
}

// If anything is passed return null
return '';