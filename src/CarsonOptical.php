<?php
/**
 * PHP version 7.4.33.
 *
 * @category  CarsonOptical
 * @package   CarsonOptical
 * @author    2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright 2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @link      https://www.linkedin.com/in/ijuanfe/
 */


/**
 * Class to solve the problem using OOP.
 *
 * @category  CarsonOptical
 * @package   CarsonOptical
 * @author    2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright 2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @link      https://www.linkedin.com/in/ijuanfe/
 */
class CarsonOptical {

    /**
     * Simple auxiliary function to call function1.
     * This is to avoid modifying the function given
     * declaration as it was declared private and static.
     *
     * @param string $input User input
     *
     * @return string Return value of _function1()
     */
    public function callFunction1(string $input): string {
        return self::_function1($input);
    }

    /**
     * Takes a string as input and outputs a string composed of the characters
     * that comes after the very first "GAP" word substring occurrence is found.
     *
     * @param string $input User input
     *
     * @return string $output Operation result
     */
    private static function _function1($input) {
        // *************************** Proposed solution ***************************
        $output = "";
        // 1. Find the position of the very first "GAP" word substring occurrence.
        $posGAP = strpos($input, 'GAP');

        if ($posGAP !== false) {
            // 2. Output only the characters after the occurrence.
            $ignoreFoundGAP = 4;
            $output = substr($input, $posGAP + $ignoreFoundGAP);
            return $output;
        }
        // *************************************************************************

        return $output;
    }
}
