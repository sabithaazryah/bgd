<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $section1_title1
 * @property string $section1_title2
 * @property string $section1_description2
 * @property string $section1_image
 * @property string $section2_description
 * @property int $section3_value1
 * @property string $section3_label1
 * @property int $section3_value2
 * @property string $section3_label2
 * @property int $section3_value3
 * @property string $section3_label3
 * @property int $section3_value4
 * @property string $section3_label4
 * @property string $section4_image
 * @property string $section4_description
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class About extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['section1_description2', 'section2_description', 'section3_value1', 'section3_label1', 'section3_value2', 'section3_label2', 'section3_value3', 'section3_label3', 'section3_value4', 'section3_label4', 'section4_description'], 'required'],
            [['section1_description2', 'section2_description', 'section4_description'], 'string'],
            [['section3_value1', 'section3_value2', 'section3_value3', 'section3_value4', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['section1_title1', 'section1_title2'], 'string', 'max' => 255],
            [['section1_image', 'section4_image'], 'file', 'extensions' => 'jpg, png, jpeg, webp'],
            [['section3_label1', 'section3_label2', 'section3_label3', 'section3_label4'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'section1_title1' => 'Section1 Title1',
            'section1_title2' => 'Section1 Title2',
            'section1_description2' => 'Section1 Description2',
            'section1_image' => 'Section1 Image',
            'section2_description' => 'Section2 Description',
            'section3_value1' => 'Section3 Value1',
            'section3_label1' => 'Section3 Label1',
            'section3_value2' => 'Section3 Value2',
            'section3_label2' => 'Section3 Label2',
            'section3_value3' => 'Section3 Value3',
            'section3_label3' => 'Section3 Label3',
            'section3_value4' => 'Section3 Value4',
            'section3_label4' => 'Section3 Label4',
            'section4_image' => 'Section4 Image',
            'section4_description' => 'Section4 Description',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
