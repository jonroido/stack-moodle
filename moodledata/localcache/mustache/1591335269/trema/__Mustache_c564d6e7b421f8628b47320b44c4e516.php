<?php

class __Mustache_c564d6e7b421f8628b47320b44c4e516 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'settingsmenu' section
        $value = $context->find('settingsmenu');
        $buffer .= $this->section9b2687a84bde79e3d44bc40d3ffccbfe($context, $indent, $value);

        return $buffer;
    }

    private function section9b2687a84bde79e3d44bc40d3ffccbfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="frontpage-settings-menu" class="border border-light rounded p-1">
	<div class="context-header-settings-menu">
	    {{{settingsmenu}}}
	</div>
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="frontpage-settings-menu" class="border border-light rounded p-1">
';
                $buffer .= $indent . '	<div class="context-header-settings-menu">
';
                $buffer .= $indent . '	    ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '	</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
