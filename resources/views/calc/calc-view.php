<?php
include_once 'calc_php_functions.php';
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stat Calculator V2.3</title>

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
                padding : 0 3px 0 2px;
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
                                        <label class="col-xs-8" for="critChance">Crit Chance</label><span class="col-xs-4"><span id="critChance" ng-bind="methods.percentCrit()"></span>%</span>
                                        <label class="col-xs-8" for="breakCoverChance">Break Cover Chance</label><span class="col-xs-4"><span id="breakCoverChance" ng-bind="methods.percentBreakCover()"></span>%</span>
                                    </div>
                                    <div class="row" style="max-height: 300px; overflow-y: scroll; overflow-x: hidden;">
                                        <div class="col-xs-12" ng-repeat="activity in activityFeed">
                                            In Range: <span ng-bind="activity.isInRange"> </span>
                                            Hit: <span ng-bind="activity.isHit"> </span>
                                            Crit: <span ng-bind="activity.isCrit"> </span>
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
            $scope.methods.hitBonus = function (level, bonus) {
                return Math.round((level / 100) * bonus);
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
                countCrits: 0,
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
                    isCrit: false,
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
                        let critRoll = $scope.methods.randomNumber(1,100);
                        result.isCrit = ((100 - attacker.weapon.calcCritBonus()) < critRoll);

                        result.damageDone = $scope.methods.roll(attacker.weapon);

                        let glanceRoll = $scope.methods.randomNumber(0, 100);
                        let glanceRollBonus = attacker.weapon.calcHitBonus();
                        let glanceWall = target.armor.glancing_chance;
                        let glanceWallBonus = ($scope.physical_resistance(target) / 100) * (glanceWall / 2);
                        result.isGlance = ((glanceRoll + glanceRollBonus) < (glanceWall + glanceWallBonus));

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
                    countCrits: result.isCrit ? $scope.battlefield.stats.countCrits + 1 : $scope.battlefield.stats.countCrits,
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
                    countCrits: 0,
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

            $scope.methods.percentCrit = function () {
                return ($scope.battlefield.stats.countCrits / $scope.battlefield.stats.countAttacks) * 100;
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

            $scope.methods.generateCode = function (char) {
                let char_stats = {};

                <?php
                foreach (TIER_1_STAT_NAMES as $statName => $description) {
                ?>
                char_stats.<?= $statName ?> = char.<?= $statName ?>;
                <?php
                }
                ?>

                <?php
                foreach (TALENT_NAMES as $talentName) {
                ?>
                char_stats.<?= $talentName ?> = char.<?= $talentName ?>;
                <?php
                }
                ?>

                char.code = JSON.stringify(char_stats);
            };
            $scope.methods.loadCode = function (char) {
                let char_stats = JSON.parse(char.code);

                <?php
                foreach (TIER_1_STAT_NAMES as $statName => $description) {
                ?>
                char.<?= $statName ?> = char_stats.<?= $statName ?>;
                <?php
                }
                ?>

                <?php
                foreach (TALENT_NAMES as $talentName) {
                ?>
                char.<?= $talentName ?> = char_stats.<?= $talentName ?>;
                <?php
                }
                ?>
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

</html>
