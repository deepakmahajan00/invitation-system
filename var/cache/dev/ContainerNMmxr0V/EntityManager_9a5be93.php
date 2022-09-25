<?php

namespace ContainerNMmxr0V;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder97f08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3b14a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese4f9b = [
        
    ];

    public function getConnection()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getConnection', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getMetadataFactory', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getExpressionBuilder', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'beginTransaction', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getCache', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'transactional', array('func' => $func), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'commit', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->commit();
    }

    public function rollback()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'rollback', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getClassMetadata', array('className' => $className), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'createQuery', array('dql' => $dql), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'createNamedQuery', array('name' => $name), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'createQueryBuilder', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'flush', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'clear', array('entityName' => $entityName), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->clear($entityName);
    }

    public function close()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'close', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->close();
    }

    public function persist($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'persist', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'remove', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'refresh', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'detach', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'merge', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'contains', array('entity' => $entity), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getEventManager', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getConfiguration', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'isOpen', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getUnitOfWork', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getProxyFactory', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'initializeObject', array('obj' => $obj), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'getFilters', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'isFiltersStateClean', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'hasFilters', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return $this->valueHolder97f08->hasFilters();
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

        $instance->initializer3b14a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder97f08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97f08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder97f08->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__get', ['name' => $name], $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        if (isset(self::$publicPropertiese4f9b[$name])) {
            return $this->valueHolder97f08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97f08;

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

        $targetObject = $this->valueHolder97f08;
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
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97f08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder97f08;
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
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__isset', array('name' => $name), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97f08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder97f08;
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
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__unset', array('name' => $name), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97f08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder97f08;
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
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__clone', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        $this->valueHolder97f08 = clone $this->valueHolder97f08;
    }

    public function __sleep()
    {
        $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, '__sleep', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;

        return array('valueHolder97f08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3b14a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3b14a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3b14a && ($this->initializer3b14a->__invoke($valueHolder97f08, $this, 'initializeProxy', array(), $this->initializer3b14a) || 1) && $this->valueHolder97f08 = $valueHolder97f08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97f08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97f08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
