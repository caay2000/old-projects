<?php

/**
 * @Entity()
 * 
 */

class Pronostic {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;
	
	/**
	 * @ManyToOne(targetEntity="User")
	 * @JoinColumn(name="user", referencedColumnName="id")
	 */
	public $user;
	
	/**
	 * @ManyToOne(targetEntity="Partido")
	 * @JoinColumn(name="partido", referencedColumnName="id")
	 */
	public $partido;
	
	/**
	 * @Column(type="integer", nullable=true)
	 **/
	public $result1;
	
	/**
	 * @Column(type="integer", nullable=true)
	 **/
	public $result2;

	/**
	 * @Column(type="integer", nullable=true)
	 **/
	public $punts;
	
	/**
	 * @Column(type="boolean", nullable=true)
	 **/
	public $punt3;
	
	/**
	 * @Column(type="boolean", nullable=true)
	 **/
	public $punt1a;
	
	/**
	 * @Column(type="boolean", nullable=true)
	 **/
	public $punt1b;
	
	/**
	 * @Column(type="boolean", nullable=true)
	 **/
	public $punt2;
	
	/* CONTRUCTOR */
	
	public function __construct() {
	}
	
}