<?php
// auto-generated by sfPropelCrud
// date: 2014/05/09 14:14:41
?>
<?php

/**
 * writein actions.
 *
 * @package    GNLF
 * @subpackage writein
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 3335 2007-01-23 16:19:56Z fabien $
 */
class writeinActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('writein', 'list');
  }

  public function executeList()
  {
    $this->writeins = WriteinPeer::doSelect(new Criteria());
  }

  public function executeShow()
  {
    $this->writein = WriteinPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->writein);
  }

  public function executeCreate()
  {
    $this->writein = new Writein();

    $this->setTemplate('edit');
  }

  public function executeEdit()
  {
    $this->writein = WriteinPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->writein);
  }

  public function executeUpdate()
  {
    if (!$this->getRequestParameter('id'))
    {
      $writein = new Writein();
    }
    else
    {
      $writein = WriteinPeer::retrieveByPk($this->getRequestParameter('id'));
      $this->forward404Unless($writein);
    }

    $writein->setId($this->getRequestParameter('id'));
    $writein->setTitle($this->getRequestParameter('title'));
    $writein->setBody($this->getRequestParameter('body'));

    $writein->save();

    return $this->redirect('writein/show?id='.$writein->getId());
  }

  public function executeDelete()
  {
    $writein = WriteinPeer::retrieveByPk($this->getRequestParameter('id'));

    $this->forward404Unless($writein);

    $writein->delete();

    return $this->redirect('writein/list');
  }
}
