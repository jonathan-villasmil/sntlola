<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate table
        // DB::table('role_user')->truncate();
        // DB::table('permission_role')->truncate();
        // Permission::truncate();
        // Role::truncate();
        
        //user admin
        $useradmin = User::where('email','admin@admin.com')->first();
        if($useradmin){
            $useradmin->delete();   
        }
        $useradmin= User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
        
        //role Admin
        $roleadmin = Role::create([
            'name' => 'Admin',
            'description'=> 'Administrador',
            'full-access'=> 'yes',
        ]);

        //tables role_user
        $useradmin->roles()->sync([$roleadmin->id]);
        
        //permission
        $permission_all = [];

        //permission role
            //list index
        $permission = Permission::create([
            'name'=> 'List role',
            'description'=> 'A user can list role',
        ]);

        $permission_all []= $permission->id;
            //show
        $permission = Permission::create([
            'name'=> 'Show role',
            'description'=> 'A user can see role',
        ]);

        $permission_all []= $permission->id;
            //create
        $permission = Permission::create([
            'name'=> 'Create role',
            'description'=> 'A user can create role',
        ]);

        $permission_all []= $permission->id;
            //edit
        $permission = Permission::create([
            'name'=> 'Edit role',
            'description'=> 'A user can Edit role',
        ]);

        $permission_all []= $permission->id;
            //delete
        $permission = Permission::create([
            'name'=> 'Delete role',
            'description'=> 'A user can delete role',
        ]);

        $permission_all []= $permission->id;

        //permission user
            //list index
        $permission = Permission::create([
            'name' => 'List user',
            'description' => 'A user can list user',
        ]);
        
        $permission_all[] = $permission->id;
            //show
        $permission = Permission::create([
            'name' => 'Show user',
            'description' => 'A user can see user',
        ]);        
        
        $permission_all[] = $permission->id;
            //edit
        $permission = Permission::create([
            'name' => 'Edit user',
            'description' => 'A user can edit user',
        ]);
        
        $permission_all[] = $permission->id;
            //delete
        $permission = Permission::create([
            'name' => 'Destroy user',
            'description' => 'A user can destroy user',
        ]);
        
        $permission_all[] = $permission->id;

        //permission products
                //list index
        $permission = Permission::create([
            'name' => 'List product',
            'description' => 'A user can list product',
        ]);
        
        $permission_all[] = $permission->id;
            //show
        $permission = Permission::create([
            'name' => 'Show product',
            'description' => 'A user can see product',
        ]);        
        
        $permission_all[] = $permission->id;
            //edit
        $permission = Permission::create([
            'name' => 'Edit product',
            'description' => 'A user can edit product',
        ]);
        
        $permission_all[] = $permission->id;
            //delete
        $permission = Permission::create([
            'name' => 'Destroy product',
            'description' => 'A user can destroy product',
        ]);
        
        $permission_all[] = $permission->id;

        //permissions categories
                //list index
        $permission = Permission::create([
            'name' => 'List category',
            'description' => 'A user can list categories',
        ]);
        
        $permission_all[] = $permission->id;
            //show
        $permission = Permission::create([
            'name' => 'Show category',
            'description' => 'A user can see category',
        ]);        
        
        $permission_all[] = $permission->id;
            //edit
        $permission = Permission::create([
            'name' => 'Edit category',
            'description' => 'A user can edit category',
        ]);
        
        $permission_all[] = $permission->id;
            //delete
        $permission = Permission::create([
            'name' => 'Destroy category',
            'description' => 'A user can destroy category',
        ]);
        
        $permission_all[] = $permission->id;



        //tables permission_role
        //$roleadmin->permissions()->sync($permission_all);
    }
}
