<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/
$router->get('/',['uses'=>'InicioController@index',]);
$router->get('operaciones/create',['as'=>'operaciones.create', 'uses'=>'OperacionesController@create',]);
$router->get('elegir_tipo_cliente/create',['as'=>'elegir_tipo_cliente.create', 'uses'=>'OperacionesController@store',]);
$router->get('iniciar_sesion/create',['as'=>'iniciar_sesion.create', 'uses'=>'OperacionesController@index',]);//
$router->post('Operacion/login',['as'=>'operacion.login', 'uses'=>'OperacionesController@login',]);//iniciar sesion

/*OPERACIONES DEL CLIENTE*/
$router->get('cliente/registro',['as'=>'cliente.registro', 'uses'=>'ClienteController@create',]);//registro
$router->post('cliente',['as'=>'clientes.store', 'uses'=>'ClienteController@store',]);

//todas las rutas que necesitan autenticacion
$router->get('cliente/{id}/create',['as'=>'cliente.create', 'uses'=>'ClienteController@index',]);//ruta inicio
$router->get('cliente/{id}/lista_profesionales',['as'=>'cliente.lista_profesionales', 'uses'=>'ClienteController@listEmpleado',]);
$router->get('cliente/{id}/galeria_profesionales/{idempleado}',['as'=>'cliente.galeria_profesionales', 'uses'=>'ClienteController@galeriaEmpleado',]);
$router->get('cliente/{codigo}/lista_cita', ['as'=>'cliente.lista_cita','uses'=>'ClienteController@listacita']);

$router->get('cita/{id}/lista/{idempleado}',['as'=>'cita.lista', 'uses'=>'CitaController@index',]);
$router->post('cita/llenarservicio',['as'=>'cita.llenar', 'uses'=>'CitaController@llenarDatos',]);
$router->get('cita/eventos',['as'=>'cita.evento', 'uses'=>'CitaController@eventos',]);
$router->get('cita/detallecitas',['as'=>'cita.detalle', 'uses'=>'CitaController@detallecita',]);
//aplicamos el middleware auth
/*$router->group(['middleware'=>'auth'], function() use ($router){
	$router->post('logout', 'ClienteController@logout');
});*/


$router->get('empleado/lista',['as'=>'empleado.lista', 'uses'=>'EmpleadoController@index',]);
$router->get('empleado/registro',['as'=>'empleado.registro', 'uses'=>'EmpleadoController@index',]);
$router->get('empleado/{id}/create',['as'=>'empleado.create', 'uses'=>'EmpleadoController@create',]);
$router->post('empleado/store',['as'=>'empleado.store', 'uses'=>'EmpleadoController@store',]);
$router->get('empleado/guardar',['as'=>'empleado.guardar', 'uses'=>'EmpleadoController@guardar',]);
$router->get('empleado/{id}/titulo',['as'=>'empleado.titulo', 'uses'=>'EmpleadoController@titulo',]);
$router->post('empleado/{id}/titulostore',['as'=>'empleado.titulostore', 'uses'=>'EmpleadoController@tituloStore',]);
$router->get('empleado/{id}/servicios', ['as'=>'empleado.servicios', 'uses'=>'EmpleadoController@servicios',]);
$router->post('empleado/{id}/servicios/store', ['as'=>'empleado.serviciostore', 'uses'=>'EmpleadoController@serviciostore',]);
$router->get('empleado/{id}/registrar_horario', ['as'=>'empleado.registro_horario', 'uses'=>'EmpleadoController@registrarHorario']);
$router->post('empleado/{id}/horario/store', ['as'=>'empleado.horariostore', 'uses'=>'EmpleadoController@horarioStore']);
$router->get('empleado/{id}/horario/update', ['as'=>'empleado.horarioupdate', 'uses'=>'EmpleadoController@horarioUpdate']);
$router->get('empleado/{id}/add/galeria', ['as'=>'empleado.galeria', 'uses'=>'EmpleadoController@addgaleria']);
$router->post('empleado/{id}/store/galeria', ['as'=>'empleado.galeriastore', 'uses'=>'EmpleadoController@guardargaleria']);

//Administrador
$router->get('Administrador',['as'=>'Administrador.create', 'uses'=>'AdministradorController@create',]);
$router->get('Administrador/empleados',['as'=>'Administrador.empleados', 'uses'=>'AdministradorController@empleados',]);
$router->get('Administrador/clientes',['as'=>'Administrador.clientes', 'uses'=>'AdministradorController@clientes',]);
$router->get('Administrador/tipo_servicio',['as'=>'Administrador.tipo_servicio', 'uses'=>'AdministradorController@tipo_servicio',]);
$router->get('Administrador/{id}/delete',['as'=>'Administrador.delete', 'uses'=>'AdministradorController@delete',]);
$router->post('Administrador/store',['as'=>'Administrador.store', 'uses'=>'AdministradorController@store',]);