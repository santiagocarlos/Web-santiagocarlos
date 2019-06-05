<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Permisos
        Permission::create([
        	'name' 				=> 'Listar usuarios',
        	'slug' 				=> 'users.index',
        	'description' => 'Lista todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Ver detalle de un usuario',
        	'slug' 				=> 'users.show',
        	'description' => 'Ver el detalle de un usuario del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Edición de usuarios',
        	'slug' 				=> 'users.edit',
        	'description' => 'Editar datos de un usuario del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Eliminar usuarios',
        	'slug' 				=> 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',
        ]);

        //Roles
        Permission::create([
        	'name' 				=> 'Listar roles',
        	'slug' 				=> 'roles.index',
        	'description' => 'Lista todos los roles del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Ver detalle de un rol',
        	'slug' 				=> 'roles.show',
        	'description' => 'Ver el detalle de un rol del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Creación de roles',
        	'slug' 				=> 'roles.create',
        	'description' => 'Crear un rol en el sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Edición de roles',
        	'slug' 				=> 'roles.edit',
        	'description' => 'Editar datos de un rol del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Eliminar roles',
        	'slug' 				=> 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //Administradores

        //Categorias
        Permission::create([
        	'name' 				=> 'Listar categorías',
        	'slug' 				=> 'categories.index',
        	'description' => 'Lista todas las categorías de posts del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Ver detalle de una categoría',
        	'slug' 				=> 'categories.show',
        	'description' => 'Ver el detalle de una categoría',
        ]);
        Permission::create([
        	'name' 				=> 'Creación de categorías',
        	'slug' 				=> 'categories.create',
        	'description' => 'Crear una categoría',
        ]);
        Permission::create([
        	'name' 				=> 'Edición de categorías',
        	'slug' 				=> 'categories.edit',
        	'description' => 'Editar datos de una categoría del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Eliminar categorías',
        	'slug' 				=> 'categories.destroy',
        	'description' => 'Eliminar cualquier categoría del sistema',
        ]);

        //Posts
        Permission::create([
        	'name' 				=> 'Listar posts',
        	'slug' 				=> 'posts.index',
        	'description' => 'Lista todos los posts del sistema',
        ]);
        Permission::create([
        	'name' 				=> 'Ver detalle de un post',
        	'slug' 				=> 'posts.show',
        	'description' => 'Ver el detalle de un post',
        ]);
        Permission::create([
        	'name' 				=> 'Creación de posts',
        	'slug' 				=> 'posts.create',
        	'description' => 'Creación de un post',
        ]);
        Permission::create([
        	'name' 				=> 'Edición de posts',
        	'slug' 				=> 'posts.edit',
        	'description' => 'Editar datos de un post',
        ]);
        Permission::create([
        	'name' 				=> 'Eliminar posts',
        	'slug' 				=> 'posts.destroy',
        	'description' => 'Eliminar cualquier post del sistema',
        ]);
    }
}
