<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version26 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->changeColumn('objecto', 'buy_date', 'string', '125', array(
             ));
    }

    public function down()
    {

    }
}