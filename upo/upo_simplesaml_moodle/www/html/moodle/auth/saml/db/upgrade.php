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
 * @author  Erlend Strømsvik - Ny Media AS
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package auth/saml
 *
 * Authentication Plugin: SAML based SSO Authentication
 *
 * Authentication using SAML2 with SimpleSAMLphp.
 *
 * Based on plugins made by Sergio Gómez (moodle_ssp) and Martin Dougiamas (Shibboleth).
 */

defined('MOODLE_INTERNAL') || die();
/**
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_auth_saml_upgrade($oldversion) {
    if ($oldversion < 2018020601) {
        upgrade_fix_config_auth_plugin_names('saml');
        upgrade_fix_config_auth_plugin_defaults('saml');
        upgrade_plugin_savepoint(true, 2018020601, 'auth', 'saml');
    }

    return true;
}
