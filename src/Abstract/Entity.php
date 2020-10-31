<?php

abstract class Entity
{
    /**
     * @var string
     */
    protected $table;

    /**
     * Create Method
     */
    public function create(array $data)
    {
        $class = get_class($this);
        $class = new $class;
        $table = strtolower($class->getTable());
        $keys = $this->getKeys($data);
        $values = $this->getValues($data);

        $sqlQuery = 'INSERT INTO `'.$table.'`' . ' (' . $keys . ')' . ' VALUES ' .  '(' . $values . ')';
    }

    public function getTable()
    {
        return $this->table;
    }

    private function getKeys(array $data)
    {
        return implode(', ', array_keys($data));
    }

    private function getValues(array $data)
    {
        return implode(', ', array_values($data));
    }
}
