<?php

/**
 * Class xoctRequestDummy
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class xoctRequestDummy extends xoctRequest{

	public function get($as_user = '') {
		$var = parent::get($as_user);

		return $var; // TODO: Change the autogenerated stub
	}


	public function post(array $post_data, $as_user = '') {
		return parent::post($post_data, $as_user); // TODO: Change the autogenerated stub
	}


	public function put(array $post_data, $as_user = '') {
		return parent::put($post_data, $as_user); // TODO: Change the autogenerated stub
	}


	public function delete() {
		parent::delete(); // TODO: Change the autogenerated stub
	}
}