<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rb_categories".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent
 * @property string $alias
 * @property string $title
 * @property string $description
 * @property string $keywords
 */
class RbCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rb_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'parent', 'alias', 'title', 'description', 'keywords'], 'required'],
            [['parent'], 'integer'],
            [['name', 'title', 'description', 'keywords'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 400],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent' => 'Parent',
            'alias' => 'Alias',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
        ];
    }
}
