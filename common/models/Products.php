<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category
 * @property int $brand
 * @property string $product_name
 * @property string $canonical_name
 * @property string $description
 * @property string $image
 * @property string $related_products
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 *
 * @property ProductCategory $category0
 * @property Brands $brand0
 */
class Products extends \yii\db\ActiveRecord {

    public $gallery_images;

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['category', 'brand', 'product_name', 'canonical_name', 'description', 'meta_title', 'meta_keyword', 'meta_description'], 'required'],
            [['category', 'brand', 'status', 'CB', 'UB'], 'integer'],
            [['description'], 'string'],
            [['DOC', 'DOU', 'related_products'], 'safe'],
            [['product_name', 'canonical_name'], 'unique'],
            [['product_name', 'canonical_name'], 'string', 'max' => 255],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['category' => 'id']],
            [['brand'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::className(), 'targetAttribute' => ['brand' => 'id']],
            [['gallery_images'], 'file', 'extensions' => 'jpg, gif, png,jpeg', 'maxFiles' => 100, 'skipOnEmpty' => true],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'brand' => 'Brand',
            'product_name' => 'Product Name',
            'canonical_name' => 'Canonical Name',
            'description' => 'Description',
            'image' => 'Image',
            'related_products' => 'Related Products',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0() {
        return $this->hasOne(ProductCategory::className(), ['id' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand0() {
        return $this->hasOne(Brands::className(), ['id' => 'brand']);
    }

}
