<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

$config = [

	'table' => [

		'name' => 'posts', 
		'fields' => [

			'title' => [
				'name' => 'title', 
				'type' => 'string', 
				'size' => 255, 
				'default' => '', 
				'index' => 1, 
				'nullable' => 0,
				'label' => 'posts', 
				'instructions_add' => '', 
				'instructions_edit' => '', 
				'input' => 'text', 
				'placeholder' => 'Enter a post...', 
				'input_class' => 'form-control',
				'validations' => 'required', 
				'list_view' => 1,  
			], 

		], 
	], 

	'model' => [

		'class_name' => 'Post', 
		'file_name' => 'Post.php', 
		'file_path' => 'the_base_path/app/Models/', 
		'namespace' => 'App\Models',

	], 

	'controller' => [

		'class_name' => 'PostController', 
		'file_name' => 'PostController.php', 
		'file_path' => 'the_base_path/app/http/Controllers', 
		'namespace' => 'App\Http\Controllers',
		'route' => 'posts', 
		
	], 

	'labels' => [

		singular_lowercase => 'post', 
		singular_titlecase => 'Post', 
		plural_lowercase => 'posts',
		plural_titlecase => 'Posts', 


	]

	'views_directory' => 'posts', 
	'migration_name' => '2014_10_12_000000_create_posts_table', 


];