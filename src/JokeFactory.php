<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 11/03/2019
 * Time: 9:00 PM
 */

namespace Aliuwahab\ChuckNorrisJokes;


class JokeFactory
{
    protected $jokes = [
        'Did you hear about the mathematician who’s afraid of negative numbers?',
        'Why do we tell actors to “break a leg?”',
        'Helvetica and Times New Roman walk into a bar.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

}