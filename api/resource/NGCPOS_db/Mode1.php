<?php
	require_once './db/dbNGCPOS_dbManager.php';
	
/*
 * SCHEMA DB Mode1
 * 
	{
		Test1: {
			type: 'String', 
			required : true
		},
		Test2: {
			type: 'Number',
			enum : ["01", "02", "03", "04"], 
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		
	}
 * 
 */


//CRUD METHODS

	
//CRUD - REMOVE

$app->delete('/mode1/:id',	function ($id) use ($app){
	
	$params = array (
		'id'	=> $id,
	);

	makeQuery("DELETE FROM mode1 WHERE _id = :id LIMIT 1", $params);

});
	
//CRUD - GET LIST

$app->get('/mode1',	function () use ($app){
	makeQuery("SELECT * FROM mode1");
});



/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>