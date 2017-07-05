<?php
use Phinx\Seed\AbstractSeed;

class DomainsMap extends AbstractSeed {
	/**
	 * Run Method.
	 */
	public function run() {
		$data = array();
		for($id=0; $id<=65535; $id++){
			$data[]=array('id' => $id, 'server' => NULL, 'status' => 'ok');
			}
	        $posts = $this->table('domains_map');
        	$posts->insert($data)->save();
		}
	}
