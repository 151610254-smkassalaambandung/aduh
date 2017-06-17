<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{ 
    public function run()
    {
        	//Membuat Role Admin
    	$adminRole = new Role();
    	$adminRole->name = "admin";
    	$adminRole->display_name = "Admin";
    	$adminRole->save();
    		//Membuat Role Member
    	$memberRole = new Role();
    	$memberRole->name = "member";
    	$memberRole->display_name = "Member";
    	$memberRole->save();
    		//Membuat Sample Admin
    	$admin = new user();
    	$admin->name = 'Admin Larapus';
    	$admin->email = 'admin@gmail.com';
    	$admin->password = bcrypt('rahasia');
    	$admin->save();
    	$admin->attachRole($adminRole);
    		//Membuat Sample Member
    	$member = new user();
    	$member->name = "Sample Member";
    	$member->email = 'member@gmail.com';
    	$member->password = bcrypt('rahasia');
    	$member->save();
    	$member->attachRole($memberRole);
    }
}
