<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_masuk".
 *
 * @property int $id
 * @property string|null $pengirim
 * @property string|null $no_surat
 * @property string|null $tanggal_surat
 * @property string|null $tanggal_diteruskan
 * @property string|null $perihal
 * @property string|null $isi_ringkas
 * @property string|null $catatan
 * @property string|null $sifat
 * @property string|null $file
 * @property int|null $state
 */
class SuratMasuk extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengirim', 'no_surat', 'tanggal_surat', 'tanggal_diteruskan', 'perihal', 'sifat', 'file'], 'required', 'message' => '{attribute} harus diisi'],
            [['tanggal_surat', 'tanggal_diteruskan'], 'safe'],
            [['isi_ringkas', 'catatan','file'], 'string'],
            [['state'], 'integer'],
            [['pengirim', 'no_surat', 'perihal', 'sifat'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, pdf, jpeg, doc,docx'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pengirim' => 'Pengirim',
            'no_surat' => 'No Surat',
            'tanggal_surat' => 'Tanggal Surat',
            'tanggal_diteruskan' => 'Tanggal Diteruskan',
            'perihal' => 'Perihal',
            'isi_ringkas' => 'Isi Ringkas',
            'catatan' => 'Catatan',
            'sifat' => 'Sifat',
            'file' => 'File',
            'state' => 'State',
        ];
    }
}
