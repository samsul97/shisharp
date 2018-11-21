<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedagang".
 *
 * @property int $id
 * @property int $id_jenis_dagang
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $nomor
 */
class Pedagang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedagang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_dagang', 'nama', 'alamat', 'email', 'nomor'], 'required'],
            [['id_jenis_dagang'], 'integer'],
            [['nama', 'alamat', 'email', 'nomor'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jenis_dagang' => 'Id Jenis Dagang',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'nomor' => 'Nomor',
        ];
    }
}
