<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <lienert@punkt.de>, Michael Knoll <knoll@punkt.de>
*  All rights reserved
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
 * Interface for query interpreters
 * 
 * @package Typo3
 * @subpackage pt_extlist
 * @author Michael Knoll <knoll@punkt.de>
 * @author Daniel Lienert <lienert@punkt.de>
 */

abstract class Tx_PtExtlist_Domain_DataBackend_AbstractQueryInterpreter {

	/**
	 * Returns translated criteria(s)
	 *
	 * @param Tx_PtExtlist_Domain_QueryObject_Query $query
	 */
    abstract static public function getCriterias(Tx_PtExtlist_Domain_QueryObject_Query $query);
    
    
    
    /**
     * Returns translated sortings
     *
     * @param Tx_PtExtlist_Domain_QueryObject_Query $query
     */
    abstract static public function getSorting(Tx_PtExtlist_Domain_QueryObject_Query $query);
    
    
    
    /**
     * Returns translated limit
     *
     * @param Tx_PtExtlist_Domain_QueryObject_Query $query
     */
    abstract static public function getLimit(Tx_PtExtlist_Domain_QueryObject_Query $query);
	
	
	
}

?>