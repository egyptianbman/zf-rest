<?php
/**
 * @link      https://github.com/weierophinney/PhlyRestfully for the canonical source repository
 * @copyright Copyright (c) 2013 Matthew Weier O'Phinney
 * @license   http://opensource.org/licenses/BSD-2-Clause BSD-2-Clause
 * @package   PhlyRestfully
 */

namespace PhlyRestfully;

use Zend\EventManager\EventManagerAwareInterface;

/**
 * Interface describing operations for a given resource.
 */
interface ResourceInterface extends EventManagerAwareInterface
{
    /**
     * Create a record in the resource
     *
     * @param  array|object $data
     * @return array|object
     */
    public function create($data);

    /**
     * Update (replace) an existing record
     *
     * @param  string|int $id
     * @param  array|object $data
     * @return array|object
     */
    public function update($id, $data);

    /**
     * Partial update of an existing record
     *
     * @param  string|int $id
     * @param  array|object $data
     * @return array|object
     */
    public function patch($id, $data);

    /**
     * Delete an existing record
     *
     * @param  string|int $id
     * @return bool
     */
    public function delete($id);

    /**
     * Fetch an existing record
     *
     * @param  string|int $id
     * @return false|array|object
     */
    public function fetch($id);

    /**
     * Fetch a collection of records
     *
     * @return \Zend\Paginator\Paginator
     */
    public function fetchAll();
}