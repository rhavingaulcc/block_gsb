<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version info for GSB Report
 *
 * @package    Block
 * @subpackage GSB
 * @copyright  2012 onwards Richard Havinga richard.havinga@southampton-city.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2014021800;     // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2011120100;        // Requires this Moodle version
$plugin->component = 'block_gsb'; // Full name of the plugin (used for diagnostics)
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '2.2.0';
$plugin->dependencies   = array (
    'report_gsb'   => 2013071500,          // Needs the GSB Report
);

$plugin->cron = 3600; // time interval to run script on Cron
