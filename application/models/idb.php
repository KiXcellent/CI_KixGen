<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/****************************************************************************
 *  idb.php
 *  This class helps connect to any database, not just the one in the config
 *  =========================================================================
 *  Copyright 2014 KiXcellent
 *  This file is part of CI_KixGen.
 *
 *  GNU GPLv3 license
 *
 *  CI_KixGen is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  CI_KixGen is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with CI_KixGen.  If not, see <http://www.gnu.org/licenses/>.
 *
 ****************************************************************************/
class idb extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		include( APPPATH . '/config/database.php' );
		$this->db_conf = $db['kixgen'];
	}	

	function connect( $database )
	{
        if( $database )
        {
        	$this->db_conf['database'] = $database;
        } 

        $this->load->database( $this->db_conf );
	}
}
