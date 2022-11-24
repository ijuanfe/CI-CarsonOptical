<?php
/**
 * PHP version 7.4.33.
 * PHPUnit version 9.5.26.
 *
 * @category  CarsonOptical
 * @package   CarsonOptical
 * @author    2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright 2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @link      https://www.linkedin.com/in/ijuanfe/
 */

use PHPUnit\Framework\TestCase;

/**
 * PHPUnit tests for CarsonOptical class.
 *
 * @category  CarsonOptical
 * @package   CarsonOptical
 * @author    2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @copyright 2022 Juan Felipe Orozco Escobar <juanfe.ores@gmail.com>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @link      https://www.linkedin.com/in/ijuanfe/
 */
final class CarsonOpticalTest extends TestCase {

    private CarsonOptical $_CarsonOpticalObj;

    /**
     * Class constructor that allows to instantiate CarsonOptical object.
     *
     * @return void
     */
    protected function setUp(): void {
        $this->_CarsonOpticalObj = new CarsonOptical();
    }

    /**
     * Allows to test expected return values from CarsonOptical class function1.
     *
     * @return void
     */
    public function testFunction1(): void {

        // Given test cases.
        $input = 'Text1 Text2 GAP Text3';
        $expectedResult = 'Text3';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);

        $input = 'Text4 GAP Text5 Text6';
        $expectedResult = 'Text5 Text6';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);

        $input = 'Text7';
        $expectedResult = '';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);

        // Additional test cases.
        $input = '';
        $expectedResult = '';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);

        $input = 'Text1 GAP Text2 GAP Text3';
        $expectedResult = 'Text2 GAP Text3';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);

        $input = 'GAP GAP GAP GAP';
        $expectedResult = 'GAP GAP GAP';
        $actualResult = $this->_CarsonOpticalObj->callFunction1($input);
        $this->assertEquals($expectedResult, $actualResult);
    }
}
