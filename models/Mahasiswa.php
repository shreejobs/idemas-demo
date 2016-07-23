<?php

namespace idemas\demo\models;

use Yii;

/**
 * This is the model class for table "testing".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $email
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['nama', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
        ];
    }
}
