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
 * Web services for auth_userkey.
 *
 * @package    auth_userkey
 * @copyright  2016 Dmitrii Metelkin (dmitriim@catalyst-au.net)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(
    'auth_userkey_request_login_url' => array(
        'classname'   => 'auth_userkey_external',
        'methodname'  => 'request_login_url',
        'classpath'   => 'auth/userkey/externallib.php',
        'description' => 'Return one time key based login URL',
        'type'        => 'write',
        'capabilities'  => 'auth/userkey:generatekey',
    ),
    'auth_userkey_send_login_url_email' => array(
        'classname'   => 'auth_userkey_external',
        'methodname'  => 'send_login_url_email',
        'classpath'   => 'auth/userkey/externallib.php',
        'description' => 'Sends one time key based login URL via known users email',
        'type'        => 'write',
        'capabilities'  => 'auth/userkey:generatekey',
    ),
);

$services = array(
    'User key authentication web service' => array(
        'functions' => array ('auth_userkey_request_login_url', 'auth_userkey_send_login_url_email'),
        'restrictedusers' => 1,
        'enabled' => 1,
    )
);
