<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version48 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('comment_estampagem', 'comment_estampagem_user_id_sf_guard_user_id', array(
             'name' => 'comment_estampagem_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->addIndex('comment_estampagem', 'comment_estampagem_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('comment_estampagem', 'comment_estampagem_user_id_sf_guard_user_id');
        $this->removeIndex('comment_estampagem', 'comment_estampagem_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
    }
}