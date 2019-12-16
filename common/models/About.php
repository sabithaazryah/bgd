<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $section1_title1
 * @property string $section1_title2
 * @property string $section1_description1
 * @property string $section1_description2
 * @property string $section2_title
 * @property string $mission
 * @property string $vision
 * @property string $who_we_are
 * @property string $what_we_do
 * @property string $our_approach
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
            [['section1_title1', 'section1_title2', 'section1_description1', 'section1_description2', 'section2_title', 'mission', 'vision', 'who_we_are', 'what_we_do', 'our_approach'], 'required'],
            [['section1_description1', 'section1_description2', 'mission', 'vision', 'who_we_are', 'what_we_do', 'our_approach'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['section1_title1', 'section1_title2', 'section2_title'], 'string', 'max' => 255],
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
            'section1_description1' => 'Section1 Description1',
            'section1_description2' => 'Section1 Description2',
            'section2_title' => 'Section2 Services',
            'mission' => 'Mission',
            'vision' => 'Vision',
            'who_we_are' => 'Who We Are',
            'what_we_do' => 'What We Do',
            'our_approach' => 'Our Approach',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
