<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class InitServers extends AbstractMigration{
	/**
	 * Change Method.
	 */
	public function change(){
		$table = $this->table('servers',array('id' => false, 'primary_key' => array('id')));
		$table->addColumn('id', 'integer', ['signed'=>false, 'identity'=>true, 'limit' => MysqlAdapter::INT_SMALL])
			->addColumn('host', 'string', ['length'=>128])
			->addColumn('status', 'enum', ['values'=>['Y','N'],'default'=>'N'])
			->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
			->addColumn('modified', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
			->addIndex(['host'], ['unique' => true])
			->create();
		}
	}
