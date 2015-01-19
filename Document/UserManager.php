<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Sonata\UserBundle\Document;

use FOS\UserBundle\Document\UserManager as BaseUserManager;
use Sonata\UserBundle\Model\UserManagerInterface;

/**
 * Class UserManager
 *
 * @package Sonata\UserBundle\Document
 *
 * @author Hugo Briand <briand@ekino.com>
 */
class UserManager extends BaseUserManager implements UserManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public function findUsersBy(array $criteria = null, array $orderBy = null, $limit = null, $offset = null)
    {
        return $this->repository->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * @param array $criteria
     * @param integer $page
     * @param integer $limit
     * @param array $sort
     *
     * @return \Sonata\DatagridBundle\Pager\PagerInterface
     */
    public function getPager(array $critesria, $page, $limit = 10, array $sort = array())
    {
        // TODO: Implement getPager() method.
    }
}