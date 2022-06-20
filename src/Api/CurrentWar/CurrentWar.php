<?php

namespace ClashOfClans\Api\CurrentWar;

use ClashOfClans\Api\AbstractResource;

/**
 * @method string state()
 * @method int teamSize()
 * @method int attacksPerMember()
 * @method string preparationStartTime()
 * @method string startTime()
 * @method string endTime()
 * @method CurrentWarClan clan()
 * @method CurrentWarClan opponent()
 */
class CurrentWar extends AbstractResource
{
    protected $casts = [
        'clan' => CurrentWarClan::class,
        'opponent' => CurrentWarClan::class
    ];
}

?>
