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
    'pole',
    'fire_magic',
    'ice_magic',
    'projectile_magic',
    'wave_magic',
    'barter',
    'speech_craft',
];
const ARMOR             = [
    'cloth'      => [
        'energy_cost'            => 1,
        'glancing_chance'        => 0,
        'puncture_protection'    => 0,
        'slashing_protection'    => 0,
        'bludgeoning_protection' => 0,
        'fire_protection'        => 0,
        'ice_protection'         => 0,
    ],
    'leather'    => [
        'energy_cost'            => 2,
        'glancing_chance'        => 20,
        'puncture_protection'    => 3,
        'slashing_protection'    => 5,
        'bludgeoning_protection' => 3,
        'fire_protection'        => 0,
        'ice_protection'         => 0,
    ],
    'brigandine' => [
        'energy_cost'            => 4,
        'glancing_chance'        => 30,
        'puncture_protection'    => 3,
        'slashing_protection'    => 10,
        'bludgeoning_protection' => 5,
        'fire_protection'        => 0,
        'ice_protection'         => 0,
    ],
    'chain'      => [
        'energy_cost'            => 4,
        'glancing_chance'        => 30,
        'puncture_protection'    => 5,
        'slashing_protection'    => 10,
        'bludgeoning_protection' => 3,
        'fire_protection'        => 0,
        'ice_protection'         => 0,
    ],
    'plate'      => [
        'energy_cost'            => 5,
        'glancing_chance'        => 40,
        'puncture_protection'    => 10,
        'slashing_protection'    => 10,
        'bludgeoning_protection' => 5,
        'fire_protection'        => 0,
        'ice_protection'         => 0,
    ],
];
const ITEMS             = [
    'dagger'           => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.2,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.5,
        'range_min'  => 0.0,
        'range_max'  => 0.5,
        'eng_cost'   => 1,
    ],
    'sword'            => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 2,
    ],
    'axe'              => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 2,
    ],
    'mace'             => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 2,
    ],
    'spear'            => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'pole',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 2,
    ],
    'two_handed_sword' => [
        'min'        => 3,
        'max'        => 9,
        'dmg_talent' => 'blade',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 4,
    ],
    'two_handed_mace'  => [
        'min'        => 3,
        'max'        => 9,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.5,
        'range_max'  => 2.0,
        'eng_cost'   => 4,
    ],
    'two_handed_axe'   => [
        'min'        => 3,
        'max'        => 9,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.5,
        'range_max'  => 2.0,
        'eng_cost'   => 4,
    ],
    'halberd'          => [
        'min'        => 3,
        'max'        => 9,
        'dmg_talent' => 'pole',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.4,
        'hit_talent' => 'two_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.3,
        'range_min'  => 0.5,
        'range_max'  => 2.0,
        'eng_cost'   => 4,
    ],
    'fire_ball'        => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'fire_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'projectile_magic',
        'crit_stat'  => 'creativity',
        'crit_mod'   => 0.2,
        'range_min'  => 2.0,
        'range_max'  => 8.0,
        'eng_cost'   => 4,
    ],
    'frost_bolt'       => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'ice_magic',
        'dmg_stat'   => 'comprehension',
        'dmg_mod'    => 0.2,
        'hit_talent' => 'projectile_magic',
        'crit_stat'  => 'creativity',
        'crit_mod'   => 0.5,
        'range_min'  => 2.0,
        'range_max'  => 8.0,
        'eng_cost'   => 2,
    ],
    'bribe'            => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'barter',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.5,
        'hit_talent' => false,
        'crit_stat'  => 'intuition',
        'crit_mod'   => 0.2,
        'range_min'  => 0.0,
        'range_max'  => 8.0,
        'eng_cost'   => 4,
    ],
    'intimidate'       => [
        'min'        => 1,
        'max'        => 4,
        'dmg_talent' => 'speech_craft',
        'dmg_stat'   => 'influence',
        'dmg_mod'    => 0.2,
        'hit_talent' => false,
        'crit_stat'  => 'intuition',
        'crit_mod'   => 0.5,
        'range_min'  => 0.0,
        'range_max'  => 8.0,
        'eng_cost'   => 2,
    ],
]
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
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
                <div class="play-field col-xs-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <?= characterDoll('Character One', 'charOne') ?>
                        </div>
                        <div class="col-xs-4">Battle Field
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="battlefield-cover-type">Cover Type</label>
                                    <select id="battlefield-cover-type">
                                        <option value="NONE">None</option>
                                        <option value="PARTIAL">Partial</option>
                                        <option value="FULL">Full</option>
                                    </select>
                                </div>
                                <div class="col-xs-12">
                                    <label for="battlefield-cover-check">Cover Strength</label>
                                    <input id="battlefield-cover-check" type="number" min="1" max="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <?= characterDoll('Character Two', 'charTwo') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button onClick="">Attack</button>
                        </div>
                        <div class="col-xs-4">distance between characters</div>
                        <div class="col-xs-4">
                            <button onClick="">Attack</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="character-one col-xs-6">
                    <?= characterPanel('Character One', 'charOne') ?>
                </div>
                <div class="character-two col-xs-6">
                    <?= characterPanel('Character Two', 'charTwo') ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-3 itemCard" ng-repeat="<?= "item in charOne.character_items" ?>">
                    <div class="row">
                        <div class="col-xs-12" ng-bind="item.name"></div>
                        <label class="col-xs-7">Min - Max</label><span class="col-xs-5"><span ng-bind="item.min"></span> - <span ng-bind="item.max"></span></span>
                        <label class="col-xs-7">Dmg <span ng-bind="item.dmgStatName"></span>:</label><span class="col-xs-5">x<span ng-bind="item.dmgMod"></span></span>
                        <label class="col-xs-7">Dmg Talent:</label><span class="col-xs-5"><span ng-bind="item.dmgTalentName"></span></span>
                        <label class="col-xs-7">Crit <span ng-bind="item.critStatName"></span>:</label><span class="col-xs-5">x<span ng-bind="item.critMod"></span></span>
                        <label class="col-xs-7">Hit Talent:</label><span class="col-xs-5"><span ng-bind="item.hitTalentName"></span></span>
                        <label class="col-xs-7">Range:</label><span class="col-xs-5"><span ng-bind="item.rangeMin"></span>m - <span ng-bind="item.rangeMax"></span>m</span>
                        <label class="col-xs-7">Energy Cost:</label><span class="col-xs-5"><span ng-bind="item.engCost"></span></span>
                    </div>
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

            $scope.methods.interceptEquation = function (slope, x, y) {
                return -(slope * x - y);
            };
            $scope.methods.calculateWeight = function (slope, intercept, step) {
                return Math.round(slope * step + intercept);
            };
            $scope.methods.calculateIntercept = function (diff, average, step) {
                if (average < (diff / 2)) {
                    if (step <= average) {
                        let slope = 1;
                        let intersect = $scope.methods.interceptEquation(-1 * slope, diff, 1);
                        let y = $scope.methods.calculateWeight(-1 * slope, intersect, average);
                        console.log('Y intercept of opposing equation: ' + intersect);
                        console.log('Y value of the average: ' + y);
                        return $scope.methods.interceptEquation(slope, average, y);
                    } else {
                        let slope = -1;
                        return $scope.methods.interceptEquation(slope, diff, 1);
                    }
                } else if (average > (diff / 2)) {
                    if (step <= average) {
                        let slope = 1;
                        return $scope.methods.interceptEquation(slope, diff, diff + 1);
                    } else {
                        let slope = -1;
                        let intersect = $scope.methods.interceptEquation(-1 * slope, diff, diff + 1);
                        let y = $scope.methods.calculateWeight(-1 * slope, intersect, average);
                        console.log('Y intercept of Opposing equation' + intersect);
                        console.log('Y value of the average' + y);
                        return $scope.methods.interceptEquation(slope, average, y);
                    }
                } else {
                    return $scope.methods.interceptEquation(1, diff, diff + 1);
                }
            };
            $scope.methods.generateTable = function (min, max, average) {
                let table = [];

                let diff = max - min;
                let averageBonus = average - min;

                for (let i = 0; i <= diff; i++) {
                    let slope = 0;
                    if (i <= averageBonus) {
                        console.log('positive slope');
                        slope = 1;
                    }
                    else {
                        console.log('negative slope');
                        slope = -1;
                    }
                    let intercept = $scope.methods.calculateIntercept(diff, averageBonus, i);
                    console.log('Y intercept for current step: ' + intercept);
                    let weight = $scope.methods.calculateWeight(slope, intercept, i);
                    table.push({
                        "weight": weight,
                        "damage": min + i
                    })
                }
                console.log(table);

                return table;
            };
            $scope.methods.randomNumber = function (min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            };
            $scope.methods.roll = function (item) {
                let table = $scope.methods.generateTable(item.calcMin(), item.calcMax(), item.calcAverage());

                let total = 0;

                for (let i = 0; i < table.length; i++) {
                    total += table[i].weight;
                }

                console.log(total);
                let roll = $scope.methods.randomNumber(0, total);
                console.log(roll);

                let cumulativeWeight = 0;
                for (let i = 0; i < table.length; i++) {
                    cumulativeWeight += table[i].weight;
                    if (roll <= cumulativeWeight) {
                        item.dmgRoll = table[i].damage;
                        return;
                    }
                }

                item.dmgRoll = 'error';
            };

            $scope.methods.attack = function (item, target, distance, coverType) {

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

            // armor
            $scope.armors = [
                <?php
                foreach (ARMOR as $armor_type => $stats)
                {
                ?>
                {
                    name: '<?= statNameToLabel($armor_type) ?>',
            <?php
            foreach ($stats as $stat => $value) {
            ?>
            <?= $stat ?> : <?= $value ?>,
            <?php
            }
            ?>
        },
            <?php
            }
            ?>
            ]
            ;

            // preformed classes
            $scope.classes = [];
            $scope.classes.makeTank = function (char) {
                char.dexterity = 10;
                char.dominance = 20;
                char.creativity = 5;
                char.comprehension = 5;
                char.intuition = 5;
                char.influence = 5;
                char.focus = 5;
                char.fortitude = 10;

                //todo talents
            };
            $scope.classes.makeMage = function (char) {
                char.dexterity = 5;
                char.dominance = 5;
                char.creativity = 10;
                char.comprehension = 20;
                char.intuition = 5;
                char.influence = 5;
                char.focus = 10;
                char.fortitude = 5;

                //todo talents
            };
            $scope.classes.makeRouge = function (char) {
                char.dexterity = 20;
                char.dominance = 10;
                char.creativity = 5;
                char.comprehension = 5;
                char.intuition = 10;
                char.influence = 5;
                char.focus = 5;
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
     * generates visuals for character in battle
     *
     * @param $name
     * @param $slug
     *
     * @return string
     */
    function characterDoll($name, $slug)
    {
        ?>
        <span><?= $name ?></span>
        <div class="row">
            <div class="col-xs-4">
                <label>Health</label>
                <span ng-bind="<?= "$slug.currentHealth" ?>"></span>/<span ng-bind="<?= "health($slug)" ?>"></span>
            </div>
            <div class="col-xs-4">
                <label>Will</label>
                <span ng-bind="<?= "$slug.currentWill" ?>"></span>/<span ng-bind="<?= "will($slug)" ?>"></span></div>
            <div class="col-xs-4">
                <label>Energy</label>
                <span ng-bind="<?= "$slug.currentEnergy" ?>"></span>/<span ng-bind="<?= "energy($slug)" ?>"></span>
            </div>
            <div class="col-xs-2">
                <button onclick="">Reset</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <label for="doll-<?= $slug ?>-pose">Stance</label>
                <select id="doll-<?= $slug ?>-pose" ng-model="<?= "$slug.pose" ?>">
                    <option value="STAND">Standing</option>
                    <option value="CROUCH">Crouching</option>
                    <option value="PRONE">Prone</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <label for="doll-<?= $slug ?>-armor">Armor</label>
                        <select id="doll-<?= $slug ?>-armor" ng-model="<?= "$slug.armor" ?>" ng-options="armor as armor.name for armor in armors">
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="doll-<?= $slug ?>-weapon">Weapon</label>
                        <select id="doll-<?= $slug ?>-weapon" ng-model="<?= "$slug.weapon" ?>" ng-options="weapon as weapon.name for weapon in <?= "$slug.character_items" ?>">
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            <label class="col-xs-8">Glancing Chance</label><span class="col-xs-4"><span ng-bind="<?= "$slug.armor.glancing_chance" ?>"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            <label class="col-xs-8">Min Damage</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcMin()" ?>"></span></span>
                            <label class="col-xs-8">Average Damage</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcAverage()" ?>"></span></span>
                            <label class="col-xs-8">Max Damage</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcMax()" ?>"></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return '';
    }

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
            <div class="col-xs-12">
                <?php
                foreach (TALENT_NAMES as $talentName) {
                    ?>
                    <label class="col-xs-8 col-md-4" for="<?= $slug . $talentName ?>"><?= statNameToLabel($talentName) ?></label>
                    <input class="col-xs-4 col-md-2" id="<?= $slug . $talentName ?>" type="number" max="100" min="0" ng-model="<?= "$slug.$talentName" ?>" />
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        return '';
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
        $scope.<?= "$slug.currentHealth" ?> = 0;
        $scope.<?= "$slug.currentEnergy" ?> = 0;
        $scope.<?= "$slug.currentWill" ?> = 0;
        $scope.<?= "$slug.pose" ?> = 'STAND';

        <?php
        foreach (TIER_1_STAT_NAMES as $statName) {
            ?>
            $scope.<?= $slug . '.' . $statName ?> = 5;
            <?php
        }
        foreach (TALENT_NAMES as $talentName) {
            ?>
            $scope.<?= $slug . '.' . $talentName ?> = 0;
            <?php
        }
        ?>
        $scope.<?= $slug ?>.character_items = [
        <?php
        foreach (ITEMS as $itemName => $item) {
            $dmgMod     = "\$scope.$slug.items.$itemName.dmgMod";
            $minDmg     = "\$scope.$slug.items.$itemName.min";
            $maxDmg     = "\$scope.$slug.items.$itemName.max";
            $calcMinDmg = "\$scope.$slug.items.$itemName.calcMin";
            $calcMaxDmg = "\$scope.$slug.items.$itemName.calcMax";
            $dmgStat    = "\$scope.$slug.{$item['dmg_stat']}";
            $dmgTalent  = "\$scope.$slug.{$item['dmg_talent']}";
            $critStat   = "\$scope.$slug.{$item['crit_stat']}";
            $critMod    = "\$scope.$slug.items.$itemName.critMod";

            if ($item['hit_talent']) {
                $hitTalent = "\$scope.$slug.{$item['hit_talent']}";
            } else {
                $hitTalent = 0;
            }
            ?>
            {
            name : '<?= statNameToLabel($itemName) ?>',
            min : <?= $item['min'] ?>,
            max : <?= $item['max'] ?>,
            rangeMin : <?= $item['range_min'] ?>,
            rangeMax : <?= $item['range_max'] ?>,
            engCost : <?= $item['eng_cost'] ?>,
            calcMin : function () { return $scope.methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>); },
            calcMax : function () { return $scope.methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>); },
            calcAverage : function () { return $scope.methods.damageAverage(<?= "$calcMinDmg(), $calcMaxDmg(), $dmgTalent" ?>); },
            dmgMod : <?= $item['dmg_mod'] ?>,
            dmgStatName : '<?= statNameToLabel($item['dmg_stat']) ?>',
            dmgTalentName : '<?= statNameToLabel($item['dmg_talent']) ?>',
            critMod : <?= $item['crit_mod'] ?>,
            critStatName : '<?= statNameToLabel($item['crit_stat']) ?>',
            hitTalentName : '<?= statNameToLabel($item['hit_talent']) ?>',
            calcCritBonus : function () { return $scope.methods.criticalChance(<?= "0, $critStat, $critMod" ?>); },
            calcHitBonus : function () { return $scope.methods.hitBonus(<?= "$hitTalent" ?>); },
            dmgRoll : '*',
            },
            <?php
        }
        ?>
        ];
        <?php

        return '';
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
            $id                = "$slug.items.$itemName";
            $calcMinDmg        = "$slug.items.$itemName.calcMin";
            $calcMaxDmg        = "$slug.items.$itemName.calcMax";
            $calcAverageDamage = "$slug.items.$itemName.calcAverage";
            $calcCritBonus     = "$slug.items.$itemName.calcCritBonus";
            $calcHitBonus      = "$slug.items.$itemName.calcHitBonus";
            $damageRoll        = "$slug.items.$itemName.dmgRoll";
            ?>

            <div class="col-xs-12 col-md-6">
                <div class="row itemCard" title="Possible Damage increased with: <?= statNameToLabel($item['dmg_stat']) ?>; Average Damage increased with: <?= statNameToLabel($item['dmg_talent']) ?>; Hit Bonus increased with: <?= statNameToLabel($item['hit_talent']) ?>; Critical hit Chance increased with: <?= statNameToLabel($item['crit_stat']) ?>">
                    <div class="col-xs-12"><?= statNameToLabel($itemName) ?></div>
                    <label class="col-xs-8" for="<?= "$id.damage" ?>">Min - Max</label>
                    <!-- new -->
                    <span class="col-xs-4" id="<?= "$id.damage" ?>">
                    <span ng-bind="<?= "$calcMinDmg()" ?>"></span> - <span ng-bind="<?= "$calcMaxDmg()" ?>"></span>
                </span>
                    <label class="col-xs-8" for="<?= "$id.averageDamage" ?>">Average Damage</label>
                    <span class="col-xs-4" id="<?= "$id.averageDamage" ?>" ng-bind="<?= "$calcAverageDamage()" ?>"></span>
                    <label class="col-xs-8" for="<?= "$id.hit.bonus" ?>">Hit Bonus</label>
                    <span class="col-xs-4" id="<?= "$id.hit.bonus" ?>"><span ng-bind="<?= "$calcHitBonus()" ?>"></span></span>
                    <label class="col-xs-8" for="<?= "$id.crit.chance" ?>">Crit Chance</label>
                    <span class="col-xs-4" id="<?= "$id.crit.chance" ?>"><span ng-bind="<?= "$calcCritBonus()" ?>"></span></span>
                    <button class="col-xs-8" ng-click="methods.roll(<?= $id ?>)">Roll for Damage</button>
                    <span class="col-xs-4" id="<?= "$id.dmgRoll" ?>"><span ng-bind="<?= "$damageRoll" ?>"></span></span>
                </div>
            </div>
            <?php
        }

        return '';
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
