<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "baner_images".
 *
 * @property int $id
 * @property string $about
 * @property string $property
 * @property string $agents
 * @property string $blog
 * @property string $contact_us
 * @property string $off_plan
 * @property string $site_map
 * @property string $terms_and_conditions
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class BanerImages extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'baner_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['about', 'property', 'agents', 'blog', 'contact_us', 'off_plan', 'site_map', 'terms_and_conditions'], 'file', 'extensions' => 'jpg, png, jpeg, webp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'about' => 'About',
            'property' => 'Property',
            'agents' => 'Agents',
            'blog' => 'Blog',
            'contact_us' => 'Contact Us',
            'off_plan' => 'Off Plan',
            'site_map' => 'Site Map',
            'terms_and_conditions' => 'Terms And Conditions',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
