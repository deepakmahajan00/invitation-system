<?php

namespace ContainerGjOvx8H;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6e396 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbda59 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd552 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getConnection', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getMetadataFactory', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getExpressionBuilder', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'beginTransaction', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getCache', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'transactional', array('func' => $func), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'commit', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->commit();
    }

    public function rollback()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'rollback', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getClassMetadata', array('className' => $className), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'createQuery', array('dql' => $dql), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'createNamedQuery', array('name' => $name), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'createQueryBuilder', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'flush', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'clear', array('entityName' => $entityName), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->clear($entityName);
    }

    public function close()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'close', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->close();
    }

    public function persist($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'persist', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'remove', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'refresh', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'detach', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'merge', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'contains', array('entity' => $entity), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getEventManager', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getConfiguration', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'isOpen', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getUnitOfWork', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getProxyFactory', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'initializeObject', array('obj' => $obj), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'getFilters', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'isFiltersStateClean', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'hasFilters', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return $this->valueHolder6e396->hasFilters();
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

        $instance->initializerbda59 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6e396) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6e396 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6e396->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__get', ['name' => $name], $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        if (isset(self::$publicPropertiescd552[$name])) {
            return $this->valueHolder6e396->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e396;

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

        $targetObject = $this->valueHolder6e396;
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
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e396;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6e396;
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
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__isset', array('name' => $name), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e396;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6e396;
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
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__unset', array('name' => $name), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6e396;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6e396;
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
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__clone', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        $this->valueHolder6e396 = clone $this->valueHolder6e396;
    }

    public function __sleep()
    {
        $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, '__sleep', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;

        return array('valueHolder6e396');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbda59 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbda59;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbda59 && ($this->initializerbda59->__invoke($valueHolder6e396, $this, 'initializeProxy', array(), $this->initializerbda59) || 1) && $this->valueHolder6e396 = $valueHolder6e396;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6e396;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6e396;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
