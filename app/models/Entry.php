<?php

class Entry extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entries';

	/**
	 * Don't put timestamps in the database.
	 *
	 * @var boolean
	 */
	public $timestamps = false;

}
