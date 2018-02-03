<?php
/**
 * Created by PhpStorm.
 * User: Feldral
 * Date: 1/28/2018
 * Time: 8:45 PM
 */

const TIER_1_STAT_NAMES = [
    'dexterity'     => 'How well one is able to control their movements (Do you have motor skills to pick the lock for the door?)',
    'dominance'     => 'How much power one is able to put behind their movements (Do you have enough Strength to break the lock, the door?)',
    'creativity'    => 'How well one is able to apply what they know (Do you know how to disable the lock on the door, the trap, the hinges?)',
    'comprehension' => 'How much one is able to understand the intricacies of how the world works (Do you know how locks work, what about doors?)',
    'intuition'     => 'How well one is able to pick up on what is happening around them (Will the guard notice you before you finish dealing with this locked door, what about the trap?)',
    'influence'     => 'How much one is able to impact or change what others perceive about you (Could you get someone to open the locked door for you, or tell you about the trap?)',
    'focus'         => 'How well one is able to maintain mental clarity (Can you handle the pressure as you try to deal with this locked door?)',
    'fortitude'     => 'How well one is able to endure physical strain (If you fail to deal with the locked door, how likely are you able to survive the guard/trap to try again later?)',
];
const TIER_2_STAT_NAMES = [
    'speed'               => 'Rating of how quickly one can move.',
    'health'              => 'How much Damage one can take before death',
    'will'                => 'How much Mental strain (Will Damage) one can take before they can be easily influenced by another (When this reaches 0 control effects will take effect)',
    'energy'              => 'The max amount of Energy one can store to be used in a turn',
    'energy_regen'        => 'The rate of Energy Gain at the beginning of a turn',
    'initiative'          => 'Rating of how quickly one can react. Influences turn order.',
    'physical_resistance' => 'Increased the effectiveness of Armor',
    'mental_resistance'   => 'How well one can resist taking Will Damage',
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
        'def_break'  => 40,
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
        'def_break'  => 20,
    ],
    'axe'              => [
        'min'        => 1,
        'max'        => 6,
        'dmg_talent' => 'blunt',
        'dmg_stat'   => 'dominance',
        'dmg_mod'    => 0.5,
        'hit_talent' => 'one_hand',
        'crit_stat'  => 'dexterity',
        'crit_mod'   => 0.2,
        'range_min'  => 0.0,
        'range_max'  => 1.5,
        'eng_cost'   => 2,
        'type'       => 'melee',
        'def_break'  => 20,
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
        'def_break'  => 20,
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
        'def_break'  => 25,
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
        'def_break'  => 30,
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
        'def_break'  => 30,
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
        'def_break'  => 30,
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
        'def_break'  => 25,
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
        'def_break'  => 20,
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
        'def_break'  => 20,
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
        'def_break'  => 20,
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
        'def_break'  => 20,
    ],
];

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
                        <label class="col-xs-8">
                            <span class="clickAble" onclick="alert('A Glancing hit reduces damage by 75% and is influenced by the defender\'s armor and stats vs. the attacker\'s weapon and skill.')">?</span>
                            Glancing Chance
                        </label>
                        <span class="col-xs-4"><span ng-bind="<?= "$slug.armor.glancing_chance" ?>"></span>%</span>
                        <label class="col-xs-8">
                            <span class="clickAble" onclick="alert('Energy Cost that is added to every action.')">?</span>
                            Energy Cost from Armor
                        </label>
                        <span class="col-xs-4"><span ng-bind="<?= "$slug.armor.energy_cost" ?>"></span></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <label class="col-xs-8">
                            <span class="clickAble" onclick="alert('A Glancing hit reduces damage by 75% and is influenced by the defender\'s armor and stats vs. the attacker\'s weapon and talent.')">?</span>
                            Avoid Glancing Blow
                        </label>
                        <span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcHitBonus()" ?>"></span></span>
                        <label class="col-xs-8">
                            <span class="clickAble" onclick="alert('The Minimum amount of damage ; The Most Likely amount of damage based on weapon Talent ; The Maximum amount of damage | that can be done by an attack. (before Glancing Reduction)')">?</span>
                            Min / Likely / Max:
                        </label>
                        <span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcMin()" ?>"></span>/<span ng-bind="<?= "$slug.weapon.calcAverage()" ?>"></span>/<span ng-bind="<?= "$slug.weapon.calcMax()" ?>"></span></span>
                        <label class="col-xs-8">
                            <span class="clickAble" onclick="alert('A Critical Hit applies an effect on the defender, including but not limited to Straight Damage and debuffs.')">?</span>
                            Critical Hit Chance
                        </label>
                        <span class="col-xs-4"><span ng-bind="<?= "$slug.weapon.calcCritBonus()" ?>"></span>%</span>
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
            <div class="row">
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
    </div>
    <div class="row">
        <div class="col-xs-12  col-md-3 clickAble" ng-click="methods.generateCode(<?= $slug ?>)">Generate</div>
        <label class="col-xs-4 col-md-2" for="<?= "$slug.save" ?>">code:</label>
        <input class="col-xs-8 col-md-4" id="<?= "$slug.save" ?>" type="text" ng-model="<?= "$slug.code" ?>" />
        <div class="col-xs-12  col-md-3 clickAble" ng-click="methods.loadCode(<?= $slug ?>)">Load</div>
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
    $scope.<?= "$slug.code" ?> = '';

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
        $defBreak   = "\$scope.$slug.items.$itemName.defBreak";
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
        <?= $id ?>.defBreak = <?= $item['def_break'] ?>;
        <?= $id ?>.calcMin = function () { return $scope.methods.damageMin(<?= "$minDmg, $dmgStat, $dmgMod" ?>); };
        <?= $id ?>.calcMax = function () { return $scope.methods.damageMax(<?= "$maxDmg, $dmgStat, $dmgMod" ?>); };
        <?= $id ?>.calcAverage = function () { return $scope.methods.damageAverage(<?= "$calcMinDmg(), $calcMaxDmg(), $dmgTalent" ?>); };
        <?= $id ?>.dmgMod = <?= $item['dmg_mod'] ?>;
        <?= $id ?>.critMod = <?= $item['crit_mod'] ?>;
        <?= $id ?>.calcCritBonus = function () { return $scope.methods.criticalChance(<?= "0, $critStat, $critMod" ?>); };
        <?= $id ?>.calcHitBonus = function () { return $scope.methods.hitBonus(<?= "$hitTalent, $defBreak" ?>); };
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
        $defBreak   = "\$scope.$slug.items.$itemName.defBreak";
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
        defBreak : <?= $item['def_break'] ?>,
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
        calcHitBonus : function () { return $scope.methods.hitBonus(<?= "$hitTalent, $defBreak" ?>); },
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
