<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "panorama_visualization".
 *
 * @property int $id
 * @property string $title
 * @property string $canonical_name
 * @property string $description
 * @property string $image
 * @property string $location
 * @property string $scope
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property string $instegram_link
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class PanoramaVisualization extends \yii\db\ActiveRecord {

    public $gallery_images;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'panorama_visualization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['description', 'location', 'scope', 'title', 'canonical_name', 'meta_title', 'meta_keyword', 'meta_description'], 'required'],
            [['description'], 'string'],
            [['title', 'canonical_name'], 'unique'],
            [['status', 'CB', 'UB'], 'integer'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['canonical_name', 'location', 'scope', 'facebook_link', 'twitter_link', 'linkedin_link', 'instegram_link'], 'string', 'max' => 255],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
            [['gallery_images'], 'file', 'extensions' => 'jpg, gif, png,jpeg', 'maxFiles' => 100, 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'canonical_name' => 'Canonical Name',
            'description' => 'Description',
            'image' => '360° Image',
            'location' => 'Location',
            'scope' => 'Scope',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'linkedin_link' => 'Linkedin Link',
            'instegram_link' => 'Instegram Link',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
