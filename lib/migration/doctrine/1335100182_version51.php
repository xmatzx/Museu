<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version51 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('vote_estampagem', 'vote_estampagem_user_id_sf_guard_user_id', array(
             'name' => 'vote_estampagem_user_id_sf_guard_user_id',
             'local' => 'user_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_guard_user',
             ));
        $this->addIndex('vote_estampagem', 'vote_estampagem_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('vote_estampagem', 'vote_estampagem_user_id_sf_guard_user_id');
        $this->removeIndex('vote_estampagem', 'vote_estampagem_user_id', array(
             'fields' => 
             array(
              0 => 'user_id',
             ),
             ));
    }
}