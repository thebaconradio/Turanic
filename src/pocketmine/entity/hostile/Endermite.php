<?php

/*
 *
 *    _______                    _
 *   |__   __|                  (_)
 *      | |_   _ _ __ __ _ _ __  _  ___
 *      | | | | | '__/ _` | '_ \| |/ __|
 *      | | |_| | | | (_| | | | | | (__
 *      |_|\__,_|_|  \__,_|_| |_|_|\___|
 *
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Turanic
 *
 */

declare(strict_types=1);

namespace pocketmine\entity\hostile;

use pocketmine\entity\Monster;

class Endermite extends Monster {
	const NETWORK_ID = self::ENDERMITE;

	public $width = 0.3;
	public $height = 0;

	/**
	 * @return string
	 */
	public function getName(){
		return "Endermite";
	}

	public function initEntity(){
		$this->setMaxHealth(8);
		parent::initEntity();
	}

    public function getXpDropAmount(): int{
        return 3;
    }
}