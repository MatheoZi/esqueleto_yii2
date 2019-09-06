<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Empleado".
 *
 * @property int $c
 * @property string $nombre
 * @property string $apellido
 * @property int $edad
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Empleado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'edad'], 'required'],
            [['edad'], 'integer'],
            [['nombre', 'apellido'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'c' => 'C',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'edad' => 'Edad',
        ];
    }
}
