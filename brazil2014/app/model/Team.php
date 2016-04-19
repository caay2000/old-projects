<?php

/**
 * @Entity()
 * 
 */

class Team {


	/**
	 * @Column(type="string")
	 **/
	public $name;
	
	/**
	 * @Id @Column(type="string")
	 **/
	public $code;

}