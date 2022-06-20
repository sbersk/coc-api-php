<?php

namespace ClashOfClans\Api\CurrentWar;

use ClashOfClans\Api\AbstractResource;
use ClashOfClans\Api\League\League;

/**
 * @method string name()
 * @method string tag()
 * @method int townhallLevel()
 * @method Attacks attacks()
 * @method int opponentAttacks()
 * @method WarAttack bestOpponentAttack()
 */
class WarPlayer extends AbstractResource
{
    protected $casts = [
        'attacks' => Attacks::class,
        'bestOpponentAttack' => WarAttack::class
    ];
}
