<?php
/**
* 
*/
class USerController extends BaseController
{
	
	public function createuser()
	{
		$user = new User;
		$user->name = 'User 1';
		$user->lastname = 'Last Name 1'
		$user->dni = '12345678';
		$user->password = 'myPassword';
		$user->save();
	}

	public function updateuser($user_id)
	{
		$user = User::find($user_id);
		$user->name = 'Name updated';
		$user->lastname = 'Lastname updated';
		$user->save();
	}

	public function userdetail($user_id)
	{
		$user = User::find($user_id);
		return "User details:<br>Name: " . $user->name . "<br>Last name: " . $user->lastname;
	}
}