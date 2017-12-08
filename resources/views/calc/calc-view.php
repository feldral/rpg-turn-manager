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
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.5,
    ],
    'short_sword' => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
    ],
    'long_sword'  => [
        'min'        => 1,
        'max'        => 8,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
    ],
    'mace'        => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
    ],
    'fire_ball'   => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'fire_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'projectile_magic',
        'crit_stat'  => 'creativity',
        'crit_mod'   => 0.2,
    ],
    'frost_bolt'  => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'ice_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.2,
        'hit_talent' => 'projectile_magic',
        'crit_stat'  => 'creativity',
        'crit_mod'   => 0.5,
    ],
    'bribe'       => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'barter',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.5,
        'hit_talent' => false,
        'crit_stat'  => 'intuition',
        'crit_mod'   => 0.2,
    ],
    'intimidate'  => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'speech_craft',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.2,
        'hit_talent' => false,
        'crit_stat'  => 'intuition',
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

        <title>Stat Calculator V2.1</title>

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
            .itemCard {
                border : 3px solid slategrey;
            }

            .itemCard:hover {
                border-color     : darkslategrey;
                background-color : lightslategrey;
            }
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

            //secondary stat calculation
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

            // preformed classes
            $scope.classes = [];
            $scope.classes.makeTank = function (char) {
                char.dexterity = 8;
                char.dominance = 10;
                char.creativity = 3;
                char.comprehension = 4;
                char.intuition = 5;
                char.influence = 5;
                char.focus = 5;
                char.fortitude = 10;

                //todo talents
            };
            $scope.classes.makeMage = function (char) {
                char.dexterity = 4;
                char.dominance = 3;
                char.creativity = 7;
                char.comprehension = 10;
                char.intuition = 5;
                char.influence = 5;
                char.focus = 10;
                char.fortitude = 6;

                //todo talents
            };
            $scope.classes.makeRouge = function (char) {
                char.dexterity = 10;
                char.dominance = 5;
                char.creativity = 5;
                char.comprehension = 5;
                char.intuition = 5;
                char.influence = 5;
                char.focus = 10;
                char.fortitude = 5;

                //todo talents
            };

            //for chart
            $scope.maxValue = function (char) {
                return Math.max(
                    $scope.speed(char.dominance, char.dexterity),
                    $scope.health(char.dominance, char.fortitude),
                    $scope.will(char.focus, char.influence),
                    $scope.energy(char.focus, char.fortitude),
                    $scope.energy_regen(char.dexterity, char.creativity),
                    $scope.initiative(char.dexterity, char.creativity, char.intuition),
                    $scope.physical_resistance(char.dexterity, char.intuition),
                    $scope.mental_resistance(char.comprehension, char.intuition)
                );
            };

            //        $scope.chartURL = '';

            //utility
            $scope.Math = window.Math;
        });
    </script>

    <?php

    /**
     * generates visuals for a Character Panel
     *
     * @param $name
     * @param $slug
     *
     * @return string
     */
    function characterPanel($name, $slug)
    {
        ?>
        <div class="row">
            <div class="col-xs-12"><?= $name ?></div>
            <div class="col-xs-12">
                <div class="row classes">
                    <span class="col-xs-4 col-md-3" ng-click="classes.makeTank(<?= $slug ?>)">Tank</span>
                    <span class="col-xs-4 col-md-3" ng-click="classes.makeMage(<?= $slug ?>)">Mage</span>
                    <span class="col-xs-4 col-md-3" ng-click="classes.makeRouge(<?= $slug ?>)">Rouge</span>
                </div>
            </div>
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
     *
     * @return string
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
     *
     * @return string
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
            if ($item['hit_talent']) {
                $hitTalent = "$slug.{$item['hit_talent']}";
            } else {
                $hitTalent = 0;
            }
            $critStat = "$slug.{$item['crit_stat']}";
            $critMod  = "$slug.items.$itemName.critMod";
            ?>
            <div class="row itemCard" title="Possible Damage increased with: <?= statNameToLabel($item['dmg_stat']) ?>; Average Damage increased with: <?= statNameToLabel($item['dmg_talent']) ?>; Hit Bonus increased with: <?= statNameToLabel($item['hit_talent']) ?>; Critical hit Chance increased with: <?= statNameToLabel($item['crit_stat']) ?>">
                <div class="col-xs-12"><?= statNameToLabel($itemName) ?></div>
                <label class="col-xs-8" for="<?= "$id.damage" ?>">Min - Max</label>
                <span class="col-xs-4" id="<?= "$id.damage" ?>"><span ng-bind="methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>)"></span> - <span ng-bind="methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>)"></span></span>
                <label class="col-xs-8" for="<?= "$id.averageDamage" ?>">Average Damage</label>
                <span class="col-xs-4" id="<?= "$id.averageDamage" ?>" ng-bind="methods.damageAverage(methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>), methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>), <?= "$dmgTalent" ?>)"></span>
                <label class="col-xs-8" for="<?= "$id.hit.bonus" ?>">Hit Bonus</label>
                <span class="col-xs-4" id="<?= "$id.hit.bonus" ?>"><span ng-bind="methods.hitBonus(<?= "$hitTalent" ?>)"></span></span>
                <label class="col-xs-8" for="<?= "$id.crit.chance" ?>">Crit Chance</label>
                <span class="col-xs-4" id="<?= "$id.crit.chance" ?>"><span ng-bind="methods.criticalChance(<?= "0, $critStat, $critMod" ?>)"></span></span>
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
