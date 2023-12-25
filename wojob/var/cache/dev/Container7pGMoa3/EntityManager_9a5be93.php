<?php

namespace Container7pGMoa3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder60c45 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer53458 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd27c = [
        
    ];

    public function getConnection()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getConnection', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getMetadataFactory', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getExpressionBuilder', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'beginTransaction', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getCache', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getCache();
    }

    public function transactional($func)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'transactional', array('func' => $func), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->transactional($func);
    }

    public function commit()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'commit', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->commit();
    }

    public function rollback()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'rollback', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getClassMetadata', array('className' => $className), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'createQuery', array('dql' => $dql), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'createNamedQuery', array('name' => $name), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'createQueryBuilder', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'flush', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'clear', array('entityName' => $entityName), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->clear($entityName);
    }

    public function close()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'close', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->close();
    }

    public function persist($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'persist', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'remove', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'refresh', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'detach', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'merge', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getRepository', array('entityName' => $entityName), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'contains', array('entity' => $entity), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getEventManager', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getConfiguration', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'isOpen', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getUnitOfWork', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getProxyFactory', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'initializeObject', array('obj' => $obj), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'getFilters', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'isFiltersStateClean', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'hasFilters', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return $this->valueHolder60c45->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer53458 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder60c45) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder60c45 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder60c45->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__get', ['name' => $name], $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        if (isset(self::$publicPropertiesdd27c[$name])) {
            return $this->valueHolder60c45->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60c45;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60c45;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60c45;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder60c45;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__isset', array('name' => $name), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60c45;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder60c45;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__unset', array('name' => $name), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder60c45;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder60c45;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__clone', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        $this->valueHolder60c45 = clone $this->valueHolder60c45;
    }

    public function __sleep()
    {
        $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, '__sleep', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;

        return array('valueHolder60c45');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer53458 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer53458;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer53458 && ($this->initializer53458->__invoke($valueHolder60c45, $this, 'initializeProxy', array(), $this->initializer53458) || 1) && $this->valueHolder60c45 = $valueHolder60c45;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder60c45;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder60c45;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
