<?php

namespace ContainerIsZ3YjW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10b58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85bd9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb35cb = [
        
    ];

    public function getConnection()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getConnection', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getMetadataFactory', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getExpressionBuilder', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'beginTransaction', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getCache', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'transactional', array('func' => $func), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'commit', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->commit();
    }

    public function rollback()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'rollback', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getClassMetadata', array('className' => $className), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'createQuery', array('dql' => $dql), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'createNamedQuery', array('name' => $name), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'createQueryBuilder', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'flush', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'clear', array('entityName' => $entityName), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->clear($entityName);
    }

    public function close()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'close', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->close();
    }

    public function persist($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'persist', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'remove', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'refresh', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'detach', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'merge', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'contains', array('entity' => $entity), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getEventManager', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getConfiguration', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'isOpen', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getUnitOfWork', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getProxyFactory', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'initializeObject', array('obj' => $obj), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'getFilters', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'isFiltersStateClean', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'hasFilters', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return $this->valueHolder10b58->hasFilters();
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

        $instance->initializer85bd9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder10b58) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10b58 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10b58->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__get', ['name' => $name], $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        if (isset(self::$publicPropertiesb35cb[$name])) {
            return $this->valueHolder10b58->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10b58;

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

        $targetObject = $this->valueHolder10b58;
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
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10b58;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10b58;
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
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__isset', array('name' => $name), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10b58;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10b58;
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
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__unset', array('name' => $name), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10b58;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10b58;
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
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__clone', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        $this->valueHolder10b58 = clone $this->valueHolder10b58;
    }

    public function __sleep()
    {
        $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, '__sleep', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;

        return array('valueHolder10b58');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85bd9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85bd9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85bd9 && ($this->initializer85bd9->__invoke($valueHolder10b58, $this, 'initializeProxy', array(), $this->initializer85bd9) || 1) && $this->valueHolder10b58 = $valueHolder10b58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10b58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10b58;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
