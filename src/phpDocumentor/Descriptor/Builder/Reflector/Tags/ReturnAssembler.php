<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @copyright 2010-2014 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Builder\Reflector\Tags;

use phpDocumentor\Descriptor\Builder\Reflector\AssemblerAbstract;
use phpDocumentor\Descriptor\Tag\ReturnDescriptor;
use phpDocumentor\Reflection\DocBlock\Tag\ReturnTag;
use phpDocumentor\Reflection\DocBlock\Type\Collection;

class ReturnAssembler extends AssemblerAbstract
{
    /**
     * Creates a new Descriptor from the given Reflector.
     *
     * @param ReturnTag $data
     *
     * @return ReturnDescriptor
     */
    public function create($data)
    {
        $descriptor = new ReturnDescriptor($data->getName());
        $descriptor->setDescription($data->getDescription());
        $types = $this->builder->buildDescriptor(new Collection($data->getTypes()));
        $descriptor->setTypes($types);

        return $descriptor;
    }
}
