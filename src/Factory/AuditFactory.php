<?php

namespace App\Factory;

use App\Entity\Audit;
use App\Repository\AuditRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Audit>
 *
 * @method        Audit|Proxy create(array|callable $attributes = [])
 * @method static Audit|Proxy createOne(array $attributes = [])
 * @method static Audit|Proxy find(object|array|mixed $criteria)
 * @method static Audit|Proxy findOrCreate(array $attributes)
 * @method static Audit|Proxy first(string $sortedField = 'id')
 * @method static Audit|Proxy last(string $sortedField = 'id')
 * @method static Audit|Proxy random(array $attributes = [])
 * @method static Audit|Proxy randomOrCreate(array $attributes = [])
 * @method static AuditRepository|RepositoryProxy repository()
 * @method static Audit[]|Proxy[] all()
 * @method static Audit[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Audit[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Audit[]|Proxy[] findBy(array $attributes)
 * @method static Audit[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Audit[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class AuditFactory extends ModelFactory
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
            'detail' => self::faker()->text(),
            'etat' => self::faker()->text(),  
            'commentaire' => self::faker()->text(),       
            'materiel' => self::faker()->text(),
            'document' => self::faker()->text(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Audit $audit): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Audit::class;
    }
}
