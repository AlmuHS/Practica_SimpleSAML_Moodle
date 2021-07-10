<?php

/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
$metadata['https://saml2sp.example.org'] = [
    'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
$metadata['google.com'] = [
    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    'simplesaml.nameidattribute' => 'uid',
    'simplesaml.attributes' => false,
];

$metadata['https://legacy.example.edu'] = [
    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
    /*
     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
     * Uncomment the following option to use SHA-1 for signatures directed
     * at this specific service provider if it does not support SHA-256 yet.
     *
     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
     * Please refer to the following document for more information:
     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
     */
    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
];


$metadata['https://sp.upo.net/sp'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8444/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost:8444/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://localhost:8444/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
        ],
        [
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost:8444/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://localhost:8444/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
        ],
    ],
    'certData' => 'MIICZDCCAc2gAwIBAgIBADANBgkqhkiG9w0BAQ0FADBPMQswCQYDVQQGEwJlczEQMA4GA1UECAwHU2V2aWxsYTEMMAoGA1UECgwDVVBPMSAwHgYDVQQDDBdodHRwczovL2lkcC51cG8ubmV0L2lkcDAeFw0yMTA3MDkxOTQxMDNaFw0yMjA3MDkxOTQxMDNaME8xCzAJBgNVBAYTAmVzMRAwDgYDVQQIDAdTZXZpbGxhMQwwCgYDVQQKDANVUE8xIDAeBgNVBAMMF2h0dHBzOi8vaWRwLnVwby5uZXQvaWRwMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC1a50NLaN0caaNamiE+W6nllXLGRoInPyqSq9k8YBkYigA8QdALyLL9LVSfv+ovcayCjSZSzebid3z5mQ5BpE2Vk7/yODd7sgtvP4wz0aSsrbKcjng0KWgabeuj7C+CL3qXpA4jzUEiHqfzlqUjsEzcIlkuOnz2w2c90tg/zBROwIDAQABo1AwTjAdBgNVHQ4EFgQUQI9/jMhnrQJT4vo1JdBgqpUkUTMwHwYDVR0jBBgwFoAUQI9/jMhnrQJT4vo1JdBgqpUkUTMwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQ0FAAOBgQA+CUN/FVcX1fragag4GxHBf07ARVL/NeKchkuVgFNZRm4azdFqOAYnDC9YMEEPDk46kHSzb7iapKeeGsfrpipyx7KI8PrPFPnTkHvkBhtD3FmrpqsFZeM5q/inPtnmhvMy/x9t4hVV9myvu7ZwKrpeTuCdI7j/MvM6O18cR3twaQ==',
];

$metadata['https://sp.uca.net/sp'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
        ],
        [
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
        ],
    ],
];

$metadata['https://sp.uca.net/sp'] = [
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
        ],
    ],
    'AssertionConsumerService' => [
        [
            'index' => 0,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 1,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
        ],
        [
            'index' => 2,
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
        ],
        [
            'index' => 3,
            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
            'Location' => 'https://localhost:8446/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
        ],
    ],
];
