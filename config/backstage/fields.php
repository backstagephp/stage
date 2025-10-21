<?php

use Backstage\Models\Site;
use Backstage\CustomFields\Builder;
use Backstage\CustomFields\CheckboxList;
use Backstage\CustomFields\Select;
use Backstage\Resources\ContentResource;
return [
    'tenancy' => [
        'is_tenant_aware' => false,
        'relationship' => 'tenant',
        'key' => 'id',
    ],
    'custom_fields' => [
        Builder::class,
        CheckboxList::class,
        Select::class,
    ],
    'selectable_resources' => [
        ContentResource::class,
    ],
];
