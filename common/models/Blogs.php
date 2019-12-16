<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property int $id
 * @property string $image
 * @property string $author
 * @property string $date
 * @property string $title
 * @property string $canonical_name
 * @property string $small_description
 * @property string $detailed_description
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property string $other_meta_tags
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Blogs extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'blogs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['date', 'DOC', 'DOU'], 'safe'],
            [['small_description', 'detailed_description', 'meta_keyword', 'meta_description', 'other_meta_tags'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['title', 'canonical_name'], 'unique'],
            [['author', 'meta_title'], 'string', 'max' => 100],
            [['title', 'canonical_name'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'title' => 'Title',
            'canonical_name' => 'Canonical Name',
            'small_description' => 'Small Description',
            'detailed_description' => 'Detailed Description',
            'meta_title' => 'Meta Title',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
            'other_meta_tags' => 'Other Meta Tags',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
