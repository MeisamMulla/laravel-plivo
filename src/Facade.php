<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Facade extends Facade {
	protected static function getFacadeAccessor() {
		return 'Plivo';
	}
}