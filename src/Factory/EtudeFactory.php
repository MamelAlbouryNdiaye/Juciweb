<?php

namespace App\Factory;

use App\Entity\Etude;
use App\Repository\EtudeRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Etude>
 *
 * @method        Etude|Proxy create(array|callable $attributes = [])
 * @method static Etude|Proxy createOne(array $attributes = [])
 * @method static Etude|Proxy find(object|array|mixed $criteria)
 * @method static Etude|Proxy findOrCreate(array $attributes)
 * @method static Etude|Proxy first(string $sortedField = 'id')
 * @method static Etude|Proxy last(string $sortedField = 'id')
 * @method static Etude|Proxy random(array $attributes = [])
 * @method static Etude|Proxy randomOrCreate(array $attributes = [])
 * @method static EtudeRepository|RepositoryProxy repository()
 * @method static Etude[]|Proxy[] all()
 * @method static Etude[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Etude[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Etude[]|Proxy[] findBy(array $attributes)
 * @method static Etude[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Etude[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EtudeFactory extends ModelFactory
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
            // ->afterInstantiate(function(Etude $etude): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Etude::class;
    }
}
