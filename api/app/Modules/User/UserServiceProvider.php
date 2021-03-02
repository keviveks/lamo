<?php

namespace App\Modules\User;

class UserServiceProvider extends \Illuminate\Support\ServiceProvider
{
	public function register()
	{
		\Log::debug("UserServiceProvider registered");
	}
}
