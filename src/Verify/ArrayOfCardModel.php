<?php

namespace eskandari\IranKish\Verify;

class ArrayOfCardModel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CardModel[] $CardModel
     */
    protected $CardModel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CardModel[]
     */
    public function getCardModel()
    {
      return $this->CardModel;
    }

    /**
     * @param CardModel[] $CardModel
     * @return \eskandari\IranKish\Verify\ArrayOfCardModel
     */
    public function setCardModel(array $CardModel = null)
    {
      $this->CardModel = $CardModel;
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
      return isset($this->CardModel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CardModel
     */
    public function offsetGet($offset)
    {
      return $this->CardModel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CardModel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CardModel[] = $value;
      } else {
        $this->CardModel[$offset] = $value;
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
      unset($this->CardModel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CardModel Return the current element
     */
    public function current()
    {
      return current($this->CardModel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CardModel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CardModel);
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
      reset($this->CardModel);
    }

    /**
     * Countable implementation
     *
     * @return CardModel Return count of elements
     */
    public function count()
    {
      return count($this->CardModel);
    }

}
