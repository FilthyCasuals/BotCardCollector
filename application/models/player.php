<?php

/**
 * Data access wrapper for "orders" table.
 *
 * @author jim
 */
class Player extends main_Model2 {

    // constructor
    function __construct() {
        parent::__construct('players', 'Player');
    }

    // add an item to an order
    function getPlayer(){
        $query = $this->db->query('SELECT Player FROM players');
      
        return $query->result_array();
    }
    
    function getPeanuts($player){
        $query = $this->db->query("SELECT Peanuts FROM players where Player = '".$player."'")->result_array();
        $peanuts = $query[0]["Peanuts"];
        return $peanuts;
    }


}
