<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service_category".
 *
 * @property int $id
 * @property string $category
 * @property string $canonical_name
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ServiceCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'canonical_name'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['category', 'canonical_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'canonical_name' => 'Canonical Name',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }
}
