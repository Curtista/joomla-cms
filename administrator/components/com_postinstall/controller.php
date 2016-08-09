<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */

defined('_JEXEC') or die;

class PostinstallController extends JControllerLegacy
{

	protected $default_view = 'messages';

	public function display($cachable = false, $urlparams = false)
	{

		$view = $this->input->get('view', 'messages');

		parent::display();

		return $this;
	}

}