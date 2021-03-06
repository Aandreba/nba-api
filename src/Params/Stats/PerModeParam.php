<?php declare(strict_types = 1);

namespace JasonRoman\NbaApi\Params\Stats;

class PerModeParam extends AbstractStatsParam
{
    const MINUTES_PER         = 'MinutesPer';
    const PER_36              = 'Per36';
    const PER_40              = 'Per40';
    const PER_48              = 'Per48';
    const PER_100_PLAYS       = 'Per100Plays';
    const PER_100_POSSESSIONS = 'Per100Possessions';
    const PER_GAME            = 'PerGame';
    const PER_MINUTE          = 'PerMinute';
    const PER_PLAY            = 'PerPlay';
    const PER_POSSESSION      = 'PerPossession';
    const TOTALS              = 'Totals';

    const OPTIONS_TOTALS_PER_GAME = [
        self::TOTALS,
        self::PER_GAME,
    ];

    const OPTIONS_TOTALS_PER_GAME_PER_48 = [
        self::TOTALS,
        self::PER_48,
        self::PER_GAME,
    ];

    const OPTIONS_TOTALS_PER_GAME_PER_36 = [
        self::TOTALS,
        self::PER_36,
        self::PER_GAME,
    ];

    const OPTIONS_TOTALS_PER_GAME_PER_48_PER_40_PER_36_PER_MINUTE = [
        self::TOTALS,
        self::PER_36,
        self::PER_40,
        self::PER_48,
        self::PER_GAME,
        self::PER_MINUTE,
    ];

    const OPTIONS_ALL = [
        self::TOTALS,
        self::MINUTES_PER,
        self::PER_GAME,
        self::PER_48,
        self::PER_40,
        self::PER_36,
        self::PER_MINUTE,
        self::PER_POSSESSION,
        self::PER_PLAY,
        self::PER_100_POSSESSIONS,
        self::PER_100_PLAYS,
    ];

    /**
     * {@inheritdoc}
     * @return string
     */
    public static function getDefaultValue(): string
    {
        return self::PER_GAME;
    }
}