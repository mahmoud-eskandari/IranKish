<?php

namespace eskandari\IranKish\Verify;

class ArrayOftransactionModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var transactionModel[] $transactionModel
     */
    protected $transactionModel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return transactionModel[]
     */
    public function getTransactionModel()
    {
      return $this->transactionModel;
    }

    /**
     * @param transactionModel[] $transactionModel
     * @return \eskandari\IranKish\Verify\ArrayOftransactionModel
     */
    public function setTransactionModel(array $transactionModel = null)
    {
      $this->transactionModel = $transactionModel;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->transactionModel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return transactionModel
     */
    public function offsetGet($offset)
    {
      return $this->transactionModel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param transactionModel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->transactionModel[] = $value;
      } else {
        $this->transactionModel[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->transactionModel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return transactionModel Return the current element
     */
    public function current()
    {
      return current($this->transactionModel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->transactionModel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->transactionModel);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->transactionModel);
    }

    /**
     * Countable implementation
     *
     * @return transactionModel Return count of elements
     */
    public function count()
    {
      return count($this->transactionModel);
    }

}
