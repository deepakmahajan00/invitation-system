<?php

namespace ContainerAbd3QxE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9ca2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf473c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties71e9b = [
        
    ];

    public function getConnection()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getConnection', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getMetadataFactory', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getExpressionBuilder', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'beginTransaction', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getCache', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'transactional', array('func' => $func), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'commit', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->commit();
    }

    public function rollback()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'rollback', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getClassMetadata', array('className' => $className), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'createQuery', array('dql' => $dql), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'createNamedQuery', array('name' => $name), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'createQueryBuilder', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'flush', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'clear', array('entityName' => $entityName), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->clear($entityName);
    }

    public function close()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'close', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->close();
    }

    public function persist($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'persist', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'remove', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'refresh', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'detach', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'merge', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'contains', array('entity' => $entity), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getEventManager', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getConfiguration', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'isOpen', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getUnitOfWork', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getProxyFactory', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'initializeObject', array('obj' => $obj), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'getFilters', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'isFiltersStateClean', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'hasFilters', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return $this->valueHolderf9ca2->hasFilters();
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

        $instance->initializerf473c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf9ca2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9ca2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9ca2->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__get', ['name' => $name], $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        if (isset(self::$publicProperties71e9b[$name])) {
            return $this->valueHolderf9ca2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9ca2;

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

        $targetObject = $this->valueHolderf9ca2;
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
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9ca2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9ca2;
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
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__isset', array('name' => $name), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9ca2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9ca2;
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
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__unset', array('name' => $name), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9ca2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9ca2;
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
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__clone', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        $this->valueHolderf9ca2 = clone $this->valueHolderf9ca2;
    }

    public function __sleep()
    {
        $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, '__sleep', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;

        return array('valueHolderf9ca2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf473c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf473c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf473c && ($this->initializerf473c->__invoke($valueHolderf9ca2, $this, 'initializeProxy', array(), $this->initializerf473c) || 1) && $this->valueHolderf9ca2 = $valueHolderf9ca2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9ca2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9ca2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
