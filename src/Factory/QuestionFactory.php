<?php

namespace App\Factory;

use App\Entity\Question;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\ModelFactory;
use App\Repository\QuestionRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Symfony\Component\String\Slugger\AsciiSlugger;

/**
 * @extends ModelFactory<Question>
 *
 * @method        Question|Proxy create(array|callable $attributes = [])
 * @method static Question|Proxy createOne(array $attributes = [])
 * @method static Question|Proxy find(object|array|mixed $criteria)
 * @method static Question|Proxy findOrCreate(array $attributes)
 * @method static Question|Proxy first(string $sortedField = 'id')
 * @method static Question|Proxy last(string $sortedField = 'id')
 * @method static Question|Proxy random(array $attributes = [])
 * @method static Question|Proxy randomOrCreate(array $attributes = [])
 * @method static QuestionRepository|RepositoryProxy repository()
 * @method static Question[]|Proxy[] all()
 * @method static Question[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Question[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Question[]|Proxy[] findBy(array $attributes)
 * @method static Question[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Question[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class QuestionFactory extends ModelFactory
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
            'name' => self::faker()->text(35),
            'question' => self::faker()->paragraphs(
                self::faker()->numberBetween(1, 4),
                true
            ),
            'askedAt' => self::faker()->boolean(70) ? self::faker()->dateTimeBetween('-100 days', '-1 minute') : null,
            'votes' => self::faker()->randomNumber(),
            'owner' => HumaniodEntityFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            ->afterInstantiate(function(Question $question): void {
            if(!$question->getSlug()) {
                $slugger = new AsciiSlugger();
                $question->setSlug($slugger->slug($question->getName()));
            }
          })
         ;
    }

    protected static function getClass(): string
    {
        return Question::class;
    }
}
