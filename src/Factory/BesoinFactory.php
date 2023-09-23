<?php

namespace App\Factory;

use App\Entity\Besoin;
use App\Repository\BesoinRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Besoin>
 *
 * @method        Besoin|Proxy create(array|callable $attributes = [])
 * @method static Besoin|Proxy createOne(array $attributes = [])
 * @method static Besoin|Proxy find(object|array|mixed $criteria)
 * @method static Besoin|Proxy findOrCreate(array $attributes)
 * @method static Besoin|Proxy first(string $sortedField = 'id')
 * @method static Besoin|Proxy last(string $sortedField = 'id')
 * @method static Besoin|Proxy random(array $attributes = [])
 * @method static Besoin|Proxy randomOrCreate(array $attributes = [])
 * @method static BesoinRepository|RepositoryProxy repository()
 * @method static Besoin[]|Proxy[] all()
 * @method static Besoin[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Besoin[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Besoin[]|Proxy[] findBy(array $attributes)
 * @method static Besoin[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Besoin[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class BesoinFactory extends ModelFactory
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
            'detais' => self::faker()->text(),  
            'mission' => self::faker()->text(),       
            'document' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Besoin $besoin): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Besoin::class;
    }
}
