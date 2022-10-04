<?php

namespace app\models;

use yii\base\Model;
use yii\extensionsample\components\Add; //as per alias in extenions.php

class AddNew extends Model
{
    public $num1;
    public $num2;
    public $sum;

    public function rules()
    {
        return [
            [['num1', 'num2'], 'required']//, //both the name and email values are required
            //['email', 'email'], //the email data must be a syntactically valid email address
        ];
    }

    public function add()
    {
        //$this->num1, $this->num2
        $addHelper = new Add();
        $this->sum = $addHelper->add($this->num1, $this->num2);
    }
}