<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 13/03/2019
 * Time: 4:00 PM.
 */

namespace Aliuwahab\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Aliuwahab\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $predefinedJokes = [
            'Did you hear about the mathematician who’s afraid of negative numbers?',
            'Why do we tell actors to “break a leg?”',
            'Helvetica and Times New Roman walk into a bar.',
        ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();
        $this->assertContains($joke, $predefinedJokes);
    }
}
