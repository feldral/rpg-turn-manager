<?php
const TIER_1_STAT_NAMES = [
    'dexterity'     => 'How well one is able to control their movements (Do you have motor skills to pick the lock for the door?)',
    'dominance'     => 'How much power one is able to put behind their movements (Do you have enough Strength to break the lock, the door?)',
    'creativity'    => 'How well one is able to apply what they know (Do you know how to disable the lock on the door, the trap, the hinges?)',
    'comprehension' => 'How much one is able to understand the intricacies of how the world works (Do you know how locks work, what about doors?)',
    'intuition'     => 'How well one is able to pick up on what is happening around them (Will notice the guard before you finish dealing with this locked door, what about the trap?)',
    'influence'     => 'How much one is able to impact or change what others perceive about you (Could you get someone to open the locked door for you, or tell you about the trap?)',
    'focus'         => 'How well one is able to maintain mental clarity (Can you handle the pressure as you try to deal with this locked door?)',
    'fortitude'     => 'How well one is able to endure physical strain (If you fail to deal with the locked door, how likely are you able to survive the guard/trap to try again later?)',
];
const TIER_2_STAT_NAMES = [
    'speed'               => 'Rating of how quickly one can move.',
    'health'              => 'How much Damage one can take before death',
    'will'                => 'How much Mental strain (Will Damage) one can take before they can be easily influenced by another',
    'energy'              => 'The max amount of Energy one can store to be used in a turn',
    'energy_regen'        => 'The rate of Energy Gain at the beginning of a turn',
    'initiative'          => 'Rating of how quickly one can react. Influences turn order.',
    'physical_resistance' => '(unused right now, will probably work with Armor used, maybe increase Glancing hit chance) How well one can resist taking Health Damage',
    'mental_resistance'   => '(Unused right now, Maybe it will be flat reduction, maybe it will cause Glancing hits) How well one can resist taking Will Damage',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'melee',
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
        'type'       => 'range',
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
        'type'       => 'range',
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
        'type'       => 'instant',
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
        'type'       => 'instant',
    ],
]
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stat Calculator V2.2</title>

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

            .simpleBorder {
                border : 1px solid black;
            }

            .clickAble {
                cursor           : pointer;
                background-color : slategrey;
                border-radius    : 3px;
                color            : white;
            }

            label > .clickAble {
                padding          : 0 3px 0 2px;
            }

            .clickAble:hover {
                outline : 1px solid slateblue;
            }
        </style>
    </head>
    <body ng-app="statCalc" ng-controller="myCtrl">
        <div class="container-fluid">
            <div class="row">
                <div class="play-field col-xs-12">
                    <div class="row">
                        <div class="col-xs-4 simpleBorder">
                            <?= characterDoll('Character One', 'charOne', 'charTwo') ?>
                        </div>
                        <div class="col-xs-4 simpleBorder">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h3>Battle Field</h3>
                                    <label for="battlefield-cover-type">Cover Type</label>
                                    <select id="battlefield-cover-type" ng-model="battlefield.coverType">
                                        <option value="NONE">None</option>
                                        <option value="PARTIAL">Partial</option>
                                        <option value="FULL">Full</option>
                                    </select>
                                </div>
                                <div class="col-xs-12">
                                    <label for="battlefield-cover-check">
                                        <span class="clickAble" onclick="alert('How much power is needed to break through the cover (mind you it may still be there after broken and debris may be in the way)')">?</span>
                                        Cover Strength
                                    </label>
                                    <input id="battlefield-cover-check" ng-model="battlefield.coverCheck" type="number" min="1" max="100">
                                </div>
                                <div class="col-xs-12">
                                    <label for="battlefield-distance">Distance between Characters</label>
                                    <input id="battlefield-distance" ng-model="battlefield.distance" type="number" min="0" max="10">
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <h4>Statistics:
                                            <button ng-click="methods.resetBattle()">Reset</button>
                                        </h4>
                                        <label class="col-xs-8" for="averageHit">Average Hit</label><span class="col-xs-4"><span id="averageHit" ng-bind="methods.averageDamage()"></span></span>
                                        <label class="col-xs-8" for="hardestHit">Hardest Hit</label><span class="col-xs-4"><span id="hardestHit" ng-bind="battlefield.stats.biggestHit"></span></span>
                                        <label class="col-xs-8" for="lightestHit">Lightest Hit</label><span class="col-xs-4"><span id="lightestHit" ng-bind="battlefield.stats.lightestHit"></span></span>
                                        <label class="col-xs-8" for="glanceChance">Glance Chance</label><span class="col-xs-4"><span id="glanceChance" ng-bind="methods.percentGlance()"></span>%</span>
                                        <label class="col-xs-8" for="hitChance">Hit Chance</label><span class="col-xs-4"><span id="hitChance" ng-bind="methods.percentHit()"></span>%</span>
                                        <label class="col-xs-8" for="breakCoverChance">Break Cover Chance</label><span class="col-xs-4"><span id="breakCoverChance" ng-bind="methods.percentBreakCover()"></span>%</span>
                                    </div>
                                    <div class="row" style="max-height: 300px; overflow-y: scroll; overflow-x: hidden;">
                                        <div class="col-xs-12" ng-repeat="activity in activityFeed">
                                            In Range: <span ng-bind="activity.isInRange"> </span>
                                            Hit: <span ng-bind="activity.isHit"> </span>
                                            Glance: <span ng-bind="activity.isGlance"> </span>
                                            Damage: <span ng-bind="activity.damageDone"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 simpleBorder">
                            <?= characterDoll('Character Two', 'charTwo', 'charOne') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 simpleBorder">
                    <?= characterPanel('Character One', 'charOne') ?>
                </div>
                <div class="col-xs-6 simpleBorder">
                    <?= characterPanel('Character Two', 'charTwo') ?>
                </div>
            </div>
            <div class="row simpleBorder">
                <div class="col-xs-12">
                    <h2>Items:</h2>
                </div>
                <div class="col-xs-6 col-md-4 itemCard" ng-repeat="<?= "item in charOne.character_items" ?>">
                    <div class="row">
                        <div class="col-xs-12"><span ng-bind="item.name"></span> [<span ng-bind="item.type"></span>]
                        </div>
                        <label class="col-xs-7">Min - Max</label>
                        <span class="col-xs-5"><span ng-bind="item.min"></span> - <span ng-bind="item.max"></span></span>
                        <label class="col-xs-7">Dmg
                            <span ng-bind="item.dmgStatName"></span>:
                        </label>
                        <span class="col-xs-5">x<span ng-bind="item.dmgMod"></span></span>
                        <label class="col-xs-7">Dmg Talent:</label>
                        <span class="col-xs-5"><span ng-bind="item.dmgTalentName"></span></span>
                        <label class="col-xs-7">Crit
                            <span ng-bind="item.critStatName"></span>:
                        </label>
                        <span class="col-xs-5">x<span ng-bind="item.critMod"></span></span>
                        <label class="col-xs-7">Hit Talent:</label>
                        <span class="col-xs-5"><span ng-bind="item.hitTalentName"></span></span>
                        <label class="col-xs-7">Range:</label>
                        <span class="col-xs-5"><span ng-bind="item.rangeMin"></span>m - <span ng-bind="item.rangeMax"></span>m</span>
                        <label class="col-xs-7">Energy Cost:</label>
                        <span class="col-xs-5"><span ng-bind="item.engCost"></span></span>
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
                        //                        console.log('Y intercept of opposing equation: ' + intersect);
                        //                        console.log('Y value of the average: ' + y);
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
                        //                        console.log('Y intercept of Opposing equation' + intersect);
                        //                        console.log('Y value of the average' + y);
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
                        //                        console.log('positive slope');
                        slope = 1;
                    }
                    else {
                        //                        console.log('negative slope');
                        slope = -1;
                    }
                    let intercept = $scope.methods.calculateIntercept(diff, averageBonus, i);
                    //                    console.log('Y intercept for current step: ' + intercept);
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

                //                console.log(total);
                let roll = $scope.methods.randomNumber(0, total);
                //                console.log(roll);

                let cumulativeWeight = 0;
                for (let i = 0; i < table.length; i++) {
                    cumulativeWeight += table[i].weight;
                    if (roll <= cumulativeWeight) {
                        item.dmgRoll = table[i].damage;
                        return table[i].damage;
                    }
                }

                item.dmgRoll = 'error';
            };

            $scope.battlefield = {};
            $scope.battlefield.distance = 1.0;
            $scope.battlefield.coverType = 'NONE';
            $scope.battlefield.coverCheck = 0;
            $scope.activityFeed = [];
            $scope.battlefield.stats = {
                totalDamage: 0,
                countAttacks: 0,
                countHits: 0,
                countGlance: 0,
                countOutOfRange: 0,
                countBrokeCover: 0,
                biggestHit: 0,
                lightestHit: 0,
            };

            $scope.methods.attack = function (attacker, target, distance, coverType, coverCheck) {
                let result = {
                    isInRange: false,
                    isHit: false,
                    isGlance: false,
                    brokeCover: false,
                    damageDone: 0,
                };

                if (attacker.weapon.rangeMin <= distance && attacker.weapon.rangeMax >= distance) {
                    result.isInRange = true;
                    let hitCheck = 0;
                    let hitRoll = $scope.methods.randomNumber(1, 100);
                    //did the attack hit?
                    if (attacker.weapon.type == 'Instant') {
                        console.log('is Instant attack: I just hit :^)');
                    } else if (attacker.weapon.type == 'Melee') {
                        console.log('is Melee');
                        //todo analyze cover and pose
                        if (coverType == 'PARTIAL') {
                            let roll = $scope.methods.randomNumber(0, 50);
                            let powerBonus = attacker.weapon.powerRating();
                            let powerRoll = Math.min(100, roll + powerBonus);
                            console.log('Trying to Break Cover: ' + powerRoll + '/' + coverCheck + ' roll: ' + roll + '+' + powerBonus);
                            if (powerRoll > coverCheck) {
                                result.brokeCover = true;
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 0;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 30;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 40;
                                        break;
                                }
                            }
                            else {
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 50;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 70;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 90;
                                        break;
                                }
                            }
                        } else if (coverType == 'FULL') {
                            let roll = $scope.methods.randomNumber(0, 50);
                            let powerBonus = attacker.weapon.powerRating();
                            let powerRoll = Math.min(100, roll + powerBonus);
                            console.log('Trying to Break Cover: ' + powerRoll + '/' + coverCheck + ' roll: ' + roll + '+' + powerBonus);
                            if (powerRoll > coverCheck) {
                                result.brokeCover = true;
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 70;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 80;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 90;
                                        break;
                                }
                            }
                            else {
                                hitCheck += 100;
                            }
                        }
                    } else if (attacker.weapon.type == 'Range') {
                        console.log('is Ranged');
                        switch (target.pose) {
                            case 'STAND':
                                if (distance <= 2) {
                                    hitCheck += 90;
                                }
                                else if (distance > 5) {
                                    hitCheck += 10;
                                }
                                break;
                            case 'CROUCH':
                                if (distance <= 2) {
                                    hitCheck += 50;
                                }
                                else if (distance > 2 && distance <= 5) {
                                    hitCheck += 40;
                                }
                                else if (distance > 5) {
                                    hitCheck += 60
                                }
                                break;
                            case 'PRONE':
                                if (distance > 2 && distance <= 5) {
                                    hitCheck += 60;
                                }
                                else if (distance > 5) {
                                    hitCheck += 90
                                }
                                break;
                        }
                        //todo analyze cover and pose
                        if (coverType == 'PARTIAL') {
                            let roll = $scope.methods.randomNumber(0, 50);
                            let powerBonus = attacker.weapon.powerRating();
                            let powerRoll = Math.min(100, roll + powerBonus);
                            console.log('Trying to Break Cover: ' + powerRoll + '/' + coverCheck + ' roll: ' + roll + '+' + powerBonus);
                            if (powerRoll > coverCheck) {
                                result.brokeCover = true;
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 0;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 30;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 40;
                                        break;
                                }
                            }
                            else {
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 50;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 70;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 90;
                                        break;
                                }
                            }
                        } else if (coverType == 'FULL') {
                            let roll = $scope.methods.randomNumber(0, 50);
                            let powerBonus = attacker.weapon.powerRating();
                            let powerRoll = Math.min(100, roll + powerBonus);
                            console.log('Trying to Break Cover: ' + powerRoll + '/' + coverCheck + ' roll: ' + roll + '+' + powerBonus);
                            if (powerRoll > coverCheck) {
                                result.brokeCover = true;
                                switch (target.pose) {
                                    case 'STAND':
                                        hitCheck += 70;
                                        break;
                                    case 'CROUCH':
                                        hitCheck += 80;
                                        break;
                                    case 'PRONE':
                                        hitCheck += 90;
                                        break;
                                }
                            }
                            else {
                                hitCheck += 100;
                            }
                        }

                    }

                    console.log('is ' + attacker.weapon.type + ' attack: ' + hitRoll + '/' + hitCheck + ' target is: ' + target.pose + ' behind: ' + coverType);
                    result.isHit = (hitRoll > hitCheck);

                    if (result.isHit) {
                        result.damageDone = $scope.methods.roll(attacker.weapon);

                        let glanceRoll = $scope.methods.randomNumber(0, 100);
                        result.isGlance = (glanceRoll < target.armor.glancing_chance);

                        if (result.isGlance) {
                            result.damageDone = Math.round(result.damageDone * 0.25);
                        }
                    }
                }


                console.log(result);
                $scope.methods.updateBattlefieldStats(result);
                $scope.activityFeed.push(result);
            };

            $scope.methods.attacks = function (attacker, target, distance, coverType, coverCheck) {
                for (let i = 0; i < 1000; i++) {
                    $scope.methods.attack(attacker, target, distance, coverType, coverCheck);
                }
                console.log($scope.battlefield.stats);
            };

            $scope.methods.updateBattlefieldStats = function (result) {
                $scope.battlefield.stats = {
                    totalDamage: $scope.battlefield.stats.totalDamage + result.damageDone,
                    countAttacks: $scope.battlefield.stats.countAttacks + 1,
                    countHits: result.isHit ? $scope.battlefield.stats.countHits + 1 : $scope.battlefield.stats.countHits,
                    countGlance: result.isGlance ? $scope.battlefield.stats.countGlance + 1 : $scope.battlefield.stats.countGlance,
                    countOutOfRange: !result.isInRange ? $scope.battlefield.stats.countOutOfRange + 1 : $scope.battlefield.stats.countOutOfRange,
                    countBrokeCover: result.brokeCover ? $scope.battlefield.stats.countBrokeCover + 1 : $scope.battlefield.stats.countBrokeCover,
                    biggestHit: result.damageDone > $scope.battlefield.stats.biggestHit ? result.damageDone : $scope.battlefield.stats.biggestHit,
                    lightestHit: (result.damageDone < $scope.battlefield.stats.lightestHit && result.damageDone != 0) || $scope.battlefield.stats.lightestHit == 0 ? result.damageDone : $scope.battlefield.stats.lightestHit
                };
            };

            $scope.methods.resetBattle = function () {
                $scope.battlefield.stats = {
                    totalDamage: 0,
                    countAttacks: 0,
                    countHits: 0,
                    countGlance: 0,
                    countOutOfRange: 0,
                    countBrokeCover: 0,
                    biggestHit: 0,
                    lightestHit: 0
                };

                $scope.activityFeed = [];
            };

            $scope.methods.averageDamage = function () {
                return ($scope.battlefield.stats.totalDamage / $scope.battlefield.stats.countHits);
            };

            $scope.methods.percentGlance = function () {
                return ($scope.battlefield.stats.countGlance / $scope.battlefield.stats.countHits) * 100;
            };

            $scope.methods.percentHit = function () {
                return ($scope.battlefield.stats.countHits / $scope.battlefield.stats.countAttacks) * 100;
            };

            $scope.methods.percentBreakCover = function () {
                return ($scope.battlefield.stats.countBrokeCover / $scope.battlefield.stats.countAttacks) * 100;
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
            $scope.methods.totalStatPoints = function (char) {
                return char.dominance + char.dexterity + char.comprehension + char.creativity + char.influence + char.intuition + char.fortitude + char.focus;
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
                char.dexterity = 60;
                char.dominance = 70;
                char.creativity = 35;
                char.comprehension = 35;
                char.intuition = 35;
                char.influence = 35;
                char.focus = 50;
                char.fortitude = 80;

                //todo talents
            };
            $scope.classes.makeMage = function (char) {
                char.dexterity = 35;
                char.dominance = 35;
                char.creativity = 70;
                char.comprehension = 80;
                char.intuition = 35;
                char.influence = 35;
                char.focus = 60;
                char.fortitude = 50;

                //todo talents
            };
            $scope.classes.makeBard = function (char) {
                char.dexterity = 50;
                char.dominance = 35;
                char.creativity = 35;
                char.comprehension = 35;
                char.intuition = 80;
                char.influence = 70;
                char.focus = 60;
                char.fortitude = 35;

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
     * @param $otherSlug
     *
     * @return string
     */
    function characterDoll($name, $slug, $otherSlug)
    {
        ?>
        <h3><?= $name ?></h3>
        <div class="row">
            <div class="col-xs-4">
                <label>Health</label>
                <span ng-bind="<?= "$slug.currentHealth" ?>"></span>/<span ng-bind="<?= "health($slug)" ?>"></span>
            </div>
            <div class="col-xs-4">
                <label>Will</label>
                <span ng-bind="<?= "$slug.currentWill" ?>"></span>/<span ng-bind="<?= "will($slug)" ?>"></span>
            </div>
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
                <label for="doll-<?= $slug ?>-pose">
                    <span class="clickAble" onclick="alert('This influences how likely you are to be hit')">?</span>
                    Stance
                </label>
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
                        <label for="doll-<?= $slug ?>-armor">
                            <span class="clickAble" onclick="alert('Dictates base chance for Attacks made against you to glance (and eventually damage reduction)')">?</span>
                            Armor
                        </label>
                        <select id="doll-<?= $slug ?>-armor" ng-model="<?= "$slug.armor" ?>" ng-options="armor as armor.name for armor in armors">
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="doll-<?= $slug ?>-weapon">
                            <span class="clickAble" onclick="alert('Dictates your Attack\'s: Type, Energy Cost, Effective Range, and Critical Hit Chance. As well as the resulting Damage\'s Type, Area of Effect and Critical Effect.')">?</span>
                            Weapon
                        </label>
                        <select id="doll-<?= $slug ?>-weapon" ng-model="<?= "$slug.weapon" ?>" ng-options="weapon as weapon.name for weapon in <?= "$slug.character_items" ?>">
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            <label class="col-xs-8">Glancing Chance</label><span class="col-xs-4"><span ng-bind="<?= "$slug.armor.glancing_chance" ?>"></span>%</span>
                            <label class="col-xs-8">Energy Cost from Armor</label><span class="col-xs-4"><span ng-bind="<?= "$slug.armor.energy_cost" ?>"></span></span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row">
                            <label class="col-xs-8">Avoid Glancing Blow</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcHitBonus()" ?>"></span></span>
                            <label class="col-xs-8">Min/Likely/Max Damage:</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcMin()" ?>"></span>/<span ng-bind="<?= "$slug.weapon.calcAverage()" ?>"></span>/<span ng-bind="<?= "$slug.weapon.calcMax()" ?>"></span></span>
                            <label class="col-xs-8">Critical Hit Chance</label><span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcCritBonus()" ?>"></span>%</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-xs-8">Energy Regen</label><span class="col-xs-4"><span ng-bind="<?= "energy_regen($slug)" ?>"></span> per turn</span>
                    <label class="col-xs-8">Movement Range</label><span class="col-xs-4"><span ng-bind="<?= "speed($slug) / 10" ?>"></span> m per turn</span>
                    <label class="col-xs-8">Eng/Meter Moved</label><span class="col-xs-4"><span ng-bind="<?= "$slug.armor.energy_cost" ?>"></span> eng/m</span>
                    <label class="col-xs-8">Eng/Attack</label><span class="col-xs-4"><span ng-bind="<?= "$slug.armor.energy_cost + $slug.weapon.engCost" ?>"></span> eng/a</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button ng-click="methods.attack(<?= "$slug, $otherSlug, battlefield.distance, battlefield.coverType, battlefield.coverCheck" ?>)">One Attack</button>
                <button ng-click="methods.attacks(<?= "$slug, $otherSlug, battlefield.distance, battlefield.coverType, battlefield.coverCheck" ?>)">Analyze Attack</button>
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
            <div class="col-xs-12">
                <h3><?= $name ?></h3>
            </div>
            <div class="col-xs-12">
                <div class="row classes">
                    <span class="col-xs-4 col-md-3 clickAble" ng-click="classes.makeTank(<?= $slug ?>)">Tank Archetype</span>
                    <span class="col-xs-4 col-md-3 clickAble" ng-click="classes.makeMage(<?= $slug ?>)">Mage Archetype</span>
                    <span class="col-xs-4 col-md-3 clickAble" ng-click="classes.makeBard(<?= $slug ?>)">Bard Archetype</span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <?php
                    foreach (TIER_1_STAT_NAMES as $statName => $statDescription) {
                        ?>
                        <label class="col-xs-8" for="<?= "$slug.$statName" ?>">
                            <span class="clickAble" onclick="alert('<?= $statDescription ?>')">?</span>
                            <?= statNameToLabel($statName) ?>
                        </label>
                        <input class="col-xs-4" id="<?= "$slug.$statName" ?>" type="number" max="100" min="1" ng-model="<?= "$slug.$statName" ?>" />
                        <?php
                    }
                    ?>
                    <label class="col-xs-8" for="<?= "$slug.statTotal" ?>">Total Stat Points</label>
                    <span class="col-xs-4" id="<?= "$slug.statTotal" ?>" ng-bind="<?= "methods.totalStatPoints($slug)" ?>"></span>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <?php
                    foreach (TIER_2_STAT_NAMES as $statName => $statDescription) {
                        ?>
                        <label class="col-xs-8" for="<?= "$slug.$statName" ?>">
                            <span class="clickAble" onclick="alert('<?= $statDescription ?>')">?</span>
                            <?= statNameToLabel($statName) ?>
                        </label>
                        <span class="col-xs-4" id="<?= $slug . $statName ?>" ng-bind="<?= "$statName($slug)" ?>"></span>
                        <?php
                    }
                    ?>
                </div>
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
        foreach (TIER_1_STAT_NAMES as $statName => $statDescription) {
            ?>
            $scope.<?= $slug . '.' . $statName ?> = 50;
            <?php
        }
        foreach (TALENT_NAMES as $talentName) {
            ?>
            $scope.<?= $slug . '.' . $talentName ?> = 0;
            <?php
        }
        ?>

        $scope.<?= $slug ?>.items = [];
        <?php
        foreach (ITEMS as $itemName => $item) {
            $id         = "\$scope.$slug.items.$itemName";
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
            <?= $id ?> = [];
            <?= $id ?>.min = <?= $item['min'] ?>;
            <?= $id ?>.max = <?= $item['max'] ?>;
            <?= $id ?>.calcMin = function () { return $scope.methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>); };
            <?= $id ?>.calcMax = function () { return $scope.methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>); };
            <?= $id ?>.calcAverage = function () { return $scope.methods.damageAverage(<?= "$calcMinDmg(), $calcMaxDmg(), $dmgTalent" ?>); };
            <?= $id ?>.dmgMod = <?= $item['dmg_mod'] ?>;
            <?= $id ?>.critMod = <?= $item['crit_mod'] ?>;
            <?= $id ?>.calcCritBonus = function () { return $scope.methods.criticalChance(<?= "0, $critStat, $critMod" ?>); };
            <?= $id ?>.calcHitBonus = function () { return $scope.methods.hitBonus(<?= "$hitTalent" ?>); };
            <?= $id ?>.dmgRoll = '*';
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
            type : '<?= statNameToLabel($item['type']) ?>',
            min : <?= $item['min'] ?>,
            max : <?= $item['max'] ?>,
            rangeMin : <?= $item['range_min'] ?>,
            rangeMax : <?= $item['range_max'] ?>,
            engCost : <?= $item['eng_cost'] ?>,
            calcMin : function () { return $scope.methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>); },
            calcMax : function () { return $scope.methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>); },
            calcAverage : function () { return $scope.methods.damageAverage(<?= "$calcMinDmg(), $calcMaxDmg(), $dmgTalent" ?>); },
            powerRating: function () { return <?= "$dmgMod * $dmgStat" ?> },
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
