<div id="{{ $resource['name'] }}" class="subsection">
    <h4 class="mb-4">Find Subscriber by Email</h4>
    <div class="row">
        <div class="col-md-6 pr-5">                        
            <p>Find Subscriber by Email</p>

            <div class="mt-4">
                <h5>Parameters</h5>

                <div class="mt-3">
                    @include('docs.api._attributes', [
                        'rows' => [
                            [
                                'name' => 'api_token',
                                'type' => 'string',
                                'desc' => 'Your API token. You can find it in your API main page when logged in.',
                            ],
                            [
                                'name' => 'email',
                                'type' => 'email',
                                'desc' => 'Subsciber\'s email',
                            ],
                        ],
                    ])
                </div>
            </div>
        </div>
        <div class="col-md-6">                        
            <div class="sticky two-blocks">
                @include('docs.api._curl', [
                    'title' => 'FIND SUBSCRIBERS',
                    'curl' => [
                        'uri' => 'subscribers/email/<span class="hljs-keyword">{email}</span>',
                        'method' => 'GET',
                        'params' => [
                            ['name' => 'api_token', 'value' => '*|token_string|*'],
                            ['name' => 'email', 'value' => 'test22@gmail.com'],
                        ],
                    ],
                ])

                @include('docs.api._response', [
                    'json' => '{
    "subscribers": [
        {
            "uid":"5fd07b8b65284",
            "list_uid":"5fc9e55410e10",
            "email":"test22@gmail.com",
            "status":"subscribed",
            "source":null,
            "ip_address":null,
            "FIRST_NAME":"Marine",
            "LAST_NAME":"Joze",
            "CUSTOM_FIELD_1":null
        }
    ]
}',
                ])
            </div>
        </div>
    </div>
</div>