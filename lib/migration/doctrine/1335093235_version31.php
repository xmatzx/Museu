<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version31 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('local_object', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('local_object');
    }
}