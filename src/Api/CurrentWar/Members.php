<?php

namespace ClashOfClans\Api\CurrentWar;

use ClashOfClans\Api\AbstractResource;

class Members extends AbstractResource
{

    protected $casts = [
        'all' => WarPlayer::class
    ];

    /**
     * @return WarPlayer|null
     */
    public function first()
    {
        return $this->get(0);
    }

    /**
     * @return WarPlayer|null
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
