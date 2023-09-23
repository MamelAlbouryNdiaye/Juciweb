<?php

namespace App\Factory;

use App\Entity\Materiel;
use App\Repository\MaterielRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Materiel>
 *
 * @method        Materiel|Proxy create(array|callable $attributes = [])
 * @method static Materiel|Proxy createOne(array $attributes = [])
 * @method static Materiel|Proxy find(object|array|mixed $criteria)
 * @method static Materiel|Proxy findOrCreate(array $attributes)
 * @method static Materiel|Proxy first(string $sortedField = 'id')
 * @method static Materiel|Proxy last(string $sortedField = 'id')
 * @method static Materiel|Proxy random(array $attributes = [])
 * @method static Materiel|Proxy randomOrCreate(array $attributes = [])
 * @method static MaterielRepository|RepositoryProxy repository()
 * @method static Materiel[]|Proxy[] all()
 * @method static Materiel[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Materiel[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Materiel[]|Proxy[] findBy(array $attributes)
 * @method static Materiel[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Materiel[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class MaterielFactory extends ModelFactory
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
            'etat' => self::faker()->realtext(50),
            'description' => self::faker()->text(),  
            'type' => self::faker()->realtext(50),       
            'date' => self::faker()->dateTime(),
            'document' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Materiel $materiel): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Materiel::class;
    }
}
