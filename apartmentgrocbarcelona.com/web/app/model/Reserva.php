<?php

/**
 * @Entity
 * @Table(name="Reserva")
 **/

class Reserva {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;
	
	/**
	 * @Column(type="string")
	 **/
	public $id_apartament;

	/**
	 * @Column(type="datetime")
	 **/
	public $desde;
	
	/**
	 * @Column(type="datetime")
	 **/
	public $hasta;

	/**
	 * @Column(type="string")
	 **/
	public $persona;

}
