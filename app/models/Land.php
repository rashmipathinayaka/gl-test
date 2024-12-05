<?php

/**
 * User class
 */
class Land
{

	use Model;

	protected $table = 'lands';

	// protected $order_column = 'landID';

	protected $allowedColumns = [

		'id',
		'landowner_id',
		'address',
		'size',
		'duration',
		'crop',
		'document',
		'status'

	];

	public function validate($data)
	{
		$this->errors = [];

		if (empty($data['address'])) {
			$this->errors['address'] = " Address is required";
		}

		if (empty($data['size'])) {
			$this->errors['size'] = "size is required";
		}

		if (!empty($data['document']['name'])) {
			$allowedTypes = ['application/pdf', 'image/jpeg', 'image/png'];
			if (!in_array($data['attachment']['type'], $allowedTypes)) {
				$this->errors['attachment'] = 'Invalid file type. Allowed: PDF, JPG, PNG.';
			}
			if ($data['attachment']['size'] > 5 * 1024 * 1024) { // 5MB max
				$this->errors['attachment'] = 'File size exceeds 5MB.';
			}
		}


		if (empty($this->errors)) {
			return true;
		}

		return false;
	}
}