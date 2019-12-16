<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_contents".
 *
 * @property int $id
 * @property string $phone
 * @property string $email
 * @property string $section1_title1
 * @property string $section1_title2
 * @property string $section1_description1
 * @property string $section1_description2
 * @property string $section1_service
 * @property string $product_section_title
 * @property string $product_list
 * @property string $facebook_link
 * @property string $linkedin_link
 * @property string $pinterest_link
 * @property string $twitter_link
 * @property string $instegram_link
 * @property string $youtube_link
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomeContents extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'home_contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['phone', 'email', 'section1_title1', 'section1_title2', 'section1_description1', 'section1_description2', 'section1_service'], 'required'],
            [['section1_description1', 'section1_description2'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU', 'product_list'], 'safe'],
            [['phone'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 100],
            [['section1_title1', 'section1_title2', 'section1_service', 'product_section_title', 'facebook_link', 'linkedin_link', 'pinterest_link', 'twitter_link', 'instegram_link', 'youtube_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'email' => 'Email',
            'section1_title1' => 'Section1 Title1',
            'section1_title2' => 'Section1 Title2',
            'section1_description1' => 'Section1 Description1',
            'section1_description2' => 'Section1 Description2',
            'section1_service' => 'Section1 Service',
            'product_section_title' => 'Product Section Title',
            'product_list' => 'Product List',
            'facebook_link' => 'Facebook Link',
            'linkedin_link' => 'Linkedin Link',
            'pinterest_link' => 'Pinterest Link',
            'twitter_link' => 'Twitter Link',
            'instegram_link' => 'Instegram Link',
            'youtube_link' => 'Youtube Link',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
