<?php

namespace JasonRoman\NbaApi\Request\Data\Teams;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Request\Params\YearParam;

/**
 * Links to Android/iOS apps, TicketMaster tickets, team website/tickets
 */
class TeamsConfigRequest extends AbstractDataApiRequest
{
    const ENDPOINT = '/data/1h/prod/{year}/teams_config.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2015)
     * @ApiAssert\ApiRegex(YearParam::FORMAT)
     *
     * @var int
     */
    public $year;
}