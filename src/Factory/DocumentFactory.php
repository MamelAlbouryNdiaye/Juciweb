<?php

namespace App\Factory;

use App\Entity\Document;
use App\Repository\DocumentRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;


/**
 * @extends ModelFactory<Document>
 *
 * @method        Document|Proxy create(array|callable $attributes = [])
 * @method static Document|Proxy createOne(array $attributes = [])
 * @method static Document|Proxy find(object|array|mixed $criteria)
 * @method static Document|Proxy findOrCreate(array $attributes)
 * @method static Document|Proxy first(string $sortedField = 'id')
 * @method static Document|Proxy last(string $sortedField = 'id')
 * @method static Document|Proxy random(array $attributes = [])
 * @method static Document|Proxy randomOrCreate(array $attributes = [])
 * @method static DocumentRepository|RepositoryProxy repository()
 * @method static Document[]|Proxy[] all()
 * @method static Document[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Document[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Document[]|Proxy[] findBy(array $attributes)
 * @method static Document[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Document[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class DocumentFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Document $document): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Document::class;
    }
}
