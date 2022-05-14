<?php

namespace ContainerV6GHmis;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd076e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer542d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescc265 = [
        
    ];

    public function getConnection()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getConnection', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getMetadataFactory', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getExpressionBuilder', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'beginTransaction', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getCache', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'transactional', array('func' => $func), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'commit', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->commit();
    }

    public function rollback()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'rollback', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getClassMetadata', array('className' => $className), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'createQuery', array('dql' => $dql), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'createNamedQuery', array('name' => $name), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'createQueryBuilder', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'flush', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'clear', array('entityName' => $entityName), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->clear($entityName);
    }

    public function close()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'close', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->close();
    }

    public function persist($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'persist', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'remove', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'refresh', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'detach', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'merge', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'contains', array('entity' => $entity), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getEventManager', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getConfiguration', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'isOpen', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getUnitOfWork', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getProxyFactory', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'initializeObject', array('obj' => $obj), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'getFilters', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'isFiltersStateClean', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'hasFilters', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return $this->valueHolderd076e->hasFilters();
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

        $instance->initializer542d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd076e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd076e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd076e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__get', ['name' => $name], $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        if (isset(self::$publicPropertiescc265[$name])) {
            return $this->valueHolderd076e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd076e;

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

        $targetObject = $this->valueHolderd076e;
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
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd076e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd076e;
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
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__isset', array('name' => $name), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd076e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd076e;
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
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__unset', array('name' => $name), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd076e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd076e;
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
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__clone', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        $this->valueHolderd076e = clone $this->valueHolderd076e;
    }

    public function __sleep()
    {
        $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, '__sleep', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;

        return array('valueHolderd076e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer542d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer542d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer542d0 && ($this->initializer542d0->__invoke($valueHolderd076e, $this, 'initializeProxy', array(), $this->initializer542d0) || 1) && $this->valueHolderd076e = $valueHolderd076e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd076e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd076e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
