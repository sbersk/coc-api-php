<?php

namespace ClashOfClans\Api\CurrentWar;

use ClashOfClans\Api\AbstractResource;

class Attacks extends AbstractResource
{

    protected $casts = [
        'all' => WarAttack::class
    ];

    /**
     * @return WarAttack|null
     */
    public function first()
    {
        return $this->get(0);
    }

    /**
     * @return WarAttack|null
     */
    public function nth($i)
    {
        return $this->get($i);
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->get();
    }
}
