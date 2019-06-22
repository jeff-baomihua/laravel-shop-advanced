<?php

return [
    'alipay' => [
        'app_id'         => '2016101100660864',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApSqGamM/u/4ZijNEhWDk2WMSJxJBHv9G5689ZiuWKisWk8cqun/Vy0IFhhRGpieOvfQserBYQpABt/Jo4mRVdaZBuPT8LQaWgSXU6fapEOTGrKUd4NbmY/n73kxZFrHK5xoENpiEnAHPdsshkrFKcvWIRh6GAvYQ+mbhscVPk+z8UfzvLkJch+IVHa81chB2yEUxfgCqbDMpA3NZ+WlaiWFnwj29SV0OiiRO9o8clf+AiQebdPQrR6o3OqRQ0qPk351urECHBK18EVymaCSb+aKLuSD8/7B/0VLecxEX88T8BBPY0ZdRFcoa92Oq/r3/z4Z0K4Ft15XaKjEEbHjkJQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAyTjOk86F0Z0uZt1J2YhJ4CADNSa+HowJR4nTctUa+ExkU+QMfS5GfsxRWExW3h/6xdc5IbuLzDwfDv2RLMjbwK2JmfcTLO6SOpCOEnupitycOtBZx/4pEM/KSONd5MTjukDt3iwDTptb7Ru4qU4Pq4XzL7NR03VPV1EVKNmgF5pNS9ANZAy5mkyguqvz2/2WOMdNh3UF8bfZ095fMCHa9g2pI4v5PcSzxj8VOlTXiNZqFreMdP+ByQXx9WeHQO7a8KaV3cNQZZX7nvJAToeSvXYHeh4Rn7YbMHCqgUIhaxXRMHyY378KzY7N2REWf5wZN9yUCZHkH8jemFgfRXkoYQIDAQABAoIBAQCfUVP2ITFAurOPjCu5iTf8tTv07FzhMLz0IEMDi4kUCN/yr//XaTk1ka3iPGcW7bkOxY4dkDFqnjt1EfzMuaeMUZo+Birvi2DJ78QdDD47jNpBks9TEoAPKIYf2a1wwRcRU/FB1BU2Orm47RbzLbQoeSEHpnHl+9664p7fPheMNxyTZUorMeDEN2trByF4+vi35s+TYR018VRVowV7BPUQ1yy62L5fCD90WknLyFNcQRIW/K+MF0Zox6fN1jWQ8Q3icEtu99L15sI0sZhyHto6TNcB7n4A6FE7HPgQQO+RTqsC1eziFNlw1Hoc0Y0zFi5SQPp37nW2PaWrQotQEqHVAoGBAP8/5u956ikq6EvSCsA5lsx4cSC228aOO4g0WdqscvmDfAhNkalX0qCUpqeh8nuzu/JcBkZsaXaLgFI0y1YyiNyNmYz/7fw/yq32xeIDCIObIWuDh++DznNn5mMbNxZnV44yLX5MzxuUxNCEVI2T+PO6EIUHdo8RaZIURZBDpSoTAoGBAMnQPoUPJEvMXWbZm+zZ8mLSc0GecfGORGem3zTmimVtb8z2QYwiPbl6YJV35BAFDlHHmE/SquaWmRMJ2/22IM+BXfdXT/GrUtqMdlPOtYeEsQdsW+1F5KzBGq4IBz66PbwU1g8iBef7GsIJlZ+WVVThqWbCATcqNfm173fNJHI7AoGBANsWQmYywqZrSdAqjUfJJoKCrrdhvOqEktyp8qYbduRr0z5dNjWgSA3FCfbArp02/I9eJZS04SD7RD1LS2zFG2wTrkS0N9VX++Ot+NOxvtEXimv6DeervryX5cwTRAla0nAe6aWK0Ange75ulxSeegTZI+zLJxxN2cuk0sCtD0s5AoGAUnWuNfv73qTAPTgJB/v9l/dZdKRi9kolFR0P8rOINO1EU0EDg1iyU8j3EduM6ibGtQ+S4nq3rcQ3A5pxsvbp7R90341jcuGH1xixeIjrj1XeZ6QU45w9VYEJf7Z0D2NVujXhSQmj1Ce7xTDZW/23HBmgeAYpLPsoVsHJ+O9vRuUCgYEAq2j/EXXrgnqanw+UjDeSj6IDWwl5nQTBGQR9nUPq4i0m0qNb8it5YMPGrfFU5XcokeI5dM5/ILapGpIlioxfEHDNCq/aiaDbhehe6dq6eFWi15NZdYtVbK5l4DFEJXVfQklJjxwptzX/+G9qVGThQKWWs20xxHA3/gbjkWl4X2c=',
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
