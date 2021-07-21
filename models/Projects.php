<?php 
namespace app\models;

use yii\db\ActiveRecord;



class Projects extends ActiveRecord{
    private $tema;
    private $descripción;
    private $responsable;
    
    public function rules() {
     return [
         [['tema','descripción','responsable'], 'required']
         
     ];
    }
    
}
?>
