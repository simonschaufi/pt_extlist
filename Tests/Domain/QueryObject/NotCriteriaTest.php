<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2010-2011 punkt.de GmbH - Karlsruhe, Germany - http://www.punkt.de
 *  Authors: Daniel Lienert, Michael Knoll, Christoph Ehscheidt
 *  All rights reserved
 *
 *  For further information: http://extlist.punkt.de <extlist@punkt.de>
 *
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Testcase for notCriteria
 *
 * @package Typo3
 * @subpackage pt_extlist
 * @author Michael Knoll
 * @see Tx_PtExtlist_Domain_QueryObject_NotCriteria
 */
class Tx_PtExtlist_Tests_Domain_QueryObject_NotCriteriaTest extends Tx_PtExtlist_Tests_BaseTestcase {
     
    public function testSetup() {
    	$this->assertTrue(class_exists('Tx_PtExtlist_Domain_QueryObject_NotCriteria'));
    }
    
    
    
    public function testConstruct() {
    	$simpleCriteria = new Tx_PtExtlist_Domain_QueryObject_SimpleCriteria('test', '10', '>');
    	$notCriteria = new Tx_PtExtlist_Domain_QueryObject_NotCriteria($simpleCriteria);
    	$this->assertTrue(is_a($notCriteria, 'Tx_PtExtlist_Domain_QueryObject_NotCriteria'));
    }
    
    
    
    public function testGetCriteria() {
    	$simpleCriteria = new Tx_PtExtlist_Domain_QueryObject_SimpleCriteria('test', '10', '>');
        $notCriteria = new Tx_PtExtlist_Domain_QueryObject_NotCriteria($simpleCriteria);
        $this->assertTrue($notCriteria->getCriteria() === $simpleCriteria);
    }
    
}