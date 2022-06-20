<?php

namespace ClashOfClans\Api\CurrentWar;

use ClashOfClans\Api\AbstractResource;
use ClashOfClans\Api\Clan\Badge;

/**
 * @method string name()
 * @method string tag()
 * @method int clanLevel()
 * @method int attacks()
 * @method int stars()
 * @method float destructionPercentage()
 * @method Members members()
 */
class CurrentWarClan extends AbstractResource
{
    protected $casts = [
        'badgeUrls' => Badge::class,
        'members' => Members::class
    ];

    /**
     * @return Badge|null
     */
    public function badge()
    {
        return $this->get('badgeUrls');
    }
}
