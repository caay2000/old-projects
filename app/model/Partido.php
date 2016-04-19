<?php

/**
 * @Entity()
 * 
 */

class Partido {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;

	/**
	 * @Column(type="datetime", nullable=false)
	 **/
	public $fecha;
	
	/**
	 * @ManyToOne(targetEntity="Team")
	 * @JoinColumn(name="team1", referencedColumnName="code")
	 */
	public $team1;
	
	/**
	 * @ManyToOne(targetEntity="Team")
	 * @JoinColumn(name="team2", referencedColumnName="code")
	 */
	public $team2;
	
	
	/**
	 * @Column(type="integer", nullable=true)
	 **/
	public $result1;
	
	/**
	 * @Column(type="integer", nullable=true)
	 **/
	public $result2;
	
	/* CONTRUCTOR */
	
	public function __construct() {
	}
	
}