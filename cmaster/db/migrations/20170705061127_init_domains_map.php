<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class InitDomainsMap extends AbstractMigration{
	/**
	 * Change Method.
	 */
	public function change(){
		$table = $this->table('domains_map',array('id' => false, 'primary_key' => array('id')));
		$table->addColumn('id', 'integer', ['signed'=>false, 'limit' => MysqlAdapter::INT_SMALL])
			->addColumn('server', 'integer', ['signed'=>false, 'null'=>true, 'limit' => MysqlAdapter::INT_SMALL])
			->addColumn('status', 'enum', ['values'=>['ok','rb','err'],'default'=>'ok'])
			->addColumn('size_bytes', 'integer', ['signed'=>false, 'default' => 0, 'limit' => MysqlAdapter::INT_BIG, 'comment'=>'Size (in bytes) of all crawled HTML data for all pages'])
			->addColumn('urls_count', 'integer', ['signed'=>false, 'default' => 0, 'comment'=>'Count of all downloaded urls'])
			//
			->addForeignKey('server', 'servers', 'id', array('delete'=> 'SET NULL', 'update'=> 'SET NULL'))
			->create();
		}
	}
