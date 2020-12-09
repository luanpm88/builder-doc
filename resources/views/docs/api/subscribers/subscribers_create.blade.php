<div id="{{ $resource['name'] }}" class="subsection">
    <h4 class="mb-4">Add new Subscriber</h4>
    <div class="row">
        <div class="col-md-6 pr-5">                        
            <p>Add subscriber to list</p>

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
                                'name' => 'list_uid',
                                'type' => 'string',
                                'desc' => 'Subscriber\'s uid',
                            ],
                            [
                                'name' => 'EMAIL',
                                'type' => 'string',
                                'desc' => 'Subscriber\'s email',
                            ],
                            [
                                'name' => 'tag',
                                'type' => 'string',
                                'desc' => 'Subscriber\'s tags, seperated by a comma (,).',
                            ],
                            [
                                'name' => '[OTHER_FIELDS...]',
                                'type' => 'string',
                                'desc' => 'All subscriber\'s other fields: FIRST_NAME (?), LAST_NAME (?),... (depending on the list fields configuration)',
                            ],
                        ],
                    ])
                </div>
            </div>
        </div>
        <div class="col-md-6">                        
            <div class="sticky two-blocks">
                @include('docs.api._curl', [
                    'title' => 'ADD SUBSCRIBER',
                    'curl' => [
                        'uri' => 'lists/<span class="hljs-keyword">{uid}</span>/add-field',
                        'method' => 'POST',
                        'params' => [
                            ['name' => 'api_token', 'value' => '*|token_string|*'],
                            ['name' => 'EMAIL', 'value' => 'test@gmail.com'],
                            ['name' => 'tag', 'value' => 'foo,bar,tag+with+space,'],
                            ['name' => 'FIRST_NAME', 'value' => 'Marine'],
                            ['name' => 'LAST_NAME', 'value' => 'Joze'],
                        ],
                    ],
                ])

                @include('docs.api._response', [
                    'json' => '{
    "status": 1,
    "message": "Confirmation email sent to the subscriber",
    "subscriber_uid": "5fd07ca421da0"
}',
                ])
            </div>
        </div>
    </div>
</div>