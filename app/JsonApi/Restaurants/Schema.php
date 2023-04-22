<?php

namespace App\JsonApi\Restaurants;

use CloudCreativity\LaravelJsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected string $resourceType = 'restaurants';

    /**
     * @param \App\Restaurant $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource):string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Restaurant $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource):array
    {
        return [
            'name' => $resource->name,
            'address' => $resource->address,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }


    public function getRelationships($resource, $isPrimary, array $includeRelationships):array
    {
        return [
            'dishes' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }
}
