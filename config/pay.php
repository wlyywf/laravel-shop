<?php

return [
    'alipay' => [
        'app_id'         => '2016101400681476',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArAGFZ1EwfFKHxTnaHkr1UjC5u3pebFNDY/yg1JI73TLjm058bmoUu2ObvUNMGfcklF2ogsbeOg/zaWJ53nFeLS7N/0OCqzO8oSuMTugGqDsBHosLVR5aGlF7b35R3dPssoagrlfk/978IkKUZHwrrl1w4oLL9eqbdItHbDqoMgXX/NUwknYQadOBSA1DWcwpj0At7YC6C85YKPGDcCUyBxNwGecyjuVkOrUHdjtszUf3khFOwz0V2LQFzXzmTHWLIzLi/FBBFFWbFYtEckt5plYL8fcb57PGBqTxdZDXOLweh+N6ruoVtat2+Z5OeKMvFXtRBaIG+dj1ZbL3ZQU8CwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAhqM6aqy8nxA5lhC1Xa0roFmOjsGGzkxNJGQvVyCu+6IV//8QYkRSie2WVdc8IfnQDb+EqNVs365MHe1KAp3WgjqhYizd1LY5LEzPzqWthKILtnwdLMD9jUy9JqYUhqgbSO4LH3uGfrZfI7FQRsOU6DY3xv5jftX4ryUXW/If2hNEky/TTJKO6hwSQrXAbtVvld5nSpn1oWpOqawr24/mJJ5kbxJZ7gKsJDhVFv+SCQTV3sVRobtCuwlvUIt0I9793fzXbdgPo2yjx17gj3x0VFGaAfbCG1G0AcKQRX955R3wPHUh7Mftn92++lAEyI6pr5g6wpr8tBQYXT8ho9cTOwIDAQABAoIBABcMTEzEo0mLioAg/hs6MNSzYA8aHAymzTHkoKIGq03SUnfPXyujTInmDS1GujmKvU4NMhWA67Fi8g7RdzD5eiYzCTt4OMVYKHNn9s8GV6zz3JNxrcDijMUqlNrP5YWjs4AJmAfcqop4h9LhYL+sbYpO9b9v/vJQiNDaxaPsz/0RvTITxcaGIKnnVxIFNt5o9pJfHWLpVf1GCCdbnV991FkjgppxcpgmFKCIsLmz+Cl/0dcz+o6KkMfr5Gv8GMRpSLGO/uT9ej6LtwQybH6sx8UTcKZ/XS/3hRmPrt0jq7QbawsulYSk/vM8MY7VdatIyV3muCZewyE7Wdxwc5yWD+ECgYEA1ENI9ysIQQdeBqQrxTDrIwQsiPcjaxc1+nrf6EyPcUe+fx25NxZ5q5nY1BLvV0HxwkP4XxHCN2kua6K9dL0/CBTtngiXCxH02upbHr3KJa8txJEBMFcwFOKCZMQF48BJ/x2AN949He2368KXrNLUBVlYN4ju44zBQUrIP6Wi+IsCgYEAomFEcQ9m3OkzLEl8+jk9xPOX0LnDsUtigOu9ZHXZ63lGfkspyXip3aMZ2y9yvWcIOuXDZF5uZF51cRLDsHuvYgolDRUbbjeQcELpaKpOPPyk1SViX/gBGpFktyLEKSUwsgOmynK0E4eiPGMez0iG2iCIkvTgbq1e9GAzHGJt9hECgYBPRtYQonzRtMu0VUqXun6HtH5hpVQQIjoh1BSecUG9wFrwpQxQ+87zfWFTS8MiZtnBgZtY/ov4IAubXcu+txO8k/xvYqvvEYTO4mqn36CJVJUWbkXwZQ/rLPIgamn8twusAbuqohFXhTqFDkeR36gaW1UsYLNAP4jKNwD1bIqiowKBgQCaSQ0818OG11U2GUVUg5r7TfDL9BXKmbQohtVXZNsAcCTYzxYPRkUwQE7LAlRlPkaFn9Z9wXPmjhHMtGWXhI3p+3Wk7o83tDfbUthwCJF6RRthIrpMMVrrIYaus6vq5FlWaz3JUh9kBxXRhuS5U1I+Y3chGuc8giKc0+L8b1HH4QKBgQCiVp5pjWnD8Ib6nEv4qTBVvtpOvOHLy3PHtiIF/oYACYY+mgQFKtE1xAyNpIc5gbKOyFsWrTJTonga+NnL+WlXbs9EhOWmcePvM5nmGOnbiXxly7VWqD42z83/7yj/TGUDBnLEe9OdUVZQdQs7YiEZDRG4AN7rcgXFMFofXpmo/A==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];