<?php

use Backstage\Models\Site;
use Backstage\Models\User;
use Backstage\Models\Media;

use Backstage\Media\Resources\MediaResource;

return [
    'accepted_file_types' => [
        'image/jpeg',
        'image/png',
        'image/webp',
        'image/svg+xml',
        'video/mp4',
        'video/webm',
        'audio/mpeg',
        'audio/ogg',
        'application/pdf',
    ],
    'directory' => 'media',
    'disk' => 'public',
    'should_preserve_filenames' => false,
    'should_register_navigation' => true,
    'visibility' => 'public',
    'is_tenant_aware' => true,
    'tenant_ownership_relationship_name' => 'site',
    'tenant_relationship' => 'site',
    'tenant_model' => Site::class,
    'model' => Media::class,
    'user_model' => User::class,
    'resources' => [
        'label' => 'Media',
        'plural_label' => 'Media',
        'navigation_group' => null,
        'navigation_label' => 'Media',
        'navigation_icon' => 'heroicon-o-photo',
        'navigation_sort' => null,
        'navigation_count_badge' => false,
        'resource' => MediaResource::class,
    ],
];
