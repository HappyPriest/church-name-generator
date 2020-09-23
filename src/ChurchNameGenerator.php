<?php

namespace HappyPriest\ChurchNameGenerator;

class ChurchNameGenerator extends \Faker\Provider\Base
{
    protected static $namesByCategory = array(
        'Saints' => array(
            'St. Erasmus',
            'St. Jan Sarkander',
            'St. Sebastian',
            'St. Francis Xavier',
            'St. Joachim',
            'St. Thomas the Apostle',
            'St. Paul',
        ),
        'Mary'   => array(
            'Our Lady of the Annunciation',
            'Our Lady of Charity',
            'Our Lady of Providence',
            'Our Lady of Confidence',
            'Our Lady of Consolation',
            'Our Lady of Good Success',
            'Our Lady of Guidance',
            'Our Lady of Peace',
            'Our Lady of Good Health',
            'Mary of Egypt',
        ),
    );

    /**
     * Get a church name string
     *
     * @return string
     */
    public static function name($group = null): string
    {
        $sectionGroup = ((isset($group) && isset(static::$namesByCategory[$group])) ? $group : array_rand(static::$namesByCategory));

        return static::$namesByCategory[$sectionGroup][array_rand(static::$namesByCategory[$sectionGroup])];

    }
}
