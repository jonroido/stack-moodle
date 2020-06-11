<?php

class __Mustache_31b5fa10e1ec434de98b9298dac2f4b0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<footer id="page-footer">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row gtr-200 gtr-uniform">
';
        $buffer .= $indent . '            <section class="col-12 text-center col-12-medium col-12-xsmall footer-info">
';
        $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '                <nav class="nav navbar-nav d-md-none">
';
        // 'output.custom_menu_flat' section
        $value = $context->findDot('output.custom_menu_flat');
        $buffer .= $this->section0fa43486b0fe4c8ce5c87b0889a407fd($context, $indent, $value);
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <section class="col-12 footer-info">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('defaultfrontpagefooter'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <section class="col-12 text-center col-12-medium col-12-xsmall footer-info smalltext">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="copyleft"><span>&copy;</span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAbe7de8ec77eee68589d4abc1534bc9c($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '</footer>';

        return $buffer;
    }

    private function section0fa43486b0fe4c8ce5c87b0889a407fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="list-unstyled pt-3">
                            {{> theme_boost/custom_menu_footer }}
                        </ul>
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
                
                $buffer .= $indent . '                        <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbe7de8ec77eee68589d4abc1534bc9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'footertitle, theme_trema';
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
                
                $buffer .= 'footertitle, theme_trema';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
