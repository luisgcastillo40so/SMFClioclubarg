<?php

/**
 * Simple Machines Forum (SMF)
 *
 * @package SMF
 * @author Simple Machines https://www.simplemachines.org
 * @copyright 2022 Simple Machines and individual contributors
 * @license https://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 2.1 RC4
 */

if (!defined('SMF'))
	die('No direct access...');

/**
 * Helper function for utf8_compose.
 *
 * Developers: Do not update the data in this function manually. Instead,
 * run "php -f other/update_unicode_data.php" on the command line.
 *
 * @return array Composition maps for Unicode normalization.
 */
function utf8_compose_maps()
{
	return array(
		"\x41\xCC\x80" => "\xC3\x80",
		"\x41\xCC\x81" => "\xC3\x81",
		"\x41\xCC\x82" => "\xC3\x82",
		"\x41\xCC\x83" => "\xC3\x83",
		"\x41\xCC\x88" => "\xC3\x84",
		"\x41\xCC\x8A" => "\xC3\x85",
		"\x43\xCC\xA7" => "\xC3\x87",
		"\x45\xCC\x80" => "\xC3\x88",
		"\x45\xCC\x81" => "\xC3\x89",
		"\x45\xCC\x82" => "\xC3\x8A",
		"\x45\xCC\x88" => "\xC3\x8B",
		"\x49\xCC\x80" => "\xC3\x8C",
		"\x49\xCC\x81" => "\xC3\x8D",
		"\x49\xCC\x82" => "\xC3\x8E",
		"\x49\xCC\x88" => "\xC3\x8F",
		"\x4E\xCC\x83" => "\xC3\x91",
		"\x4F\xCC\x80" => "\xC3\x92",
		"\x4F\xCC\x81" => "\xC3\x93",
		"\x4F\xCC\x82" => "\xC3\x94",
		"\x4F\xCC\x83" => "\xC3\x95",
		"\x4F\xCC\x88" => "\xC3\x96",
		"\x55\xCC\x80" => "\xC3\x99",
		"\x55\xCC\x81" => "\xC3\x9A",
		"\x55\xCC\x82" => "\xC3\x9B",
		"\x55\xCC\x88" => "\xC3\x9C",
		"\x59\xCC\x81" => "\xC3\x9D",
		"\x61\xCC\x80" => "\xC3\xA0",
		"\x61\xCC\x81" => "\xC3\xA1",
		"\x61\xCC\x82" => "\xC3\xA2",
		"\x61\xCC\x83" => "\xC3\xA3",
		"\x61\xCC\x88" => "\xC3\xA4",
		"\x61\xCC\x8A" => "\xC3\xA5",
		"\x63\xCC\xA7" => "\xC3\xA7",
		"\x65\xCC\x80" => "\xC3\xA8",
		"\x65\xCC\x81" => "\xC3\xA9",
		"\x65\xCC\x82" => "\xC3\xAA",
		"\x65\xCC\x88" => "\xC3\xAB",
		"\x69\xCC\x80" => "\xC3\xAC",
		"\x69\xCC\x81" => "\xC3\xAD",
		"\x69\xCC\x82" => "\xC3\xAE",
		"\x69\xCC\x88" => "\xC3\xAF",
		"\x6E\xCC\x83" => "\xC3\xB1",
		"\x6F\xCC\x80" => "\xC3\xB2",
		"\x6F\xCC\x81" => "\xC3\xB3",
		"\x6F\xCC\x82" => "\xC3\xB4",
		"\x6F\xCC\x83" => "\xC3\xB5",
		"\x6F\xCC\x88" => "\xC3\xB6",
		"\x75\xCC\x80" => "\xC3\xB9",
		"\x75\xCC\x81" => "\xC3\xBA",
		"\x75\xCC\x82" => "\xC3\xBB",
		"\x75\xCC\x88" => "\xC3\xBC",
		"\x79\xCC\x81" => "\xC3\xBD",
		"\x79\xCC\x88" => "\xC3\xBF",
		"\x41\xCC\x84" => "\xC4\x80",
		"\x61\xCC\x84" => "\xC4\x81",
		"\x41\xCC\x86" => "\xC4\x82",
		"\x61\xCC\x86" => "\xC4\x83",
		"\x41\xCC\xA8" => "\xC4\x84",
		"\x61\xCC\xA8" => "\xC4\x85",
		"\x43\xCC\x81" => "\xC4\x86",
		"\x63\xCC\x81" => "\xC4\x87",
		"\x43\xCC\x82" => "\xC4\x88",
		"\x63\xCC\x82" => "\xC4\x89",
		"\x43\xCC\x87" => "\xC4\x8A",
		"\x63\xCC\x87" => "\xC4\x8B",
		"\x43\xCC\x8C" => "\xC4\x8C",
		"\x63\xCC\x8C" => "\xC4\x8D",
		"\x44\xCC\x8C" => "\xC4\x8E",
		"\x64\xCC\x8C" => "\xC4\x8F",
		"\x45\xCC\x84" => "\xC4\x92",
		"\x65\xCC\x84" => "\xC4\x93",
		"\x45\xCC\x86" => "\xC4\x94",
		"\x65\xCC\x86" => "\xC4\x95",
		"\x45\xCC\x87" => "\xC4\x96",
		"\x65\xCC\x87" => "\xC4\x97",
		"\x45\xCC\xA8" => "\xC4\x98",
		"\x65\xCC\xA8" => "\xC4\x99",
		"\x45\xCC\x8C" => "\xC4\x9A",
		"\x65\xCC\x8C" => "\xC4\x9B",
		"\x47\xCC\x82" => "\xC4\x9C",
		"\x67\xCC\x82" => "\xC4\x9D",
		"\x47\xCC\x86" => "\xC4\x9E",
		"\x67\xCC\x86" => "\xC4\x9F",
		"\x47\xCC\x87" => "\xC4\xA0",
		"\x67\xCC\x87" => "\xC4\xA1",
		"\x47\xCC\xA7" => "\xC4\xA2",
		"\x67\xCC\xA7" => "\xC4\xA3",
		"\x48\xCC\x82" => "\xC4\xA4",
		"\x68\xCC\x82" => "\xC4\xA5",
		"\x49\xCC\x83" => "\xC4\xA8",
		"\x69\xCC\x83" => "\xC4\xA9",
		"\x49\xCC\x84" => "\xC4\xAA",
		"\x69\xCC\x84" => "\xC4\xAB",
		"\x49\xCC\x86" => "\xC4\xAC",
		"\x69\xCC\x86" => "\xC4\xAD",
		"\x49\xCC\xA8" => "\xC4\xAE",
		"\x69\xCC\xA8" => "\xC4\xAF",
		"\x49\xCC\x87" => "\xC4\xB0",
		"\x4A\xCC\x82" => "\xC4\xB4",
		"\x6A\xCC\x82" => "\xC4\xB5",
		"\x4B\xCC\xA7" => "\xC4\xB6",
		"\x6B\xCC\xA7" => "\xC4\xB7",
		"\x4C\xCC\x81" => "\xC4\xB9",
		"\x6C\xCC\x81" => "\xC4\xBA",
		"\x4C\xCC\xA7" => "\xC4\xBB",
		"\x6C\xCC\xA7" => "\xC4\xBC",
		"\x4C\xCC\x8C" => "\xC4\xBD",
		"\x6C\xCC\x8C" => "\xC4\xBE",
		"\x4E\xCC\x81" => "\xC5\x83",
		"\x6E\xCC\x81" => "\xC5\x84",
		"\x4E\xCC\xA7" => "\xC5\x85",
		"\x6E\xCC\xA7" => "\xC5\x86",
		"\x4E\xCC\x8C" => "\xC5\x87",
		"\x6E\xCC\x8C" => "\xC5\x88",
		"\x4F\xCC\x84" => "\xC5\x8C",
		"\x6F\xCC\x84" => "\xC5\x8D",
		"\x4F\xCC\x86" => "\xC5\x8E",
		"\x6F\xCC\x86" => "\xC5\x8F",
		"\x4F\xCC\x8B" => "\xC5\x90",
		"\x6F\xCC\x8B" => "\xC5\x91",
		"\x52\xCC\x81" => "\xC5\x94",
		"\x72\xCC\x81" => "\xC5\x95",
		"\x52\xCC\xA7" => "\xC5\x96",
		"\x72\xCC\xA7" => "\xC5\x97",
		"\x52\xCC\x8C" => "\xC5\x98",
		"\x72\xCC\x8C" => "\xC5\x99",
		"\x53\xCC\x81" => "\xC5\x9A",
		"\x73\xCC\x81" => "\xC5\x9B",
		"\x53\xCC\x82" => "\xC5\x9C",
		"\x73\xCC\x82" => "\xC5\x9D",
		"\x53\xCC\xA7" => "\xC5\x9E",
		"\x73\xCC\xA7" => "\xC5\x9F",
		"\x53\xCC\x8C" => "\xC5\xA0",
		"\x73\xCC\x8C" => "\xC5\xA1",
		"\x54\xCC\xA7" => "\xC5\xA2",
		"\x74\xCC\xA7" => "\xC5\xA3",
		"\x54\xCC\x8C" => "\xC5\xA4",
		"\x74\xCC\x8C" => "\xC5\xA5",
		"\x55\xCC\x83" => "\xC5\xA8",
		"\x75\xCC\x83" => "\xC5\xA9",
		"\x55\xCC\x84" => "\xC5\xAA",
		"\x75\xCC\x84" => "\xC5\xAB",
		"\x55\xCC\x86" => "\xC5\xAC",
		"\x75\xCC\x86" => "\xC5\xAD",
		"\x55\xCC\x8A" => "\xC5\xAE",
		"\x75\xCC\x8A" => "\xC5\xAF",
		"\x55\xCC\x8B" => "\xC5\xB0",
		"\x75\xCC\x8B" => "\xC5\xB1",
		"\x55\xCC\xA8" => "\xC5\xB2",
		"\x75\xCC\xA8" => "\xC5\xB3",
		"\x57\xCC\x82" => "\xC5\xB4",
		"\x77\xCC\x82" => "\xC5\xB5",
		"\x59\xCC\x82" => "\xC5\xB6",
		"\x79\xCC\x82" => "\xC5\xB7",
		"\x59\xCC\x88" => "\xC5\xB8",
		"\x5A\xCC\x81" => "\xC5\xB9",
		"\x7A\xCC\x81" => "\xC5\xBA",
		"\x5A\xCC\x87" => "\xC5\xBB",
		"\x7A\xCC\x87" => "\xC5\xBC",
		"\x5A\xCC\x8C" => "\xC5\xBD",
		"\x7A\xCC\x8C" => "\xC5\xBE",
		"\x4F\xCC\x9B" => "\xC6\xA0",
		"\x6F\xCC\x9B" => "\xC6\xA1",
		"\x55\xCC\x9B" => "\xC6\xAF",
		"\x75\xCC\x9B" => "\xC6\xB0",
		"\x41\xCC\x8C" => "\xC7\x8D",
		"\x61\xCC\x8C" => "\xC7\x8E",
		"\x49\xCC\x8C" => "\xC7\x8F",
		"\x69\xCC\x8C" => "\xC7\x90",
		"\x4F\xCC\x8C" => "\xC7\x91",
		"\x6F\xCC\x8C" => "\xC7\x92",
		"\x55\xCC\x8C" => "\xC7\x93",
		"\x75\xCC\x8C" => "\xC7\x94",
		"\xC3\x9C\xCC\x84" => "\xC7\x95",
		"\xC3\xBC\xCC\x84" => "\xC7\x96",
		"\xC3\x9C\xCC\x81" => "\xC7\x97",
		"\xC3\xBC\xCC\x81" => "\xC7\x98",
		"\xC3\x9C\xCC\x8C" => "\xC7\x99",
		"\xC3\xBC\xCC\x8C" => "\xC7\x9A",
		"\xC3\x9C\xCC\x80" => "\xC7\x9B",
		"\xC3\xBC\xCC\x80" => "\xC7\x9C",
		"\xC3\x84\xCC\x84" => "\xC7\x9E",
		"\xC3\xA4\xCC\x84" => "\xC7\x9F",
		"\xC8\xA6\xCC\x84" => "\xC7\xA0",
		"\xC8\xA7\xCC\x84" => "\xC7\xA1",
		"\xC3\x86\xCC\x84" => "\xC7\xA2",
		"\xC3\xA6\xCC\x84" => "\xC7\xA3",
		"\x47\xCC\x8C" => "\xC7\xA6",
		"\x67\xCC\x8C" => "\xC7\xA7",
		"\x4B\xCC\x8C" => "\xC7\xA8",
		"\x6B\xCC\x8C" => "\xC7\xA9",
		"\x4F\xCC\xA8" => "\xC7\xAA",
		"\x6F\xCC\xA8" => "\xC7\xAB",
		"\xC7\xAA\xCC\x84" => "\xC7\xAC",
		"\xC7\xAB\xCC\x84" => "\xC7\xAD",
		"\xC6\xB7\xCC\x8C" => "\xC7\xAE",
		"\xCA\x92\xCC\x8C" => "\xC7\xAF",
		"\x6A\xCC\x8C" => "\xC7\xB0",
		"\x47\xCC\x81" => "\xC7\xB4",
		"\x67\xCC\x81" => "\xC7\xB5",
		"\x4E\xCC\x80" => "\xC7\xB8",
		"\x6E\xCC\x80" => "\xC7\xB9",
		"\xC3\x85\xCC\x81" => "\xC7\xBA",
		"\xC3\xA5\xCC\x81" => "\xC7\xBB",
		"\xC3\x86\xCC\x81" => "\xC7\xBC",
		"\xC3\xA6\xCC\x81" => "\xC7\xBD",
		"\xC3\x98\xCC\x81" => "\xC7\xBE",
		"\xC3\xB8\xCC\x81" => "\xC7\xBF",
		"\x41\xCC\x8F" => "\xC8\x80",
		"\x61\xCC\x8F" => "\xC8\x81",
		"\x41\xCC\x91" => "\xC8\x82",
		"\x61\xCC\x91" => "\xC8\x83",
		"\x45\xCC\x8F" => "\xC8\x84",
		"\x65\xCC\x8F" => "\xC8\x85",
		"\x45\xCC\x91" => "\xC8\x86",
		"\x65\xCC\x91" => "\xC8\x87",
		"\x49\xCC\x8F" => "\xC8\x88",
		"\x69\xCC\x8F" => "\xC8\x89",
		"\x49\xCC\x91" => "\xC8\x8A",
		"\x69\xCC\x91" => "\xC8\x8B",
		"\x4F\xCC\x8F" => "\xC8\x8C",
		"\x6F\xCC\x8F" => "\xC8\x8D",
		"\x4F\xCC\x91" => "\xC8\x8E",
		"\x6F\xCC\x91" => "\xC8\x8F",
		"\x52\xCC\x8F" => "\xC8\x90",
		"\x72\xCC\x8F" => "\xC8\x91",
		"\x52\xCC\x91" => "\xC8\x92",
		"\x72\xCC\x91" => "\xC8\x93",
		"\x55\xCC\x8F" => "\xC8\x94",
		"\x75\xCC\x8F" => "\xC8\x95",
		"\x55\xCC\x91" => "\xC8\x96",
		"\x75\xCC\x91" => "\xC8\x97",
		"\x53\xCC\xA6" => "\xC8\x98",
		"\x73\xCC\xA6" => "\xC8\x99",
		"\x54\xCC\xA6" => "\xC8\x9A",
		"\x74\xCC\xA6" => "\xC8\x9B",
		"\x48\xCC\x8C" => "\xC8\x9E",
		"\x68\xCC\x8C" => "\xC8\x9F",
		"\x41\xCC\x87" => "\xC8\xA6",
		"\x61\xCC\x87" => "\xC8\xA7",
		"\x45\xCC\xA7" => "\xC8\xA8",
		"\x65\xCC\xA7" => "\xC8\xA9",
		"\xC3\x96\xCC\x84" => "\xC8\xAA",
		"\xC3\xB6\xCC\x84" => "\xC8\xAB",
		"\xC3\x95\xCC\x84" => "\xC8\xAC",
		"\xC3\xB5\xCC\x84" => "\xC8\xAD",
		"\x4F\xCC\x87" => "\xC8\xAE",
		"\x6F\xCC\x87" => "\xC8\xAF",
		"\xC8\xAE\xCC\x84" => "\xC8\xB0",
		"\xC8\xAF\xCC\x84" => "\xC8\xB1",
		"\x59\xCC\x84" => "\xC8\xB2",
		"\x79\xCC\x84" => "\xC8\xB3",
		"\xC2\xA8\xCC\x81" => "\xCE\x85",
		"\xCE\x91\xCC\x81" => "\xCE\x86",
		"\xCE\x95\xCC\x81" => "\xCE\x88",
		"\xCE\x97\xCC\x81" => "\xCE\x89",
		"\xCE\x99\xCC\x81" => "\xCE\x8A",
		"\xCE\x9F\xCC\x81" => "\xCE\x8C",
		"\xCE\xA5\xCC\x81" => "\xCE\x8E",
		"\xCE\xA9\xCC\x81" => "\xCE\x8F",
		"\xCF\x8A\xCC\x81" => "\xCE\x90",
		"\xCE\x99\xCC\x88" => "\xCE\xAA",
		"\xCE\xA5\xCC\x88" => "\xCE\xAB",
		"\xCE\xB1\xCC\x81" => "\xCE\xAC",
		"\xCE\xB5\xCC\x81" => "\xCE\xAD",
		"\xCE\xB7\xCC\x81" => "\xCE\xAE",
		"\xCE\xB9\xCC\x81" => "\xCE\xAF",
		"\xCF\x8B\xCC\x81" => "\xCE\xB0",
		"\xCE\xB9\xCC\x88" => "\xCF\x8A",
		"\xCF\x85\xCC\x88" => "\xCF\x8B",
		"\xCE\xBF\xCC\x81" => "\xCF\x8C",
		"\xCF\x85\xCC\x81" => "\xCF\x8D",
		"\xCF\x89\xCC\x81" => "\xCF\x8E",
		"\xCF\x92\xCC\x81" => "\xCF\x93",
		"\xCF\x92\xCC\x88" => "\xCF\x94",
		"\xD0\x95\xCC\x80" => "\xD0\x80",
		"\xD0\x95\xCC\x88" => "\xD0\x81",
		"\xD0\x93\xCC\x81" => "\xD0\x83",
		"\xD0\x86\xCC\x88" => "\xD0\x87",
		"\xD0\x9A\xCC\x81" => "\xD0\x8C",
		"\xD0\x98\xCC\x80" => "\xD0\x8D",
		"\xD0\xA3\xCC\x86" => "\xD0\x8E",
		"\xD0\x98\xCC\x86" => "\xD0\x99",
		"\xD0\xB8\xCC\x86" => "\xD0\xB9",
		"\xD0\xB5\xCC\x80" => "\xD1\x90",
		"\xD0\xB5\xCC\x88" => "\xD1\x91",
		"\xD0\xB3\xCC\x81" => "\xD1\x93",
		"\xD1\x96\xCC\x88" => "\xD1\x97",
		"\xD0\xBA\xCC\x81" => "\xD1\x9C",
		"\xD0\xB8\xCC\x80" => "\xD1\x9D",
		"\xD1\x83\xCC\x86" => "\xD1\x9E",
		"\xD1\xB4\xCC\x8F" => "\xD1\xB6",
		"\xD1\xB5\xCC\x8F" => "\xD1\xB7",
		"\xD0\x96\xCC\x86" => "\xD3\x81",
		"\xD0\xB6\xCC\x86" => "\xD3\x82",
		"\xD0\x90\xCC\x86" => "\xD3\x90",
		"\xD0\xB0\xCC\x86" => "\xD3\x91",
		"\xD0\x90\xCC\x88" => "\xD3\x92",
		"\xD0\xB0\xCC\x88" => "\xD3\x93",
		"\xD0\x95\xCC\x86" => "\xD3\x96",
		"\xD0\xB5\xCC\x86" => "\xD3\x97",
		"\xD3\x98\xCC\x88" => "\xD3\x9A",
		"\xD3\x99\xCC\x88" => "\xD3\x9B",
		"\xD0\x96\xCC\x88" => "\xD3\x9C",
		"\xD0\xB6\xCC\x88" => "\xD3\x9D",
		"\xD0\x97\xCC\x88" => "\xD3\x9E",
		"\xD0\xB7\xCC\x88" => "\xD3\x9F",
		"\xD0\x98\xCC\x84" => "\xD3\xA2",
		"\xD0\xB8\xCC\x84" => "\xD3\xA3",
		"\xD0\x98\xCC\x88" => "\xD3\xA4",
		"\xD0\xB8\xCC\x88" => "\xD3\xA5",
		"\xD0\x9E\xCC\x88" => "\xD3\xA6",
		"\xD0\xBE\xCC\x88" => "\xD3\xA7",
		"\xD3\xA8\xCC\x88" => "\xD3\xAA",
		"\xD3\xA9\xCC\x88" => "\xD3\xAB",
		"\xD0\xAD\xCC\x88" => "\xD3\xAC",
		"\xD1\x8D\xCC\x88" => "\xD3\xAD",
		"\xD0\xA3\xCC\x84" => "\xD3\xAE",
		"\xD1\x83\xCC\x84" => "\xD3\xAF",
		"\xD0\xA3\xCC\x88" => "\xD3\xB0",
		"\xD1\x83\xCC\x88" => "\xD3\xB1",
		"\xD0\xA3\xCC\x8B" => "\xD3\xB2",
		"\xD1\x83\xCC\x8B" => "\xD3\xB3",
		"\xD0\xA7\xCC\x88" => "\xD3\xB4",
		"\xD1\x87\xCC\x88" => "\xD3\xB5",
		"\xD0\xAB\xCC\x88" => "\xD3\xB8",
		"\xD1\x8B\xCC\x88" => "\xD3\xB9",
		"\xD8\xA7\xD9\x93" => "\xD8\xA2",
		"\xD8\xA7\xD9\x94" => "\xD8\xA3",
		"\xD9\x88\xD9\x94" => "\xD8\xA4",
		"\xD8\xA7\xD9\x95" => "\xD8\xA5",
		"\xD9\x8A\xD9\x94" => "\xD8\xA6",
		"\xDB\x95\xD9\x94" => "\xDB\x80",
		"\xDB\x81\xD9\x94" => "\xDB\x82",
		"\xDB\x92\xD9\x94" => "\xDB\x93",
		"\xE0\xA4\xA8\xE0\xA4\xBC" => "\xE0\xA4\xA9",
		"\xE0\xA4\xB0\xE0\xA4\xBC" => "\xE0\xA4\xB1",
		"\xE0\xA4\xB3\xE0\xA4\xBC" => "\xE0\xA4\xB4",
		"\xE0\xA7\x87\xE0\xA6\xBE" => "\xE0\xA7\x8B",
		"\xE0\xA7\x87\xE0\xA7\x97" => "\xE0\xA7\x8C",
		"\xE0\xAD\x87\xE0\xAD\x96" => "\xE0\xAD\x88",
		"\xE0\xAD\x87\xE0\xAC\xBE" => "\xE0\xAD\x8B",
		"\xE0\xAD\x87\xE0\xAD\x97" => "\xE0\xAD\x8C",
		"\xE0\xAE\x92\xE0\xAF\x97" => "\xE0\xAE\x94",
		"\xE0\xAF\x86\xE0\xAE\xBE" => "\xE0\xAF\x8A",
		"\xE0\xAF\x87\xE0\xAE\xBE" => "\xE0\xAF\x8B",
		"\xE0\xAF\x86\xE0\xAF\x97" => "\xE0\xAF\x8C",
		"\xE0\xB1\x86\xE0\xB1\x96" => "\xE0\xB1\x88",
		"\xE0\xB2\xBF\xE0\xB3\x95" => "\xE0\xB3\x80",
		"\xE0\xB3\x86\xE0\xB3\x95" => "\xE0\xB3\x87",
		"\xE0\xB3\x86\xE0\xB3\x96" => "\xE0\xB3\x88",
		"\xE0\xB3\x86\xE0\xB3\x82" => "\xE0\xB3\x8A",
		"\xE0\xB3\x8A\xE0\xB3\x95" => "\xE0\xB3\x8B",
		"\xE0\xB5\x86\xE0\xB4\xBE" => "\xE0\xB5\x8A",
		"\xE0\xB5\x87\xE0\xB4\xBE" => "\xE0\xB5\x8B",
		"\xE0\xB5\x86\xE0\xB5\x97" => "\xE0\xB5\x8C",
		"\xE0\xB7\x99\xE0\xB7\x8A" => "\xE0\xB7\x9A",
		"\xE0\xB7\x99\xE0\xB7\x8F" => "\xE0\xB7\x9C",
		"\xE0\xB7\x9C\xE0\xB7\x8A" => "\xE0\xB7\x9D",
		"\xE0\xB7\x99\xE0\xB7\x9F" => "\xE0\xB7\x9E",
		"\xE1\x80\xA5\xE1\x80\xAE" => "\xE1\x80\xA6",
		"\xE1\xAC\x85\xE1\xAC\xB5" => "\xE1\xAC\x86",
		"\xE1\xAC\x87\xE1\xAC\xB5" => "\xE1\xAC\x88",
		"\xE1\xAC\x89\xE1\xAC\xB5" => "\xE1\xAC\x8A",
		"\xE1\xAC\x8B\xE1\xAC\xB5" => "\xE1\xAC\x8C",
		"\xE1\xAC\x8D\xE1\xAC\xB5" => "\xE1\xAC\x8E",
		"\xE1\xAC\x91\xE1\xAC\xB5" => "\xE1\xAC\x92",
		"\xE1\xAC\xBA\xE1\xAC\xB5" => "\xE1\xAC\xBB",
		"\xE1\xAC\xBC\xE1\xAC\xB5" => "\xE1\xAC\xBD",
		"\xE1\xAC\xBE\xE1\xAC\xB5" => "\xE1\xAD\x80",
		"\xE1\xAC\xBF\xE1\xAC\xB5" => "\xE1\xAD\x81",
		"\xE1\xAD\x82\xE1\xAC\xB5" => "\xE1\xAD\x83",
		"\x41\xCC\xA5" => "\xE1\xB8\x80",
		"\x61\xCC\xA5" => "\xE1\xB8\x81",
		"\x42\xCC\x87" => "\xE1\xB8\x82",
		"\x62\xCC\x87" => "\xE1\xB8\x83",
		"\x42\xCC\xA3" => "\xE1\xB8\x84",
		"\x62\xCC\xA3" => "\xE1\xB8\x85",
		"\x42\xCC\xB1" => "\xE1\xB8\x86",
		"\x62\xCC\xB1" => "\xE1\xB8\x87",
		"\xC3\x87\xCC\x81" => "\xE1\xB8\x88",
		"\xC3\xA7\xCC\x81" => "\xE1\xB8\x89",
		"\x44\xCC\x87" => "\xE1\xB8\x8A",
		"\x64\xCC\x87" => "\xE1\xB8\x8B",
		"\x44\xCC\xA3" => "\xE1\xB8\x8C",
		"\x64\xCC\xA3" => "\xE1\xB8\x8D",
		"\x44\xCC\xB1" => "\xE1\xB8\x8E",
		"\x64\xCC\xB1" => "\xE1\xB8\x8F",
		"\x44\xCC\xA7" => "\xE1\xB8\x90",
		"\x64\xCC\xA7" => "\xE1\xB8\x91",
		"\x44\xCC\xAD" => "\xE1\xB8\x92",
		"\x64\xCC\xAD" => "\xE1\xB8\x93",
		"\xC4\x92\xCC\x80" => "\xE1\xB8\x94",
		"\xC4\x93\xCC\x80" => "\xE1\xB8\x95",
		"\xC4\x92\xCC\x81" => "\xE1\xB8\x96",
		"\xC4\x93\xCC\x81" => "\xE1\xB8\x97",
		"\x45\xCC\xAD" => "\xE1\xB8\x98",
		"\x65\xCC\xAD" => "\xE1\xB8\x99",
		"\x45\xCC\xB0" => "\xE1\xB8\x9A",
		"\x65\xCC\xB0" => "\xE1\xB8\x9B",
		"\xC8\xA8\xCC\x86" => "\xE1\xB8\x9C",
		"\xC8\xA9\xCC\x86" => "\xE1\xB8\x9D",
		"\x46\xCC\x87" => "\xE1\xB8\x9E",
		"\x66\xCC\x87" => "\xE1\xB8\x9F",
		"\x47\xCC\x84" => "\xE1\xB8\xA0",
		"\x67\xCC\x84" => "\xE1\xB8\xA1",
		"\x48\xCC\x87" => "\xE1\xB8\xA2",
		"\x68\xCC\x87" => "\xE1\xB8\xA3",
		"\x48\xCC\xA3" => "\xE1\xB8\xA4",
		"\x68\xCC\xA3" => "\xE1\xB8\xA5",
		"\x48\xCC\x88" => "\xE1\xB8\xA6",
		"\x68\xCC\x88" => "\xE1\xB8\xA7",
		"\x48\xCC\xA7" => "\xE1\xB8\xA8",
		"\x68\xCC\xA7" => "\xE1\xB8\xA9",
		"\x48\xCC\xAE" => "\xE1\xB8\xAA",
		"\x68\xCC\xAE" => "\xE1\xB8\xAB",
		"\x49\xCC\xB0" => "\xE1\xB8\xAC",
		"\x69\xCC\xB0" => "\xE1\xB8\xAD",
		"\xC3\x8F\xCC\x81" => "\xE1\xB8\xAE",
		"\xC3\xAF\xCC\x81" => "\xE1\xB8\xAF",
		"\x4B\xCC\x81" => "\xE1\xB8\xB0",
		"\x6B\xCC\x81" => "\xE1\xB8\xB1",
		"\x4B\xCC\xA3" => "\xE1\xB8\xB2",
		"\x6B\xCC\xA3" => "\xE1\xB8\xB3",
		"\x4B\xCC\xB1" => "\xE1\xB8\xB4",
		"\x6B\xCC\xB1" => "\xE1\xB8\xB5",
		"\x4C\xCC\xA3" => "\xE1\xB8\xB6",
		"\x6C\xCC\xA3" => "\xE1\xB8\xB7",
		"\xE1\xB8\xB6\xCC\x84" => "\xE1\xB8\xB8",
		"\xE1\xB8\xB7\xCC\x84" => "\xE1\xB8\xB9",
		"\x4C\xCC\xB1" => "\xE1\xB8\xBA",
		"\x6C\xCC\xB1" => "\xE1\xB8\xBB",
		"\x4C\xCC\xAD" => "\xE1\xB8\xBC",
		"\x6C\xCC\xAD" => "\xE1\xB8\xBD",
		"\x4D\xCC\x81" => "\xE1\xB8\xBE",
		"\x6D\xCC\x81" => "\xE1\xB8\xBF",
		"\x4D\xCC\x87" => "\xE1\xB9\x80",
		"\x6D\xCC\x87" => "\xE1\xB9\x81",
		"\x4D\xCC\xA3" => "\xE1\xB9\x82",
		"\x6D\xCC\xA3" => "\xE1\xB9\x83",
		"\x4E\xCC\x87" => "\xE1\xB9\x84",
		"\x6E\xCC\x87" => "\xE1\xB9\x85",
		"\x4E\xCC\xA3" => "\xE1\xB9\x86",
		"\x6E\xCC\xA3" => "\xE1\xB9\x87",
		"\x4E\xCC\xB1" => "\xE1\xB9\x88",
		"\x6E\xCC\xB1" => "\xE1\xB9\x89",
		"\x4E\xCC\xAD" => "\xE1\xB9\x8A",
		"\x6E\xCC\xAD" => "\xE1\xB9\x8B",
		"\xC3\x95\xCC\x81" => "\xE1\xB9\x8C",
		"\xC3\xB5\xCC\x81" => "\xE1\xB9\x8D",
		"\xC3\x95\xCC\x88" => "\xE1\xB9\x8E",
		"\xC3\xB5\xCC\x88" => "\xE1\xB9\x8F",
		"\xC5\x8C\xCC\x80" => "\xE1\xB9\x90",
		"\xC5\x8D\xCC\x80" => "\xE1\xB9\x91",
		"\xC5\x8C\xCC\x81" => "\xE1\xB9\x92",
		"\xC5\x8D\xCC\x81" => "\xE1\xB9\x93",
		"\x50\xCC\x81" => "\xE1\xB9\x94",
		"\x70\xCC\x81" => "\xE1\xB9\x95",
		"\x50\xCC\x87" => "\xE1\xB9\x96",
		"\x70\xCC\x87" => "\xE1\xB9\x97",
		"\x52\xCC\x87" => "\xE1\xB9\x98",
		"\x72\xCC\x87" => "\xE1\xB9\x99",
		"\x52\xCC\xA3" => "\xE1\xB9\x9A",
		"\x72\xCC\xA3" => "\xE1\xB9\x9B",
		"\xE1\xB9\x9A\xCC\x84" => "\xE1\xB9\x9C",
		"\xE1\xB9\x9B\xCC\x84" => "\xE1\xB9\x9D",
		"\x52\xCC\xB1" => "\xE1\xB9\x9E",
		"\x72\xCC\xB1" => "\xE1\xB9\x9F",
		"\x53\xCC\x87" => "\xE1\xB9\xA0",
		"\x73\xCC\x87" => "\xE1\xB9\xA1",
		"\x53\xCC\xA3" => "\xE1\xB9\xA2",
		"\x73\xCC\xA3" => "\xE1\xB9\xA3",
		"\xC5\x9A\xCC\x87" => "\xE1\xB9\xA4",
		"\xC5\x9B\xCC\x87" => "\xE1\xB9\xA5",
		"\xC5\xA0\xCC\x87" => "\xE1\xB9\xA6",
		"\xC5\xA1\xCC\x87" => "\xE1\xB9\xA7",
		"\xE1\xB9\xA2\xCC\x87" => "\xE1\xB9\xA8",
		"\xE1\xB9\xA3\xCC\x87" => "\xE1\xB9\xA9",
		"\x54\xCC\x87" => "\xE1\xB9\xAA",
		"\x74\xCC\x87" => "\xE1\xB9\xAB",
		"\x54\xCC\xA3" => "\xE1\xB9\xAC",
		"\x74\xCC\xA3" => "\xE1\xB9\xAD",
		"\x54\xCC\xB1" => "\xE1\xB9\xAE",
		"\x74\xCC\xB1" => "\xE1\xB9\xAF",
		"\x54\xCC\xAD" => "\xE1\xB9\xB0",
		"\x74\xCC\xAD" => "\xE1\xB9\xB1",
		"\x55\xCC\xA4" => "\xE1\xB9\xB2",
		"\x75\xCC\xA4" => "\xE1\xB9\xB3",
		"\x55\xCC\xB0" => "\xE1\xB9\xB4",
		"\x75\xCC\xB0" => "\xE1\xB9\xB5",
		"\x55\xCC\xAD" => "\xE1\xB9\xB6",
		"\x75\xCC\xAD" => "\xE1\xB9\xB7",
		"\xC5\xA8\xCC\x81" => "\xE1\xB9\xB8",
		"\xC5\xA9\xCC\x81" => "\xE1\xB9\xB9",
		"\xC5\xAA\xCC\x88" => "\xE1\xB9\xBA",
		"\xC5\xAB\xCC\x88" => "\xE1\xB9\xBB",
		"\x56\xCC\x83" => "\xE1\xB9\xBC",
		"\x76\xCC\x83" => "\xE1\xB9\xBD",
		"\x56\xCC\xA3" => "\xE1\xB9\xBE",
		"\x76\xCC\xA3" => "\xE1\xB9\xBF",
		"\x57\xCC\x80" => "\xE1\xBA\x80",
		"\x77\xCC\x80" => "\xE1\xBA\x81",
		"\x57\xCC\x81" => "\xE1\xBA\x82",
		"\x77\xCC\x81" => "\xE1\xBA\x83",
		"\x57\xCC\x88" => "\xE1\xBA\x84",
		"\x77\xCC\x88" => "\xE1\xBA\x85",
		"\x57\xCC\x87" => "\xE1\xBA\x86",
		"\x77\xCC\x87" => "\xE1\xBA\x87",
		"\x57\xCC\xA3" => "\xE1\xBA\x88",
		"\x77\xCC\xA3" => "\xE1\xBA\x89",
		"\x58\xCC\x87" => "\xE1\xBA\x8A",
		"\x78\xCC\x87" => "\xE1\xBA\x8B",
		"\x58\xCC\x88" => "\xE1\xBA\x8C",
		"\x78\xCC\x88" => "\xE1\xBA\x8D",
		"\x59\xCC\x87" => "\xE1\xBA\x8E",
		"\x79\xCC\x87" => "\xE1\xBA\x8F",
		"\x5A\xCC\x82" => "\xE1\xBA\x90",
		"\x7A\xCC\x82" => "\xE1\xBA\x91",
		"\x5A\xCC\xA3" => "\xE1\xBA\x92",
		"\x7A\xCC\xA3" => "\xE1\xBA\x93",
		"\x5A\xCC\xB1" => "\xE1\xBA\x94",
		"\x7A\xCC\xB1" => "\xE1\xBA\x95",
		"\x68\xCC\xB1" => "\xE1\xBA\x96",
		"\x74\xCC\x88" => "\xE1\xBA\x97",
		"\x77\xCC\x8A" => "\xE1\xBA\x98",
		"\x79\xCC\x8A" => "\xE1\xBA\x99",
		"\xC5\xBF\xCC\x87" => "\xE1\xBA\x9B",
		"\x41\xCC\xA3" => "\xE1\xBA\xA0",
		"\x61\xCC\xA3" => "\xE1\xBA\xA1",
		"\x41\xCC\x89" => "\xE1\xBA\xA2",
		"\x61\xCC\x89" => "\xE1\xBA\xA3",
		"\xC3\x82\xCC\x81" => "\xE1\xBA\xA4",
		"\xC3\xA2\xCC\x81" => "\xE1\xBA\xA5",
		"\xC3\x82\xCC\x80" => "\xE1\xBA\xA6",
		"\xC3\xA2\xCC\x80" => "\xE1\xBA\xA7",
		"\xC3\x82\xCC\x89" => "\xE1\xBA\xA8",
		"\xC3\xA2\xCC\x89" => "\xE1\xBA\xA9",
		"\xC3\x82\xCC\x83" => "\xE1\xBA\xAA",
		"\xC3\xA2\xCC\x83" => "\xE1\xBA\xAB",
		"\xE1\xBA\xA0\xCC\x82" => "\xE1\xBA\xAC",
		"\xE1\xBA\xA1\xCC\x82" => "\xE1\xBA\xAD",
		"\xC4\x82\xCC\x81" => "\xE1\xBA\xAE",
		"\xC4\x83\xCC\x81" => "\xE1\xBA\xAF",
		"\xC4\x82\xCC\x80" => "\xE1\xBA\xB0",
		"\xC4\x83\xCC\x80" => "\xE1\xBA\xB1",
		"\xC4\x82\xCC\x89" => "\xE1\xBA\xB2",
		"\xC4\x83\xCC\x89" => "\xE1\xBA\xB3",
		"\xC4\x82\xCC\x83" => "\xE1\xBA\xB4",
		"\xC4\x83\xCC\x83" => "\xE1\xBA\xB5",
		"\xE1\xBA\xA0\xCC\x86" => "\xE1\xBA\xB6",
		"\xE1\xBA\xA1\xCC\x86" => "\xE1\xBA\xB7",
		"\x45\xCC\xA3" => "\xE1\xBA\xB8",
		"\x65\xCC\xA3" => "\xE1\xBA\xB9",
		"\x45\xCC\x89" => "\xE1\xBA\xBA",
		"\x65\xCC\x89" => "\xE1\xBA\xBB",
		"\x45\xCC\x83" => "\xE1\xBA\xBC",
		"\x65\xCC\x83" => "\xE1\xBA\xBD",
		"\xC3\x8A\xCC\x81" => "\xE1\xBA\xBE",
		"\xC3\xAA\xCC\x81" => "\xE1\xBA\xBF",
		"\xC3\x8A\xCC\x80" => "\xE1\xBB\x80",
		"\xC3\xAA\xCC\x80" => "\xE1\xBB\x81",
		"\xC3\x8A\xCC\x89" => "\xE1\xBB\x82",
		"\xC3\xAA\xCC\x89" => "\xE1\xBB\x83",
		"\xC3\x8A\xCC\x83" => "\xE1\xBB\x84",
		"\xC3\xAA\xCC\x83" => "\xE1\xBB\x85",
		"\xE1\xBA\xB8\xCC\x82" => "\xE1\xBB\x86",
		"\xE1\xBA\xB9\xCC\x82" => "\xE1\xBB\x87",
		"\x49\xCC\x89" => "\xE1\xBB\x88",
		"\x69\xCC\x89" => "\xE1\xBB\x89",
		"\x49\xCC\xA3" => "\xE1\xBB\x8A",
		"\x69\xCC\xA3" => "\xE1\xBB\x8B",
		"\x4F\xCC\xA3" => "\xE1\xBB\x8C",
		"\x6F\xCC\xA3" => "\xE1\xBB\x8D",
		"\x4F\xCC\x89" => "\xE1\xBB\x8E",
		"\x6F\xCC\x89" => "\xE1\xBB\x8F",
		"\xC3\x94\xCC\x81" => "\xE1\xBB\x90",
		"\xC3\xB4\xCC\x81" => "\xE1\xBB\x91",
		"\xC3\x94\xCC\x80" => "\xE1\xBB\x92",
		"\xC3\xB4\xCC\x80" => "\xE1\xBB\x93",
		"\xC3\x94\xCC\x89" => "\xE1\xBB\x94",
		"\xC3\xB4\xCC\x89" => "\xE1\xBB\x95",
		"\xC3\x94\xCC\x83" => "\xE1\xBB\x96",
		"\xC3\xB4\xCC\x83" => "\xE1\xBB\x97",
		"\xE1\xBB\x8C\xCC\x82" => "\xE1\xBB\x98",
		"\xE1\xBB\x8D\xCC\x82" => "\xE1\xBB\x99",
		"\xC6\xA0\xCC\x81" => "\xE1\xBB\x9A",
		"\xC6\xA1\xCC\x81" => "\xE1\xBB\x9B",
		"\xC6\xA0\xCC\x80" => "\xE1\xBB\x9C",
		"\xC6\xA1\xCC\x80" => "\xE1\xBB\x9D",
		"\xC6\xA0\xCC\x89" => "\xE1\xBB\x9E",
		"\xC6\xA1\xCC\x89" => "\xE1\xBB\x9F",
		"\xC6\xA0\xCC\x83" => "\xE1\xBB\xA0",
		"\xC6\xA1\xCC\x83" => "\xE1\xBB\xA1",
		"\xC6\xA0\xCC\xA3" => "\xE1\xBB\xA2",
		"\xC6\xA1\xCC\xA3" => "\xE1\xBB\xA3",
		"\x55\xCC\xA3" => "\xE1\xBB\xA4",
		"\x75\xCC\xA3" => "\xE1\xBB\xA5",
		"\x55\xCC\x89" => "\xE1\xBB\xA6",
		"\x75\xCC\x89" => "\xE1\xBB\xA7",
		"\xC6\xAF\xCC\x81" => "\xE1\xBB\xA8",
		"\xC6\xB0\xCC\x81" => "\xE1\xBB\xA9",
		"\xC6\xAF\xCC\x80" => "\xE1\xBB\xAA",
		"\xC6\xB0\xCC\x80" => "\xE1\xBB\xAB",
		"\xC6\xAF\xCC\x89" => "\xE1\xBB\xAC",
		"\xC6\xB0\xCC\x89" => "\xE1\xBB\xAD",
		"\xC6\xAF\xCC\x83" => "\xE1\xBB\xAE",
		"\xC6\xB0\xCC\x83" => "\xE1\xBB\xAF",
		"\xC6\xAF\xCC\xA3" => "\xE1\xBB\xB0",
		"\xC6\xB0\xCC\xA3" => "\xE1\xBB\xB1",
		"\x59\xCC\x80" => "\xE1\xBB\xB2",
		"\x79\xCC\x80" => "\xE1\xBB\xB3",
		"\x59\xCC\xA3" => "\xE1\xBB\xB4",
		"\x79\xCC\xA3" => "\xE1\xBB\xB5",
		"\x59\xCC\x89" => "\xE1\xBB\xB6",
		"\x79\xCC\x89" => "\xE1\xBB\xB7",
		"\x59\xCC\x83" => "\xE1\xBB\xB8",
		"\x79\xCC\x83" => "\xE1\xBB\xB9",
		"\xCE\xB1\xCC\x93" => "\xE1\xBC\x80",
		"\xCE\xB1\xCC\x94" => "\xE1\xBC\x81",
		"\xE1\xBC\x80\xCC\x80" => "\xE1\xBC\x82",
		"\xE1\xBC\x81\xCC\x80" => "\xE1\xBC\x83",
		"\xE1\xBC\x80\xCC\x81" => "\xE1\xBC\x84",
		"\xE1\xBC\x81\xCC\x81" => "\xE1\xBC\x85",
		"\xE1\xBC\x80\xCD\x82" => "\xE1\xBC\x86",
		"\xE1\xBC\x81\xCD\x82" => "\xE1\xBC\x87",
		"\xCE\x91\xCC\x93" => "\xE1\xBC\x88",
		"\xCE\x91\xCC\x94" => "\xE1\xBC\x89",
		"\xE1\xBC\x88\xCC\x80" => "\xE1\xBC\x8A",
		"\xE1\xBC\x89\xCC\x80" => "\xE1\xBC\x8B",
		"\xE1\xBC\x88\xCC\x81" => "\xE1\xBC\x8C",
		"\xE1\xBC\x89\xCC\x81" => "\xE1\xBC\x8D",
		"\xE1\xBC\x88\xCD\x82" => "\xE1\xBC\x8E",
		"\xE1\xBC\x89\xCD\x82" => "\xE1\xBC\x8F",
		"\xCE\xB5\xCC\x93" => "\xE1\xBC\x90",
		"\xCE\xB5\xCC\x94" => "\xE1\xBC\x91",
		"\xE1\xBC\x90\xCC\x80" => "\xE1\xBC\x92",
		"\xE1\xBC\x91\xCC\x80" => "\xE1\xBC\x93",
		"\xE1\xBC\x90\xCC\x81" => "\xE1\xBC\x94",
		"\xE1\xBC\x91\xCC\x81" => "\xE1\xBC\x95",
		"\xCE\x95\xCC\x93" => "\xE1\xBC\x98",
		"\xCE\x95\xCC\x94" => "\xE1\xBC\x99",
		"\xE1\xBC\x98\xCC\x80" => "\xE1\xBC\x9A",
		"\xE1\xBC\x99\xCC\x80" => "\xE1\xBC\x9B",
		"\xE1\xBC\x98\xCC\x81" => "\xE1\xBC\x9C",
		"\xE1\xBC\x99\xCC\x81" => "\xE1\xBC\x9D",
		"\xCE\xB7\xCC\x93" => "\xE1\xBC\xA0",
		"\xCE\xB7\xCC\x94" => "\xE1\xBC\xA1",
		"\xE1\xBC\xA0\xCC\x80" => "\xE1\xBC\xA2",
		"\xE1\xBC\xA1\xCC\x80" => "\xE1\xBC\xA3",
		"\xE1\xBC\xA0\xCC\x81" => "\xE1\xBC\xA4",
		"\xE1\xBC\xA1\xCC\x81" => "\xE1\xBC\xA5",
		"\xE1\xBC\xA0\xCD\x82" => "\xE1\xBC\xA6",
		"\xE1\xBC\xA1\xCD\x82" => "\xE1\xBC\xA7",
		"\xCE\x97\xCC\x93" => "\xE1\xBC\xA8",
		"\xCE\x97\xCC\x94" => "\xE1\xBC\xA9",
		"\xE1\xBC\xA8\xCC\x80" => "\xE1\xBC\xAA",
		"\xE1\xBC\xA9\xCC\x80" => "\xE1\xBC\xAB",
		"\xE1\xBC\xA8\xCC\x81" => "\xE1\xBC\xAC",
		"\xE1\xBC\xA9\xCC\x81" => "\xE1\xBC\xAD",
		"\xE1\xBC\xA8\xCD\x82" => "\xE1\xBC\xAE",
		"\xE1\xBC\xA9\xCD\x82" => "\xE1\xBC\xAF",
		"\xCE\xB9\xCC\x93" => "\xE1\xBC\xB0",
		"\xCE\xB9\xCC\x94" => "\xE1\xBC\xB1",
		"\xE1\xBC\xB0\xCC\x80" => "\xE1\xBC\xB2",
		"\xE1\xBC\xB1\xCC\x80" => "\xE1\xBC\xB3",
		"\xE1\xBC\xB0\xCC\x81" => "\xE1\xBC\xB4",
		"\xE1\xBC\xB1\xCC\x81" => "\xE1\xBC\xB5",
		"\xE1\xBC\xB0\xCD\x82" => "\xE1\xBC\xB6",
		"\xE1\xBC\xB1\xCD\x82" => "\xE1\xBC\xB7",
		"\xCE\x99\xCC\x93" => "\xE1\xBC\xB8",
		"\xCE\x99\xCC\x94" => "\xE1\xBC\xB9",
		"\xE1\xBC\xB8\xCC\x80" => "\xE1\xBC\xBA",
		"\xE1\xBC\xB9\xCC\x80" => "\xE1\xBC\xBB",
		"\xE1\xBC\xB8\xCC\x81" => "\xE1\xBC\xBC",
		"\xE1\xBC\xB9\xCC\x81" => "\xE1\xBC\xBD",
		"\xE1\xBC\xB8\xCD\x82" => "\xE1\xBC\xBE",
		"\xE1\xBC\xB9\xCD\x82" => "\xE1\xBC\xBF",
		"\xCE\xBF\xCC\x93" => "\xE1\xBD\x80",
		"\xCE\xBF\xCC\x94" => "\xE1\xBD\x81",
		"\xE1\xBD\x80\xCC\x80" => "\xE1\xBD\x82",
		"\xE1\xBD\x81\xCC\x80" => "\xE1\xBD\x83",
		"\xE1\xBD\x80\xCC\x81" => "\xE1\xBD\x84",
		"\xE1\xBD\x81\xCC\x81" => "\xE1\xBD\x85",
		"\xCE\x9F\xCC\x93" => "\xE1\xBD\x88",
		"\xCE\x9F\xCC\x94" => "\xE1\xBD\x89",
		"\xE1\xBD\x88\xCC\x80" => "\xE1\xBD\x8A",
		"\xE1\xBD\x89\xCC\x80" => "\xE1\xBD\x8B",
		"\xE1\xBD\x88\xCC\x81" => "\xE1\xBD\x8C",
		"\xE1\xBD\x89\xCC\x81" => "\xE1\xBD\x8D",
		"\xCF\x85\xCC\x93" => "\xE1\xBD\x90",
		"\xCF\x85\xCC\x94" => "\xE1\xBD\x91",
		"\xE1\xBD\x90\xCC\x80" => "\xE1\xBD\x92",
		"\xE1\xBD\x91\xCC\x80" => "\xE1\xBD\x93",
		"\xE1\xBD\x90\xCC\x81" => "\xE1\xBD\x94",
		"\xE1\xBD\x91\xCC\x81" => "\xE1\xBD\x95",
		"\xE1\xBD\x90\xCD\x82" => "\xE1\xBD\x96",
		"\xE1\xBD\x91\xCD\x82" => "\xE1\xBD\x97",
		"\xCE\xA5\xCC\x94" => "\xE1\xBD\x99",
		"\xE1\xBD\x99\xCC\x80" => "\xE1\xBD\x9B",
		"\xE1\xBD\x99\xCC\x81" => "\xE1\xBD\x9D",
		"\xE1\xBD\x99\xCD\x82" => "\xE1\xBD\x9F",
		"\xCF\x89\xCC\x93" => "\xE1\xBD\xA0",
		"\xCF\x89\xCC\x94" => "\xE1\xBD\xA1",
		"\xE1\xBD\xA0\xCC\x80" => "\xE1\xBD\xA2",
		"\xE1\xBD\xA1\xCC\x80" => "\xE1\xBD\xA3",
		"\xE1\xBD\xA0\xCC\x81" => "\xE1\xBD\xA4",
		"\xE1\xBD\xA1\xCC\x81" => "\xE1\xBD\xA5",
		"\xE1\xBD\xA0\xCD\x82" => "\xE1\xBD\xA6",
		"\xE1\xBD\xA1\xCD\x82" => "\xE1\xBD\xA7",
		"\xCE\xA9\xCC\x93" => "\xE1\xBD\xA8",
		"\xCE\xA9\xCC\x94" => "\xE1\xBD\xA9",
		"\xE1\xBD\xA8\xCC\x80" => "\xE1\xBD\xAA",
		"\xE1\xBD\xA9\xCC\x80" => "\xE1\xBD\xAB",
		"\xE1\xBD\xA8\xCC\x81" => "\xE1\xBD\xAC",
		"\xE1\xBD\xA9\xCC\x81" => "\xE1\xBD\xAD",
		"\xE1\xBD\xA8\xCD\x82" => "\xE1\xBD\xAE",
		"\xE1\xBD\xA9\xCD\x82" => "\xE1\xBD\xAF",
		"\xCE\xB1\xCC\x80" => "\xE1\xBD\xB0",
		"\xCE\xB5\xCC\x80" => "\xE1\xBD\xB2",
		"\xCE\xB7\xCC\x80" => "\xE1\xBD\xB4",
		"\xCE\xB9\xCC\x80" => "\xE1\xBD\xB6",
		"\xCE\xBF\xCC\x80" => "\xE1\xBD\xB8",
		"\xCF\x85\xCC\x80" => "\xE1\xBD\xBA",
		"\xCF\x89\xCC\x80" => "\xE1\xBD\xBC",
		"\xE1\xBC\x80\xCD\x85" => "\xE1\xBE\x80",
		"\xE1\xBC\x81\xCD\x85" => "\xE1\xBE\x81",
		"\xE1\xBC\x82\xCD\x85" => "\xE1\xBE\x82",
		"\xE1\xBC\x83\xCD\x85" => "\xE1\xBE\x83",
		"\xE1\xBC\x84\xCD\x85" => "\xE1\xBE\x84",
		"\xE1\xBC\x85\xCD\x85" => "\xE1\xBE\x85",
		"\xE1\xBC\x86\xCD\x85" => "\xE1\xBE\x86",
		"\xE1\xBC\x87\xCD\x85" => "\xE1\xBE\x87",
		"\xE1\xBC\x88\xCD\x85" => "\xE1\xBE\x88",
		"\xE1\xBC\x89\xCD\x85" => "\xE1\xBE\x89",
		"\xE1\xBC\x8A\xCD\x85" => "\xE1\xBE\x8A",
		"\xE1\xBC\x8B\xCD\x85" => "\xE1\xBE\x8B",
		"\xE1\xBC\x8C\xCD\x85" => "\xE1\xBE\x8C",
		"\xE1\xBC\x8D\xCD\x85" => "\xE1\xBE\x8D",
		"\xE1\xBC\x8E\xCD\x85" => "\xE1\xBE\x8E",
		"\xE1\xBC\x8F\xCD\x85" => "\xE1\xBE\x8F",
		"\xE1\xBC\xA0\xCD\x85" => "\xE1\xBE\x90",
		"\xE1\xBC\xA1\xCD\x85" => "\xE1\xBE\x91",
		"\xE1\xBC\xA2\xCD\x85" => "\xE1\xBE\x92",
		"\xE1\xBC\xA3\xCD\x85" => "\xE1\xBE\x93",
		"\xE1\xBC\xA4\xCD\x85" => "\xE1\xBE\x94",
		"\xE1\xBC\xA5\xCD\x85" => "\xE1\xBE\x95",
		"\xE1\xBC\xA6\xCD\x85" => "\xE1\xBE\x96",
		"\xE1\xBC\xA7\xCD\x85" => "\xE1\xBE\x97",
		"\xE1\xBC\xA8\xCD\x85" => "\xE1\xBE\x98",
		"\xE1\xBC\xA9\xCD\x85" => "\xE1\xBE\x99",
		"\xE1\xBC\xAA\xCD\x85" => "\xE1\xBE\x9A",
		"\xE1\xBC\xAB\xCD\x85" => "\xE1\xBE\x9B",
		"\xE1\xBC\xAC\xCD\x85" => "\xE1\xBE\x9C",
		"\xE1\xBC\xAD\xCD\x85" => "\xE1\xBE\x9D",
		"\xE1\xBC\xAE\xCD\x85" => "\xE1\xBE\x9E",
		"\xE1\xBC\xAF\xCD\x85" => "\xE1\xBE\x9F",
		"\xE1\xBD\xA0\xCD\x85" => "\xE1\xBE\xA0",
		"\xE1\xBD\xA1\xCD\x85" => "\xE1\xBE\xA1",
		"\xE1\xBD\xA2\xCD\x85" => "\xE1\xBE\xA2",
		"\xE1\xBD\xA3\xCD\x85" => "\xE1\xBE\xA3",
		"\xE1\xBD\xA4\xCD\x85" => "\xE1\xBE\xA4",
		"\xE1\xBD\xA5\xCD\x85" => "\xE1\xBE\xA5",
		"\xE1\xBD\xA6\xCD\x85" => "\xE1\xBE\xA6",
		"\xE1\xBD\xA7\xCD\x85" => "\xE1\xBE\xA7",
		"\xE1\xBD\xA8\xCD\x85" => "\xE1\xBE\xA8",
		"\xE1\xBD\xA9\xCD\x85" => "\xE1\xBE\xA9",
		"\xE1\xBD\xAA\xCD\x85" => "\xE1\xBE\xAA",
		"\xE1\xBD\xAB\xCD\x85" => "\xE1\xBE\xAB",
		"\xE1\xBD\xAC\xCD\x85" => "\xE1\xBE\xAC",
		"\xE1\xBD\xAD\xCD\x85" => "\xE1\xBE\xAD",
		"\xE1\xBD\xAE\xCD\x85" => "\xE1\xBE\xAE",
		"\xE1\xBD\xAF\xCD\x85" => "\xE1\xBE\xAF",
		"\xCE\xB1\xCC\x86" => "\xE1\xBE\xB0",
		"\xCE\xB1\xCC\x84" => "\xE1\xBE\xB1",
		"\xE1\xBD\xB0\xCD\x85" => "\xE1\xBE\xB2",
		"\xCE\xB1\xCD\x85" => "\xE1\xBE\xB3",
		"\xCE\xAC\xCD\x85" => "\xE1\xBE\xB4",
		"\xCE\xB1\xCD\x82" => "\xE1\xBE\xB6",
		"\xE1\xBE\xB6\xCD\x85" => "\xE1\xBE\xB7",
		"\xCE\x91\xCC\x86" => "\xE1\xBE\xB8",
		"\xCE\x91\xCC\x84" => "\xE1\xBE\xB9",
		"\xCE\x91\xCC\x80" => "\xE1\xBE\xBA",
		"\xCE\x91\xCD\x85" => "\xE1\xBE\xBC",
		"\xC2\xA8\xCD\x82" => "\xE1\xBF\x81",
		"\xE1\xBD\xB4\xCD\x85" => "\xE1\xBF\x82",
		"\xCE\xB7\xCD\x85" => "\xE1\xBF\x83",
		"\xCE\xAE\xCD\x85" => "\xE1\xBF\x84",
		"\xCE\xB7\xCD\x82" => "\xE1\xBF\x86",
		"\xE1\xBF\x86\xCD\x85" => "\xE1\xBF\x87",
		"\xCE\x95\xCC\x80" => "\xE1\xBF\x88",
		"\xCE\x97\xCC\x80" => "\xE1\xBF\x8A",
		"\xCE\x97\xCD\x85" => "\xE1\xBF\x8C",
		"\xE1\xBE\xBF\xCC\x80" => "\xE1\xBF\x8D",
		"\xE1\xBE\xBF\xCC\x81" => "\xE1\xBF\x8E",
		"\xE1\xBE\xBF\xCD\x82" => "\xE1\xBF\x8F",
		"\xCE\xB9\xCC\x86" => "\xE1\xBF\x90",
		"\xCE\xB9\xCC\x84" => "\xE1\xBF\x91",
		"\xCF\x8A\xCC\x80" => "\xE1\xBF\x92",
		"\xCE\xB9\xCD\x82" => "\xE1\xBF\x96",
		"\xCF\x8A\xCD\x82" => "\xE1\xBF\x97",
		"\xCE\x99\xCC\x86" => "\xE1\xBF\x98",
		"\xCE\x99\xCC\x84" => "\xE1\xBF\x99",
		"\xCE\x99\xCC\x80" => "\xE1\xBF\x9A",
		"\xE1\xBF\xBE\xCC\x80" => "\xE1\xBF\x9D",
		"\xE1\xBF\xBE\xCC\x81" => "\xE1\xBF\x9E",
		"\xE1\xBF\xBE\xCD\x82" => "\xE1\xBF\x9F",
		"\xCF\x85\xCC\x86" => "\xE1\xBF\xA0",
		"\xCF\x85\xCC\x84" => "\xE1\xBF\xA1",
		"\xCF\x8B\xCC\x80" => "\xE1\xBF\xA2",
		"\xCF\x81\xCC\x93" => "\xE1\xBF\xA4",
		"\xCF\x81\xCC\x94" => "\xE1\xBF\xA5",
		"\xCF\x85\xCD\x82" => "\xE1\xBF\xA6",
		"\xCF\x8B\xCD\x82" => "\xE1\xBF\xA7",
		"\xCE\xA5\xCC\x86" => "\xE1\xBF\xA8",
		"\xCE\xA5\xCC\x84" => "\xE1\xBF\xA9",
		"\xCE\xA5\xCC\x80" => "\xE1\xBF\xAA",
		"\xCE\xA1\xCC\x94" => "\xE1\xBF\xAC",
		"\xC2\xA8\xCC\x80" => "\xE1\xBF\xAD",
		"\xE1\xBD\xBC\xCD\x85" => "\xE1\xBF\xB2",
		"\xCF\x89\xCD\x85" => "\xE1\xBF\xB3",
		"\xCF\x8E\xCD\x85" => "\xE1\xBF\xB4",
		"\xCF\x89\xCD\x82" => "\xE1\xBF\xB6",
		"\xE1\xBF\xB6\xCD\x85" => "\xE1\xBF\xB7",
		"\xCE\x9F\xCC\x80" => "\xE1\xBF\xB8",
		"\xCE\xA9\xCC\x80" => "\xE1\xBF\xBA",
		"\xCE\xA9\xCD\x85" => "\xE1\xBF\xBC",
		"\xE2\x86\x90\xCC\xB8" => "\xE2\x86\x9A",
		"\xE2\x86\x92\xCC\xB8" => "\xE2\x86\x9B",
		"\xE2\x86\x94\xCC\xB8" => "\xE2\x86\xAE",
		"\xE2\x87\x90\xCC\xB8" => "\xE2\x87\x8D",
		"\xE2\x87\x94\xCC\xB8" => "\xE2\x87\x8E",
		"\xE2\x87\x92\xCC\xB8" => "\xE2\x87\x8F",
		"\xE2\x88\x83\xCC\xB8" => "\xE2\x88\x84",
		"\xE2\x88\x88\xCC\xB8" => "\xE2\x88\x89",
		"\xE2\x88\x8B\xCC\xB8" => "\xE2\x88\x8C",
		"\xE2\x88\xA3\xCC\xB8" => "\xE2\x88\xA4",
		"\xE2\x88\xA5\xCC\xB8" => "\xE2\x88\xA6",
		"\xE2\x88\xBC\xCC\xB8" => "\xE2\x89\x81",
		"\xE2\x89\x83\xCC\xB8" => "\xE2\x89\x84",
		"\xE2\x89\x85\xCC\xB8" => "\xE2\x89\x87",
		"\xE2\x89\x88\xCC\xB8" => "\xE2\x89\x89",
		"\x3D\xCC\xB8" => "\xE2\x89\xA0",
		"\xE2\x89\xA1\xCC\xB8" => "\xE2\x89\xA2",
		"\xE2\x89\x8D\xCC\xB8" => "\xE2\x89\xAD",
		"\x3C\xCC\xB8" => "\xE2\x89\xAE",
		"\x3E\xCC\xB8" => "\xE2\x89\xAF",
		"\xE2\x89\xA4\xCC\xB8" => "\xE2\x89\xB0",
		"\xE2\x89\xA5\xCC\xB8" => "\xE2\x89\xB1",
		"\xE2\x89\xB2\xCC\xB8" => "\xE2\x89\xB4",
		"\xE2\x89\xB3\xCC\xB8" => "\xE2\x89\xB5",
		"\xE2\x89\xB6\xCC\xB8" => "\xE2\x89\xB8",
		"\xE2\x89\xB7\xCC\xB8" => "\xE2\x89\xB9",
		"\xE2\x89\xBA\xCC\xB8" => "\xE2\x8A\x80",
		"\xE2\x89\xBB\xCC\xB8" => "\xE2\x8A\x81",
		"\xE2\x8A\x82\xCC\xB8" => "\xE2\x8A\x84",
		"\xE2\x8A\x83\xCC\xB8" => "\xE2\x8A\x85",
		"\xE2\x8A\x86\xCC\xB8" => "\xE2\x8A\x88",
		"\xE2\x8A\x87\xCC\xB8" => "\xE2\x8A\x89",
		"\xE2\x8A\xA2\xCC\xB8" => "\xE2\x8A\xAC",
		"\xE2\x8A\xA8\xCC\xB8" => "\xE2\x8A\xAD",
		"\xE2\x8A\xA9\xCC\xB8" => "\xE2\x8A\xAE",
		"\xE2\x8A\xAB\xCC\xB8" => "\xE2\x8A\xAF",
		"\xE2\x89\xBC\xCC\xB8" => "\xE2\x8B\xA0",
		"\xE2\x89\xBD\xCC\xB8" => "\xE2\x8B\xA1",
		"\xE2\x8A\x91\xCC\xB8" => "\xE2\x8B\xA2",
		"\xE2\x8A\x92\xCC\xB8" => "\xE2\x8B\xA3",
		"\xE2\x8A\xB2\xCC\xB8" => "\xE2\x8B\xAA",
		"\xE2\x8A\xB3\xCC\xB8" => "\xE2\x8B\xAB",
		"\xE2\x8A\xB4\xCC\xB8" => "\xE2\x8B\xAC",
		"\xE2\x8A\xB5\xCC\xB8" => "\xE2\x8B\xAD",
		"\xE3\x81\x8B\xE3\x82\x99" => "\xE3\x81\x8C",
		"\xE3\x81\x8D\xE3\x82\x99" => "\xE3\x81\x8E",
		"\xE3\x81\x8F\xE3\x82\x99" => "\xE3\x81\x90",
		"\xE3\x81\x91\xE3\x82\x99" => "\xE3\x81\x92",
		"\xE3\x81\x93\xE3\x82\x99" => "\xE3\x81\x94",
		"\xE3\x81\x95\xE3\x82\x99" => "\xE3\x81\x96",
		"\xE3\x81\x97\xE3\x82\x99" => "\xE3\x81\x98",
		"\xE3\x81\x99\xE3\x82\x99" => "\xE3\x81\x9A",
		"\xE3\x81\x9B\xE3\x82\x99" => "\xE3\x81\x9C",
		"\xE3\x81\x9D\xE3\x82\x99" => "\xE3\x81\x9E",
		"\xE3\x81\x9F\xE3\x82\x99" => "\xE3\x81\xA0",
		"\xE3\x81\xA1\xE3\x82\x99" => "\xE3\x81\xA2",
		"\xE3\x81\xA4\xE3\x82\x99" => "\xE3\x81\xA5",
		"\xE3\x81\xA6\xE3\x82\x99" => "\xE3\x81\xA7",
		"\xE3\x81\xA8\xE3\x82\x99" => "\xE3\x81\xA9",
		"\xE3\x81\xAF\xE3\x82\x99" => "\xE3\x81\xB0",
		"\xE3\x81\xAF\xE3\x82\x9A" => "\xE3\x81\xB1",
		"\xE3\x81\xB2\xE3\x82\x99" => "\xE3\x81\xB3",
		"\xE3\x81\xB2\xE3\x82\x9A" => "\xE3\x81\xB4",
		"\xE3\x81\xB5\xE3\x82\x99" => "\xE3\x81\xB6",
		"\xE3\x81\xB5\xE3\x82\x9A" => "\xE3\x81\xB7",
		"\xE3\x81\xB8\xE3\x82\x99" => "\xE3\x81\xB9",
		"\xE3\x81\xB8\xE3\x82\x9A" => "\xE3\x81\xBA",
		"\xE3\x81\xBB\xE3\x82\x99" => "\xE3\x81\xBC",
		"\xE3\x81\xBB\xE3\x82\x9A" => "\xE3\x81\xBD",
		"\xE3\x81\x86\xE3\x82\x99" => "\xE3\x82\x94",
		"\xE3\x82\x9D\xE3\x82\x99" => "\xE3\x82\x9E",
		"\xE3\x82\xAB\xE3\x82\x99" => "\xE3\x82\xAC",
		"\xE3\x82\xAD\xE3\x82\x99" => "\xE3\x82\xAE",
		"\xE3\x82\xAF\xE3\x82\x99" => "\xE3\x82\xB0",
		"\xE3\x82\xB1\xE3\x82\x99" => "\xE3\x82\xB2",
		"\xE3\x82\xB3\xE3\x82\x99" => "\xE3\x82\xB4",
		"\xE3\x82\xB5\xE3\x82\x99" => "\xE3\x82\xB6",
		"\xE3\x82\xB7\xE3\x82\x99" => "\xE3\x82\xB8",
		"\xE3\x82\xB9\xE3\x82\x99" => "\xE3\x82\xBA",
		"\xE3\x82\xBB\xE3\x82\x99" => "\xE3\x82\xBC",
		"\xE3\x82\xBD\xE3\x82\x99" => "\xE3\x82\xBE",
		"\xE3\x82\xBF\xE3\x82\x99" => "\xE3\x83\x80",
		"\xE3\x83\x81\xE3\x82\x99" => "\xE3\x83\x82",
		"\xE3\x83\x84\xE3\x82\x99" => "\xE3\x83\x85",
		"\xE3\x83\x86\xE3\x82\x99" => "\xE3\x83\x87",
		"\xE3\x83\x88\xE3\x82\x99" => "\xE3\x83\x89",
		"\xE3\x83\x8F\xE3\x82\x99" => "\xE3\x83\x90",
		"\xE3\x83\x8F\xE3\x82\x9A" => "\xE3\x83\x91",
		"\xE3\x83\x92\xE3\x82\x99" => "\xE3\x83\x93",
		"\xE3\x83\x92\xE3\x82\x9A" => "\xE3\x83\x94",
		"\xE3\x83\x95\xE3\x82\x99" => "\xE3\x83\x96",
		"\xE3\x83\x95\xE3\x82\x9A" => "\xE3\x83\x97",
		"\xE3\x83\x98\xE3\x82\x99" => "\xE3\x83\x99",
		"\xE3\x83\x98\xE3\x82\x9A" => "\xE3\x83\x9A",
		"\xE3\x83\x9B\xE3\x82\x99" => "\xE3\x83\x9C",
		"\xE3\x83\x9B\xE3\x82\x9A" => "\xE3\x83\x9D",
		"\xE3\x82\xA6\xE3\x82\x99" => "\xE3\x83\xB4",
		"\xE3\x83\xAF\xE3\x82\x99" => "\xE3\x83\xB7",
		"\xE3\x83\xB0\xE3\x82\x99" => "\xE3\x83\xB8",
		"\xE3\x83\xB1\xE3\x82\x99" => "\xE3\x83\xB9",
		"\xE3\x83\xB2\xE3\x82\x99" => "\xE3\x83\xBA",
		"\xE3\x83\xBD\xE3\x82\x99" => "\xE3\x83\xBE",
		"\xF0\x91\x82\x99\xF0\x91\x82\xBA" => "\xF0\x91\x82\x9A",
		"\xF0\x91\x82\x9B\xF0\x91\x82\xBA" => "\xF0\x91\x82\x9C",
		"\xF0\x91\x82\xA5\xF0\x91\x82\xBA" => "\xF0\x91\x82\xAB",
		"\xF0\x91\x84\xB1\xF0\x91\x84\xA7" => "\xF0\x91\x84\xAE",
		"\xF0\x91\x84\xB2\xF0\x91\x84\xA7" => "\xF0\x91\x84\xAF",
		"\xF0\x91\x8D\x87\xF0\x91\x8C\xBE" => "\xF0\x91\x8D\x8B",
		"\xF0\x91\x8D\x87\xF0\x91\x8D\x97" => "\xF0\x91\x8D\x8C",
		"\xF0\x91\x92\xB9\xF0\x91\x92\xBA" => "\xF0\x91\x92\xBB",
		"\xF0\x91\x92\xB9\xF0\x91\x92\xB0" => "\xF0\x91\x92\xBC",
		"\xF0\x91\x92\xB9\xF0\x91\x92\xBD" => "\xF0\x91\x92\xBE",
		"\xF0\x91\x96\xB8\xF0\x91\x96\xAF" => "\xF0\x91\x96\xBA",
		"\xF0\x91\x96\xB9\xF0\x91\x96\xAF" => "\xF0\x91\x96\xBB",
		"\xF0\x91\xA4\xB5\xF0\x91\xA4\xB0" => "\xF0\x91\xA4\xB8",
	);
}

?>