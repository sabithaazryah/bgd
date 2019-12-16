<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts_info".
 *
 * @property int $id
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $map_link
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ContactsInfo extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'contacts_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['address', 'email'], 'required'],
            [['address', 'map_link'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU', 'working_time', 'phone'], 'safe'],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'map_link' => 'Map Link',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
