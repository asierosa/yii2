<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<h1>Aplicación CRUD Ejemplo</h1>
  	<table class="table table-hover">
    	<thead>
 			<tr> 
             	<th scope="col">Tema</th>
             	<th scope="col">Descripción</th>
             	<th scope="col">Responsable</th>
             	<th scope="col">Accion</th>
 			</tr>
 		</thead>
 		<tbody>
 			<tr class="table-active">
 			<th scope="row">Active</th>
 			<td>Mantenimiento</td>
 			<td>Mantenimiento</td>
 			<td>Mantenimiento</td>
 			<td>
 				<span><?= Html::a('View') ?></span>
 				<span><?= Html::a('Update') ?></span>
 				<span><?= Html::a('Delete') ?></span>
 			</td>			
 			
 			</tr>
 		</tbody>    
	</table>
</div>
