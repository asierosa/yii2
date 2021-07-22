<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Aplicacion de 0';
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
 			<?php if (count($projects) > 0): ?>
 				<?php foreach ($projects as $project):?>
 				<tr class="table-active">
 				<th scope="row"><?php echo $project->id;?></th>
 				<td><?php echo $project->tema;?></td>
 				<td><?php echo $project->descripcion;?></td>
 				<td><?php echo $project->resposable;?></td>
 				<td>
 					<span><?= Html::a('View') ?></span>
 					<span><?= Html::a('Update') ?></span>
 					<span><?= Html::a('Delete') ?></span>
 				</td>			
 				</tr>
 				<?php endforeach;?>
 			<?php else: ?>
 			<tr>
 				<td>No hay registros</td>
 			</tr>
 			<?php endif; ?>
 		</tbody>    
	</table>
</div>
