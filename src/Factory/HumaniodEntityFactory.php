<?php

namespace App\Factory;

use App\Entity\HumaniodEntity;
use App\Repository\HumaniodEntityRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<HumaniodEntity>
 *
 * @method        HumaniodEntity|Proxy create(array|callable $attributes = [])
 * @method static HumaniodEntity|Proxy createOne(array $attributes = [])
 * @method static HumaniodEntity|Proxy find(object|array|mixed $criteria)
 * @method static HumaniodEntity|Proxy findOrCreate(array $attributes)
 * @method static HumaniodEntity|Proxy first(string $sortedField = 'id')
 * @method static HumaniodEntity|Proxy last(string $sortedField = 'id')
 * @method static HumaniodEntity|Proxy random(array $attributes = [])
 * @method static HumaniodEntity|Proxy randomOrCreate(array $attributes = [])
 * @method static HumaniodEntityRepository|RepositoryProxy repository()
 * @method static HumaniodEntity[]|Proxy[] all()
 * @method static HumaniodEntity[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static HumaniodEntity[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static HumaniodEntity[]|Proxy[] findBy(array $attributes)
 * @method static HumaniodEntity[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static HumaniodEntity[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class HumaniodEntityFactory extends ModelFactory
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
            'email' => self::faker()->email(),
            'firstname' => self::faker()->firstName(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(HumaniodEntity $humaniodEntity): void {})
        ;
    }

    protected static function getClass(): string
    {
        return HumaniodEntity::class;
    }
}
