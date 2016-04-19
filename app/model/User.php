<?php

/**
 * @Entity()
 * 
 */

class User {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;

	/**
	 * @Column(type="string", nullable=false, unique=true)
	 **/
	public $username;
	
	/**
	 * @Column(type="string", nullable=false)
	 **/
	public $password;
	
	/**
	 * @Column(type="string", nullable=false)
	 **/
	public $email;
	
	/**
	 * @OneToMany(targetEntity="Pronostic", mappedBy="user")
	 */
	public $pronostics;
	
	/**
	 * @Column(type="boolean", nullable=false)
	 **/
	public $pagado;
	
	/**
	 * @Column(type="integer", nullable=false)
	 **/
	public $punts = 0;

	/* CONTRUCTOR */
	
	public function __construct() {
		$this->pronostics = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	public function getPronostic($id){
		foreach($this->pronostics as $p){
			if($p->partido->id == $id){
				return $p;
			}
		}
		return null;
	}
	
}