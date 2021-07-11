<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['https://idp.upo.net/idp'] = [
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://idp.upo.net/idp',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8444/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8444/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'certData' => 'MIICZDCCAc2gAwIBAgIBADANBgkqhkiG9w0BAQ0FADBPMQswCQYDVQQGEwJlczEQMA4GA1UECAwHU2V2aWxsYTEMMAoGA1UECgwDVVBPMSAwHgYDVQQDDBdodHRwczovL2lkcC51cG8ubmV0L2lkcDAeFw0yMTA3MDkxOTQxMDNaFw0yMjA3MDkxOTQxMDNaME8xCzAJBgNVBAYTAmVzMRAwDgYDVQQIDAdTZXZpbGxhMQwwCgYDVQQKDANVUE8xIDAeBgNVBAMMF2h0dHBzOi8vaWRwLnVwby5uZXQvaWRwMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC1a50NLaN0caaNamiE+W6nllXLGRoInPyqSq9k8YBkYigA8QdALyLL9LVSfv+ovcayCjSZSzebid3z5mQ5BpE2Vk7/yODd7sgtvP4wz0aSsrbKcjng0KWgabeuj7C+CL3qXpA4jzUEiHqfzlqUjsEzcIlkuOnz2w2c90tg/zBROwIDAQABo1AwTjAdBgNVHQ4EFgQUQI9/jMhnrQJT4vo1JdBgqpUkUTMwHwYDVR0jBBgwFoAUQI9/jMhnrQJT4vo1JdBgqpUkUTMwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQ0FAAOBgQA+CUN/FVcX1fragag4GxHBf07ARVL/NeKchkuVgFNZRm4azdFqOAYnDC9YMEEPDk46kHSzb7iapKeeGsfrpipyx7KI8PrPFPnTkHvkBhtD3FmrpqsFZeM5q/inPtnmhvMy/x9t4hVV9myvu7ZwKrpeTuCdI7j/MvM6O18cR3twaQ==',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
];

$metadata['https://idp.uca.net/idp'] = [
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'https://idp.uca.net/idp',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8446/simplesaml/saml2/idp/SSOService.php',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:8446/simplesaml/saml2/idp/SingleLogoutService.php',
        ],
    ],
    'certData' => 'MIICYDCCAcmgAwIBAgIBADANBgkqhkiG9w0BAQ0FADBNMQswCQYDVQQGEwJlczEOMAwGA1UECAwFQ2FkaXoxDDAKBgNVBAoMA1VDQTEgMB4GA1UEAwwXaHR0cHM6Ly9pZHAudWNhLm5ldC9pZHAwHhcNMjEwNzA5MjI1MjU3WhcNMjIwNzA5MjI1MjU3WjBNMQswCQYDVQQGEwJlczEOMAwGA1UECAwFQ2FkaXoxDDAKBgNVBAoMA1VDQTEgMB4GA1UEAwwXaHR0cHM6Ly9pZHAudWNhLm5ldC9pZHAwgZ8wDQYJKoZIhvcNAQEBBQADgY0AMIGJAoGBALcw7baT4fV6VuDq3Ug+2uwwbxw+Q7B5D+WUj2Gtp9eq5kAF+cP03zen5ztrppBNnfZMHrMjiiTVOdgzTRVn3Bc0KQa1tyR90C9WWOFC1CRGwJ9Iej7vo5sbxsVY6d+8/s8eRxqUP8BkDxOVmD+zCjlXFh7dH2cu+XistA2LBfHtAgMBAAGjUDBOMB0GA1UdDgQWBBR4aLyrxdwSXFanIk1S1WY4XOmuNDAfBgNVHSMEGDAWgBR4aLyrxdwSXFanIk1S1WY4XOmuNDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEBDQUAA4GBALMbO5TZKvJgO7jClDMEuPxeFI7FP+tcvMRm6tKTsPN41SWs/XIMZh3k6HGeAn/VRfKyt76ExXtaw0JsaOuUx6AU+B97kwpNKIFfXqxPp3VWVojbHrii8naQRDVNKFbqCetp7Yk3MTDtayF0WiGEu48xPRTMdsVKAKSBwYOwzoKD',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
];
