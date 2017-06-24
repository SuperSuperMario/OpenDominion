<?php

namespace OpenDominion\Interfaces\Calculators\Dominion;

use OpenDominion\Models\Dominion;

interface LandCalculatorInterface
{
    /**
     * Returns the Dominion's total acres of land.
     *
     * @return int
     */
    public function getTotalLand(Dominion $dominion);

    /**
     * Returns the Dominion's total acres of barren land.
     *
     * @return int
     */
    public function getTotalBarrenLand(Dominion $dominion);

    /**
     * Returns the Dominion's total barren land by land type.
     *
     * @param string $landType
     * @return int
     */
    public function getTotalBarrenLandByLandType(Dominion $dominion, $landType);

    /**
     * Returns the Dominion's barren land.
     *
     * @return int[]
     */
    public function getBarrenLand(Dominion $dominion);

//    /**
//     * Returns the Dominion's rezoning platinum cost per acre.
//     *
//     * @return int
//     */
//    public function getRezoningPlatinumCost();
}
