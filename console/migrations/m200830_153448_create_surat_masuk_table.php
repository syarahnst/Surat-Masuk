<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%surat_masuk}}`.
 */
class m200830_153448_create_surat_masuk_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%surat_masuk}}', [
            'id' => $this->primaryKey(),
            'pengirim' => $this->string(),
            'no_surat' => $this->string(),
            'tanggal_surat' => $this->date(),
            'tanggal_diteruskan' => $this->date(),
            'perihal' => $this->string(),
            'isi_ringkas' =>$this->text(),
            'catatan' =>$this->text(),
            'sifat' =>$this->string(),
            'file' =>$this->text(),
            'state' =>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%surat_masuk}}');
    }
}
