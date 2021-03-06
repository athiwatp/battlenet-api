<?php

namespace johnleider\BattleNet;

use johnleider\BattleNet\Requests\BattleNet;

class Warcraft extends BattleNet
{
    /**
     * Get Achievement Data
     *
     * @param $id
     * @return Warcraft
     */
    public function getAchievement(int $id) : Warcraft
    {
        $this->addToRequest("wow/achievement/{$id}");

        return $this;
    }

    /**
     * Get Auction Data
     *
     * @param $realm
     * @return Warcraft
     */
    public function getAuctionData(string $realm) : Warcraft
    {
        $this->addToRequest("wow/auction/data/{$realm}");

        return $this;
    }

    /**
     * Get Battle Pet Ability Information
     *
     * @param $abilityId
     * @return Warcraft
     */
    public function getBattlePetAbility(int $abilityId) : Warcraft
    {
        $this->addToRequest("wow/battlepet/ability/{$abilityId}");

        return $this;
    }

    /**
     * Get Battle Pet Species Information
     *
     * @param $speciesId
     * @return Warcraft
     */
    public function getBattlePetSpecies(int $speciesId) : Warcraft
    {
        $this->addToRequest("wow/battlepet/species/{$speciesId}");

        return $this;
    }

    /**
     * Get Battle Pet Stats Information
     *
     * @param $speciesId
     * @return Warcraft
     */
    public function getBattlePetStats(int $speciesId) : Warcraft
    {
        $this->addToRequest("wow/battlepet/stats/{$speciesId}");

        return $this;
    }

    /**
     * Get Challenge Leaderboards for a Realm
     *
     * @param $realm
     * @return Warcraft
     */
    public function getChallengeRealm(string $realm) : Warcraft
    {
        $this->addToRequest("wow/challenge/{$realm}");

        return $this;
    }

    /**
     * Get Challenge Leaderboards for the Region
     * 
     * @return Warcraft
     */
    public function getChallengeRegion() : Warcraft
    {
        $this->addToRequest('wow/challenge/region');

        return $this;
    }

    /**
     * Get a Character Profile
     *
     * @param $realm
     * @param $characterName
     * @param array $fields
     * @return Warcraft
     */
    public function getCharacterProfile(string $realm, string $characterName, array $fields = []) : Warcraft
    {
        $this->addToRequest("wow/character/{$realm}/{$characterName}?".http_build_query($fields));

        return $this;
    }

    /**
     * Get Item Information
     *
     * @param $itemId
     * @return Warcraft
     */
    public function getItem(int $itemId) : Warcraft
    {
        $this->addToRequest("wow/item/{$itemId}");

        return $this;
    }

    /**
     * Get Set Item Information
     *
     * @param $setId
     * @return Warcraft
     */
    public function getSetItem(int $setId) : Warcraft
    {
        $this->addToRequest("wow/item/set/{$setId}");

        return $this;
    }

    /**
     * Get Guild Information
     *
     * @param $realm
     * @param $guildName
     * @param array $fields
     * @return Warcraft
     */
    public function getGuildProfile(string $realm, string $guildName, array $fields = []) : Warcraft
    {
        $this->addToRequest("wow/guild/{$realm}/{$guildName}?".http_build_query($fields));

        return $this;
    }

    /**
     * Get Leaderboard Information
     *
     * @param $bracket
     * @return Warcraft
     */
    public function getLeaderboards(string $bracket) : Warcraft
    {
        $this->addToRequest("wow/leaderboard/{$bracket}");

        return $this;
    }

    /**
     * Get Quest Information
     *
     * @param $questId
     * @return Warcraft
     */
    public function getQuest(int $questId) : Warcraft
    {
        $this->addToRequest("wow/quest/{$questId}");

        return $this;
    }

    /**
     * Get Realm Status Information
     *
     * @return Warcraft
     */
    public function getRealmStatus() : Warcraft
    {
        $this->addToRequest('wow/realm/status');

        return $this;
    }

    /**
     * Get Recipe Information
     *
     * @param $recipeId
     * @return Warcraft
     */
    public function getRecipe(int $recipeId) : Warcraft
    {
        $this->addToRequest("wow/recipe/{$recipeId}");

        return $this;
    }

    /**
     * Get Spell Information
     *
     * @param $spellId
     * @return Warcraft
     */
    public function getSpell(int $spellId) : Warcraft
    {
        $this->addToRequest("wow/spell/{$spellId}");

        return $this;
    }

    /**
     * Get Battlegroups List
     * 
     * @return Warcraft
     */
    public function getBattlegroups() : Warcraft
    {
        $this->addToRequest('wow/data/battlegroups/');

        return $this;
    }

    /**
     * Get Character Races List
     * 
     * @return Warcraft
     */
    public function getCharacterRaces() : Warcraft
    {
        $this->addToRequest('wow/data/character/races');

        return $this;
    }

    /**
     * Get Character Classes List
     * 
     * @return Warcraft
     */
    public function getCharacterClasses() : Warcraft
    {
        $this->addToRequest('wow/data/character/classes');

        return $this;
    }

    /**
     * Get Character Achievements List
     *
     * @return Warcraft
     */
    public function getCharacterAchievements() : Warcraft
    {
        $this->addToRequest('wow/data/character/achievements');

        return $this;
    }

    /**
     * Get Guild Rewards List
     * 
     * @return Warcraft
     */
    public function getGuildRewards() : Warcraft
    {
        $this->addToRequest('wow/data/guild/rewards');

        return $this;
    }

    /**
     * Get Guild Perks List
     * 
     * @return Warcraft
     */
    public function getGuildPerks() : Warcraft
    {
        $this->addToRequest('wow/data/guild/perks');

        return $this;
    }

    /**
     * Get Guild Achievements List
     * 
     * @return Warcraft
     */
    public function getGuildAchievements() : Warcraft
    {
        $this->addToRequest('wow/data/guild/achievements');

        return $this;
    }

    /**
     * Get Item Classes List
     * 
     * @return Warcraft
     */
    public function getItemClasses() : Warcraft
    {
        $this->addToRequest('wow/data/item/classes');

        return $this;
    }

    /**
     * Get Talents List
     * 
     * @return Warcraft
     */
    public function getTalents() : Warcraft
    {
        $this->addToRequest('wow/data/talents');

        return $this;
    }

    /**
     * Get Pet Types List
     *
     * @return Warcraft
     */
    public function getPetTypes() : Warcraft
    {
        $this->addToRequest('wow/data/pet/types');

        return $this;
    }
}