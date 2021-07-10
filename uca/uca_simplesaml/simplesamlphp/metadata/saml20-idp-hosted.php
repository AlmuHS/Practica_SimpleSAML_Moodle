<?php

/**
 * SAML 2.0 IdP configuration for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-hosted
 */

$metadata['https://idp.uca.net/idp'] = array(
        'host' => '__DEFAULT__',
        'privatekey' => 'server.key',
        'certificate' => 'server.pub',
        'auth' => 'example-sql',
);
