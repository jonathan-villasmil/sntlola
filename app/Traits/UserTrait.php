<?php 

namespace App\Traits;
use App\Models\Role;


trait UserTrait{
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    
    public function havePermission($permission){
        
        foreach ($this->roles as $role ) {
            
            if ($role['full-access'] =='yes') {
                return true;
            }

            foreach($role->permissions as $perm){
                
                if($perm->id == $permission){
                    return true;
                }
            }
            

        }
        //dd($permission);
        return false;
    //     //return $this->roles;
    }
}

?>