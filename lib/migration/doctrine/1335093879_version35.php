<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version35 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('estampagem', 'super_category_id', 'integer', '4', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('estampagem', 'super_category_id');
    }
}