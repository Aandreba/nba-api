<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\DraftCombine;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Draft combine drill (strength & agility) results. WNBA/G-League is supported, but currently only NBA returns results.
 */
class DraftCombineDrillResultsRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/draftcombinedrillresults';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LeagueIdParam::OPTIONS_NBA_WNBA_G_LEAGUE)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $seasonYear;
}