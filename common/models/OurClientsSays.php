<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_clients_says".
 *
 * @property int $id
 * @property string $message
 * @property string $author
 * @property string $designation
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class OurClientsSays extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'our_clients_says';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['message'], 'string'],
            [['message', 'author', 'designation'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['author', 'designation'], 'string', 'max' => 100],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png, jpeg, webp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'author' => 'Author',
            'designation' => 'Designation',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
