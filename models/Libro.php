<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libros".
 *
 * @property int $id
 * @property string $titulo
 * @property string $imagen
 */
class Libro extends \yii\db\ActiveRecord
{
    public $archivo; // declarando campo archivo
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['titulo'], 'string', 'max' => 250],
            //[['imagen'], 'string', 'max' => 2500],
            [['archivo'], 'file', 'extensions' => 'jpg,png'], //Asignando el campo donde se recibirá el archivo
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            //'imagen' => 'Imagen',
            'archivo' => 'Imagen', //Asignando etiqueta para nuestro nuevo campo.
        ];
    }
}
