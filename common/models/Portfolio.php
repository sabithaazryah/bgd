<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int $category
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Portfolio extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['category', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['name', 'description', 'image'], 'string', 'max' => 255],
            [['category', 'name'], 'required'],
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
            'category' => 'Category',
            'name' => 'Name',
            'description' => 'Description',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
