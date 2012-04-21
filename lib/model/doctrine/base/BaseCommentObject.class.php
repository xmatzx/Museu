<?php

/**
 * BaseCommentObject
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $objecto_id
 * @property clob $comment
 * @property boolean $aproved
 * @property Objecto $Objecto
 * @property sfGuardUser $User
 * 
 * @method integer       getId()         Returns the current record's "id" value
 * @method integer       getUserId()     Returns the current record's "user_id" value
 * @method integer       getObjectoId()  Returns the current record's "objecto_id" value
 * @method clob          getComment()    Returns the current record's "comment" value
 * @method boolean       getAproved()    Returns the current record's "aproved" value
 * @method Objecto       getObjecto()    Returns the current record's "Objecto" value
 * @method sfGuardUser   getUser()       Returns the current record's "User" value
 * @method CommentObject setId()         Sets the current record's "id" value
 * @method CommentObject setUserId()     Sets the current record's "user_id" value
 * @method CommentObject setObjectoId()  Sets the current record's "objecto_id" value
 * @method CommentObject setComment()    Sets the current record's "comment" value
 * @method CommentObject setAproved()    Sets the current record's "aproved" value
 * @method CommentObject setObjecto()    Sets the current record's "Objecto" value
 * @method CommentObject setUser()       Sets the current record's "User" value
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommentObject extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment_object');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 5, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('objecto_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('comment', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('aproved', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Objecto', array(
             'local' => 'objecto_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}