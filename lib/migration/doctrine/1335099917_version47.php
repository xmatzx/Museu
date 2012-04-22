<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version47 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('comment_estampagem', 'comment_estampagem_estampagem_id_estampagem_id', array(
             'name' => 'comment_estampagem_estampagem_id_estampagem_id',
             'local' => 'estampagem_id',
             'foreign' => 'id',
             'foreignTable' => 'estampagem',
             ));
        $this->addIndex('comment_estampagem', 'comment_estampagem_estampagem_id', array(
             'fields' => 
             array(
              0 => 'estampagem_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('comment_estampagem', 'comment_estampagem_estampagem_id_estampagem_id');
        $this->removeIndex('comment_estampagem', 'comment_estampagem_estampagem_id', array(
             'fields' => 
             array(
              0 => 'estampagem_id',
             ),
             ));
    }
}