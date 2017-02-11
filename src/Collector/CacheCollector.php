<?php
/**
 *
 * CacheCollector.php
 *
 * @author:     Szymon Michałowski <szmnmichalowski@gmail.com>
 * @data:       2017-02-08 21:58
 */

namespace DoctrineCacheToolbar\Collector;

use Doctrine\ORM\EntityManager;
use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\AbstractCollector;

/**
 * Class CacheCollector
 * @package DoctrineCacheToolbar\Collector
 */
class CacheCollector extends AbstractCollector
{
    /**
     * @var string
     */
    protected $name = 'cache.toolbar';

    /**
     * @var int
     */
    protected $priority = 15;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $cacheLogger = '\Doctrine\ORM\Cache\Logging\StatisticsCacheLogger';

    public function collect(MvcEvent $mvcEvent)
    {
        if (!$this->getEntityManager()) {
            throw new \LogicException('Entity Manager must be set.');
        }

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     */
    public function setEntityManager(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return string
     */
    public function getCacheLogger()
    {
        return $this->cacheLogger;
    }

    /**
     * @param string $cacheLogger
     */
    public function setCacheLogger($cacheLogger)
    {
        $this->cacheLogger = $cacheLogger;
    }
}