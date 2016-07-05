<?php
/**
 * This file is part of the Peast package
 *
 * (c) Marco Marchiò <marco.mm89@gmail.com>
 *
 * For the full copyright and license information refer to the LICENSE file
 * distributed with this source code
 */
namespace Peast\Syntax\ES6\Node;

class LabeledStatement extends Node implements Statement
{
    protected $label;
    
    protected $body;
    
    public function getLabel()
    {
        return $this->label;
    }
    
    public function setLabel(Identifier $label)
    {
        $this->label = $label;
        return $this;
    }
    
    public function getBody()
    {
        return $this->body;
    }
    
    public function setBody(Statement $body)
    {
        $this->body = $body;
        return $this;
    }
}