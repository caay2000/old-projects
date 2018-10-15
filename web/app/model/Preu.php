<?php

/**
 * @Entity
 * @Table(name="Preu")
 **/

class Preu {

	/**
	 * @Id @GeneratedValue @Column(type="integer")
	 **/
	public $id;
	
	/**
	 * @Column(type="integer")
	 **/
	public $id_apt;
	
	/**
	 * @Column(type="integer")
	 **/
	public $pax;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_3_baixa;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_7_baixa;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_3_mitja;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_7_mitja;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_3_alta;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_7_alta;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_mes_baixa;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_mes_mitja;
	
	/**
	 * @Column(type="string")
	 **/
	public $preu_mes_alta;

}

