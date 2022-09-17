<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $admin = Role::create(['name' => 'admin']); 
        $student = Role::create(['name' => 'student']);  
        
        Permission::create(['name' => 'admin.dashboard', "description"=> "Permiso para abrir el dashboard"])->syncRoles($admin); 
        
        Permission::create(['name' => 'admin.users.index', "description"=> "Permiso para abrir la lista de usuarios"])->syncRoles($admin);
        Permission::create(['name' => 'admin.users.show', "description"=> "Permiso para ver detalles de los usuarios"])->syncRoles($admin);
        Permission::create(['name' => 'admin.users.edit', "description"=> "Permiso para editar usuarios"])->syncRoles($admin);
        Permission::create(['name' => 'admin.users.store', "description"=> "Permiso para guardar cambios de los usurios"])->syncRoles($admin);
        Permission::create(['name' => 'admin.users.destroy', "description"=> "Permiso para eliminar usuarios"])->syncRoles($admin);  

        Permission::create(['name' => 'student.dashboard', "description"=> "Permission to open dashboard/user"])->syncRoles($student);  

    }
}
