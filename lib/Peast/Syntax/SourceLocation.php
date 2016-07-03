<?php
/**
 * This file is part of the REBuilder package
 *
 * (c) Marco Marchiò <marco.mm89@gmail.com>
 *
 * For the full copyright and license information refer to the LICENSE file
 * distributed with this source code
 */
namespace Peast\Syntax;

class SourceLocation
{
    protected $start;
    
    protected $end;
    
    public function getStart()
    {
        return $this->start;
    }
    
    public function setStart(Position $position)
    {
        $this->start = $position;
        return $this;
    }
    
    public function getEnd()
    {
        return $this->end;
    }
    
    public function setEnd(Position $position)
    {
        $this->end = $position;
        return $this;
    }
}