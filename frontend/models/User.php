<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $UserID
 * @property string $Username
 * @property string $Email
 * @property string $Password
 * @property int|null $is_deleted
 *
 * @property Comment[] $comments
 * @property Highlight[] $highlights
 * @property Post[] $posts
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Username', 'Email', 'Password'], 'required'],
            [['is_deleted'], 'integer'],
            [['Username', 'Email', 'Password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UserID' => 'User ID',
            'Username' => 'Username',
            'Email' => 'Email',
            'Password' => 'Password',
            'is_deleted' => 'Is Deleted',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['UserID' => 'UserID']);
    }

    /**
     * Gets query for [[Highlights]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHighlights()
    {
        return $this->hasMany(Highlight::class, ['UserID' => 'UserID']);
    }

    /**
     * Gets query for [[Posts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::class, ['UserID' => 'UserID']);
    }
}
