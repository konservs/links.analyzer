<?php
namespace Brilliant\Query;

use Brilliant\Log\BLog;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class BAMQP {
	/**
	 * @var bool
	 */
	protected $_connected;
	/**
	 * @var \AMQPStreamConnection
	 */
	protected $_connection;
	/**
	 * @var BMySQL | null
	 */
	protected static $instance = NULL;
	/**
	 * AMQP constructor.
	 */
	public function __construct() {
		$this->_connected = false;
		$this->_logsuffix = '[AMQP]';
		$this->_host = AMQP_HOST;
		$this->_username = AMQP_USERNAME;
		$this->_password = AMQPL_PASSWORD;
		$this->_port = 5672;
		}
	/**
	 * Returns the global Session object, only creating it
	 * if it doesn't already exist.
	 *
	 * @return BAMQP|null
	 */
	public static function getInstance() {
		if (!is_object(self::$instance)) {
			self::$instance = new BAMQP();
			}
		return self::$instance;
		}
	/**
	 * Get instance if all is ok
	 *
	 * @return BAMQP|null
	 */
	public static function getInstanceAndConnect() {
		if (!is_object(self::getInstance())) {
			return NULL;
			}
		if (!self::$instance->tryConnect()) {
			return NULL;
			}
		return self::$instance;
		}

	/**
	 * Try to connect
	 * @return bool
	 */
	public function tryConnect() {
		if ($this->_connected) {
			return TRUE;
			}
		$this->_connection = new AMQPStreamConnection(
			$this->_host,
			$this->_port,
			$this->_username,
			$this->_password);
		return TRUE;
		}
	/**
	 *
	 */
	public function channel(){
		return $this->_connection->channel();
		}
	}
