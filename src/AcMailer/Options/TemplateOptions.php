<?php
namespace AcMailer\Options;

/**
 * Template specific options
 * @author Alejandro Celaya Alastrué
 * @link http://www.alejandrocelaya.com
 */
class TemplateOptions {

	/**
	 * @var bool
	 */
	private $useTemplate = false;
	/**
	 * @var string
	 */
	private $path = 'ac-mailer/mail-templates/mail';
	/**
	 * @var array
	 */
	private $params = array();

	/**
	 * @param $params
	 * @return $this
	 */
	public function setParams($params) {
		$this->params = $params;
		return $this;
	}
	/**
	 * @return array
	 */
	public function getParams() {
		return $this->params;
	}

	/**
	 * @param $path
	 * @return $this
	 */
	public function setPath($path) {
		$this->path = $path;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * @param $useTemplate
	 * @return $this
	 */
	public function setUseTemplate($useTemplate) {
		$this->useTemplate = $useTemplate;
		return $this;
	}
	/**
	 * @return boolean
	 */
	public function getUseTemplate() {
		return $this->useTemplate;
	}

} 