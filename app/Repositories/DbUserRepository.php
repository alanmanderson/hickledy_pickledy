<?php namespace App\Repositories;

use App\Models\User;

class DbUserRepository implements UserRepositoryInterface{

	public function find($id){
		return User::find($id); 
	}

	public function getAll(){
		return User::all();
	}

}
