<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version50 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('vote_estampagem', 'vote_estampagem_estampagem_id_estampagem_id', array(
             'name' => 'vote_estampagem_estampagem_id_estampagem_id',
             'local' => 'estampagem_id',
             'foreign' => 'id',
             'foreignTable' => 'estampagem',
             ));
        $this->addIndex('vote_estampagem', 'vote_estampagem_estampagem_id', array(
             'fields' => 
             array(
              0 => 'estampagem_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('vote_estampagem', 'vote_estampagem_estampagem_id_estampagem_id');
        $this->removeIndex('vote_estampagem', 'vote_estampagem_estampagem_id', array(
             'fields' => 
             array(
              0 => 'estampagem_id',
             ),
             ));
    }
}