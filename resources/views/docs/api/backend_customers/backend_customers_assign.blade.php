<div id="{{ $resource['name'] }}" class="subsection">
    <h2 class="mb-4">Assign Plan</h2>
    <div class="row">
        <div class="col-md-6 pr-5">                        
            <p>Assign Plan</p>

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
                                'name' => 'uid',
                                'type' => 'string',
                                'desc' => 'Customer\'s uid',
                            ],
                            [
                                'name' => 'plan_uid',
                                'type' => 'string',
                                'desc' => 'Plan\'s uid',
                            ],
                        ],
                    ])
                </div>
            </div>
        </div>
        <div class="col-md-6">              
            <div class="sticky two-blocks">
                @include('docs.api._curl', [
                    'title' => 'ENABDISABLELE CUSTOMER',
                    'curl' => [
                        'uri' => 'customers/<span class="hljs-keyword">{uid}</span>/assign-plan/<span class="hljs-keyword">{plan_uid}</span>',
                        'method' => 'POST',
                        'params' => [
                            ['name' => 'api_token', 'value' => '*|token_string|*'],
                        ],
                    ],
                ])

@include('docs.api._response', [
    'json' => '{
    "status": 1,
    "message": "Customer was assigned to plan",
    "customer_uid": "5fd093b62ea11"
}',
    ])
            </div>   
        </div>
    </div>
</div>