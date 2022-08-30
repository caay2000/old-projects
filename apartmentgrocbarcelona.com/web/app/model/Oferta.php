<?php
/**
 * @Entity
 * @Table(name="Oferta")
 **/

class Oferta {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;

	/**
	 * @Column(type="integer")
	 **/
	public $id_apartament;

	/**
	 * @Column(type="text")
	 **/
	public $ca;
	
	/**
	 * @Column(type="text")
	 **/
	public $es;
	
	/**
	 * @Column(type="text")
	 **/
	public $en;
	
	/**
	 * @Column(type="text")
	 **/
	public $fr;
	
	/**
	 * @Column(type="text")
	 **/
	public $it;
	
	/**
	 * @Column(type="boolean")
	 **/
	public $active;

	public function getText($lang){
		if($lang == 'ca'){
			return $this->ca;
		}elseif($lang == 'es'){
			return $this->es;
		}elseif($lang == 'en'){
			return $this->en;
		}elseif($lang == 'fr'){
			return $this->fr;
		}elseif($lang == 'it'){
			return $this->it;
		}
		return $this->ca;
	}
}
