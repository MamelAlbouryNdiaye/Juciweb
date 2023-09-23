<?php

namespace App\Factory;

use App\Entity\Recommandation;
use App\Repository\RecommandationRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Recommandation>
 *
 * @method        Recommandation|Proxy create(array|callable $attributes = [])
 * @method static Recommandation|Proxy createOne(array $attributes = [])
 * @method static Recommandation|Proxy find(object|array|mixed $criteria)
 * @method static Recommandation|Proxy findOrCreate(array $attributes)
 * @method static Recommandation|Proxy first(string $sortedField = 'id')
 * @method static Recommandation|Proxy last(string $sortedField = 'id')
 * @method static Recommandation|Proxy random(array $attributes = [])
 * @method static Recommandation|Proxy randomOrCreate(array $attributes = [])
 * @method static RecommandationRepository|RepositoryProxy repository()
 * @method static Recommandation[]|Proxy[] all()
 * @method static Recommandation[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Recommandation[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Recommandation[]|Proxy[] findBy(array $attributes)
 * @method static Recommandation[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Recommandation[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class RecommandationFactory extends ModelFactory
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
            'type' => self::faker()->realtext(50),
            'detail' => self::faker()->text(),  
            'besoins' => self::faker()->text(),       
            'document' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Recommandation $recommandation): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Recommandation::class;
    }
}
