<?php

namespace App\JsonApi\Dishes;

use CloudCreativity\LaravelJsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected string $resourceType = 'dishes';

    /**
     * @param \App\Dish $resource
     *      the domain record being serialized.
     * @return string
     */
    public function getId($resource):string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param \App\Dish $resource
     *      the domain record being serialized.
     * @return array
     */
    public function getAttributes($resource):array
    {
        return [
            'name' => $resource->name,
            'rating' => $resource->rating,
            'createdAt' => $resource->created_at,
            'updatedAt' => $resource->updated_at,
        ];
    }


    public function getRelationships($resource, $isPrimary, array $includeRelationships):array
    {
        return [
           'restaurant' => [
                self::SHOW_SELF => true,
                self::SHOW_RELATED => true,
            ]
        ];
    }
}
