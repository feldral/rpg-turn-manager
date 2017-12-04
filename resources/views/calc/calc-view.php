<?php
const TIER_1_STAT_NAMES = [
    'dexterity',
    'dominance',
    'creativity',
    'comprehension',
    'intuition',
    'influence',
    'focus',
    'fortitude',
];
const TIER_2_STAT_NAMES = [
    'speed',
    'health',
    'will',
    'energy',
    'energy_regen',
    'initiative',
    'physical_resistance',
    'mental_resistance',
];
const TALENT_NAMES      = [
    'one_hand',
    'two_hand',
    'blade',
    'blunt',
    'fire_magic',
    'ice_magic',
    'projectile_magic',
    'wave_magic',
    'barter',
    'speech_craft',
];
const ITEMS             = [
    'dagger'      => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.2,
        'hit_talent' => 'one_hand',
        'ctit_stat'  => 'dexterity',
        'crit_mod'   => 0.5,
    ],
    'short_sword' => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'one_hand',
        'ctit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
    ],
    'long_sword'  => [
        'min'        => 1,
        'max'        => 8,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'two_hand',
        'ctit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
    ],
    'mace'        => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'one_hand',
        'ctit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
    ],
    'fire_ball'   => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'fire_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'projectile_magic',
        'ctit_stat'  => 'creativity',
        'crit_mod'   => 0.2,
    ],
    'frost_bolt'  => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'ice_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.2,
        'hit_talent' => 'projectile_magic',
        'ctit_stat'  => 'creativity',
        'crit_mod'   => 0.5,
    ],
    'bribe'       => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'barter',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.5,
        'hit_talent' => false,
        'ctit_stat'  => 'intuition',
        'crit_mod'   => 0.2,
    ],
    'intimidate'  => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'speech_craft',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.2,
        'hit_talent' => false,
        'ctit_stat'  => 'intuition',
        'crit_mod'   => 0.5,
    ],
]
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- google hosted jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- angular script -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


        <!-- Styles -->
        <style>
        </style>
    </head>
    <body ng-app="statCalc" ng-controller="myCtrl">
        <div class="container-fluid">
            <div class="row">
                <div class="character-one col-xs-5">
                    <?= characterPanel('Character One', 'charOne') ?>
                </div>
                <div class="play-field col-xs-2">Play Field</div>
                <div class="character-two col-xs-5">
                    <?= characterPanel('Character Two', 'charTwo') ?>
                </div>
            </div>
    </body>
    <script>
        var app = angular.module('statCalc', []);
        app.controller('myCtrl', function ($scope) {
            //stats

            <?= characterStats('charOne') ?>
            <?= characterStats('charTwo') ?>

            //skills
            $scope.items = [];

            $scope.items.dagger = [];
            $scope.items.dagger.min = 1;
            $scope.items.dagger.max = 6;
            $scope.items.dagger.dmgMod = 0.5;
            $scope.items.dagger.critMod = 0.5;

            $scope.items.dagger = [];
            $scope.items.dagger.min = 1;
            $scope.items.dagger.max = 6;
            $scope.items.dagger.dmgMod = 0.5;
            $scope.items.dagger.critMod = 0.5;

            $scope.items.dagger = [];
            $scope.items.dagger.min = 1;
            $scope.items.dagger.max = 6;
            $scope.items.dagger.dmgMod = 0.5;
            $scope.items.dagger.critMod = 0.5;

            $scope.items.dagger = [];
            $scope.items.dagger.min = 1;
            $scope.items.dagger.max = 6;
            $scope.items.dagger.dmgMod = 0.5;
            $scope.items.dagger.critMod = 0.5;

            $scope.items.dagger = [];
            $scope.items.dagger.min = 1;
            $scope.items.dagger.max = 6;
            $scope.items.dagger.dmgMod = 0.5;
            $scope.items.dagger.critMod = 0.5;


            //skill data calculation
            $scope.methods = [];
            $scope.methods.hitBonus = function (level) {
                return Math.round((level / 100) * 20);
            };
            $scope.methods.damageMin = function (min, stat, mod) {
                return Math.round(((mod / 2) * stat) + min);
            };
            $scope.methods.damageMax = function (max, stat, mod) {
                return Math.round((mod * stat) + max);
            };
            $scope.methods.damageAverage = function (min, max, level) {
                let dif = max - min;
                let average = Math.round((level / 100) * dif);

                return min + average;
            };
            $scope.methods.criticalChance = function (base, stat, mod) {
                return Math.round((mod * stat) + base);
            };

            $scope.speed = function (char) {
                return char.dominance + char.dexterity - Math.abs(char.dexterity - char.dominance);
            };
            $scope.health = function (char) {
                return char.dominance + char.fortitude;
            };
            $scope.will = function (char) {
                return char.focus + char.influence;
            };
            $scope.energy = function (char) {
                return char.focus + char.fortitude;
            };
            $scope.energy_regen = function (char) {
                return Math.max(char.dexterity, char.creativity);
            };
            $scope.initiative = function (char) {
                return char.dexterity + char.creativity + char.intuition - Math.abs(char.dexterity - char.creativity - char.intuition);
            };
            $scope.physical_resistance = function (char) {
                return char.dexterity + char.intuition;
            };
            $scope.mental_resistance = function (char) {
                return char.comprehension + char.intuition;
            };

            $scope.maxValue = function (char) {
                return Math.max($scope.speed(char.dominance, char.dexterity), $scope.health(char.dominance, char.fortitude), $scope.will(char.focus, char.influence), $scope.energy(char.focus, char.fortitude), $scope.energyRegen(char.dexterity, char.creativity), $scope.initiative(char.dexterity, char.creativity, char.intuition), $scope.physical_resistance(char.dexterity, char.intuition), $scope.mental_resistance(char.comprehension, char.intuition));
            };

            //        $scope.chartURL = '';

            $scope.Math = window.Math;
        });
    </script>

    <?php

    /**
     * generates visuals for a Character Panel
     *
     * @param $name
     * @param $slug
     */
    function characterPanel($name, $slug)
    {
        ?>
        <div class="row">
            <div class="col-xs-12"><?= $name ?></div>
            <div class="col-xs-12 col-md-6">
                <?php
                foreach (TIER_1_STAT_NAMES as $statName) {
                    ?>
                    <label class="col-xs-8" for="<?= "$slug.$statName" ?>"><?= statNameToLabel($statName) ?></label>
                    <input class="col-xs-4" id="<?= "$slug.$statName" ?>" type="number" max="100" min="1" ng-model="<?= "$slug.$statName" ?>" />
                    <?php
                }
                ?>
            </div>
            <div class="col-xs-12 col-md-6">
                <?php
                foreach (TIER_2_STAT_NAMES as $statName) {
                    ?>
                    <label class="col-xs-8" for="<?= "$slug.$statName" ?>"><?= statNameToLabel($statName) ?></label>
                    <span class="col-xs-4" id="<?= $slug . $statName ?>" ng-bind="<?= "$statName($slug)" ?>"></span>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">Talents</div>
            <div class="col-xs-12 col-md-6">
                <?php
                foreach (TALENT_NAMES as $talentName) {
                    ?>
                    <label class="col-xs-8" for="<?= $slug . $talentName ?>"><?= statNameToLabel($talentName) ?></label>
                    <input class="col-xs-4" id="<?= $slug . $talentName ?>" type="number" max="100" min="1" ng-model="<?= "$slug.$talentName" ?>" />
                    <?php
                }
                ?>
            </div>
            <div class="col-xs-12 col-md-6">
                <?= items($slug) ?>
            </div>
        </div>
        <?php
    }

    /**
     * angular to set scope values for character
     *
     * @param $slug
     */
    function characterStats($slug)
    {
        ?>
        //stats and talents
        $scope.<?= $slug ?> = [];
        <?php
        foreach (TIER_1_STAT_NAMES as $statName) {
            ?>
            $scope.<?= $slug . '.' . $statName ?> = 5;
            <?php
        }
        foreach (TALENT_NAMES as $talentName) {
            ?>
            $scope.<?= $slug . '.' . $talentName ?> = 1;
            <?php
        }
        ?>
        $scope.<?= $slug ?>.items = [];

        <?php
        foreach (ITEMS as $itemName => $item) {
            ?>
            $scope.<?= $slug ?>.items.<?= $itemName ?> = [];
            $scope.<?= $slug ?>.items.<?= $itemName ?>.min = <?= $item['min'] ?>;
            $scope.<?= $slug ?>.items.<?= $itemName ?>.max = <?= $item['max'] ?>;
            $scope.<?= $slug ?>.items.<?= $itemName ?>.dmgMod = <?= $item['dmg_mod'] ?>;
            $scope.<?= $slug ?>.items.<?= $itemName ?>.critMod = <?= $item['crit_mod'] ?>;
            <?php
        }
    }

    /**
     * ui for item use stats
     *
     * @param $slug
     */
    function items($slug)
    {
        foreach (ITEMS as $itemName => $item) {
            $id        = "$slug.items.$itemName";
            $minDmg    = "$slug.items.$itemName.min";
            $maxDmg    = "$slug.items.$itemName.max";
            $dmgStat   = "$slug.{$item['dmg_stat']}";
            $dmgMod    = "$slug.items.$itemName.dmgMod";
            $dmgTalent = "$slug.{$item['dmg_talent']}";
            $hitTalent = "$slug.{$item['hit_talent']}";
            $critStat  = "$slug.{$item['dmg_stat']}";
            $critMod   = "$slug.items.$itemName.critMod";
            ?>
            <div class="row">
                <div class="col-xs-12"><?= statNameToLabel($itemName) ?></div>
                <label class="col-xs-8" for="<?= "$id.damage" ?>">Min - Max</label>
                <span class="col-xs-4" id="<?= "$id.damage" ?>"><span ng-bind="methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>)"></span> - <span ng-bind="methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>)"></span></span>
                <label class="col-xs-8" for="<?= "$id.hit.bonus" ?>">Hit Bonus</label>
                <span class="col-xs-4" id="<?= "$id.hit.bonus" ?>"><span ng-bind="methods.hitBonus(<?= "$hitTalent" ?>)"></span></span>
            </div>
            <?php
        }
    }

    /**
     * for UI
     *
     * @param $string
     *
     * @return string
     */
    function statNameToLabel($string)
    {
        return ucwords(str_replace('_', ' ', $string));
    }

    ?>

</html>
