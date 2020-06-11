<?php

class __Mustache_c8c21bc0f21b66454a04616324d85052 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container box large bordered">
';
        $buffer .= $indent . '    <header class="major special"><h2>Elements</h2>
';
        $buffer .= $indent . '        <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p></header>
';
        $buffer .= $indent . '    <section><h3>Text</h3>
';
        $buffer .= $indent . '        <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is
';
        $buffer .= $indent . '            <em>emphasized</em>. This is <sup>superscript</sup> text and this is <sub>subscript</sub> text. This is <u>underlined</u>
';
        $buffer .= $indent . '            and this is code: <code>for (;;) { ... }</code>. Finally, <a style="cursor: pointer;" href="#">this is a
';
        $buffer .= $indent . '                link</a>.
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '        <hr>
';
        $buffer .= $indent . '        <h2>Heading Level 2</h2>
';
        $buffer .= $indent . '        <h3>Heading Level 3</h3>
';
        $buffer .= $indent . '        <h4>Heading Level 4</h4>
';
        $buffer .= $indent . '        <h5>Heading Level 5</h5>
';
        $buffer .= $indent . '        <h6>Heading Level 6</h6>
';
        $buffer .= $indent . '        <hr>
';
        $buffer .= $indent . '        <h4>Blockquote</h4>
';
        $buffer .= $indent . '        <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod.
';
        $buffer .= $indent . '            Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac
';
        $buffer .= $indent . '            adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam
';
        $buffer .= $indent . '            adipiscing eu felis.
';
        $buffer .= $indent . '        </blockquote>
';
        $buffer .= $indent . '        <h4>Preformatted</h4>
';
        $buffer .= $indent . '        <pre><code>i = 0;
';
        $buffer .= $indent . 'while (!deck.isInOrder()) {
';
        $buffer .= $indent . 'print \'Iteration \' + i;
';
        $buffer .= $indent . 'deck.shuffle();
';
        $buffer .= $indent . 'i++;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'print \'It took \' + i + \' iterations to sort the deck.\';</code></pre>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '    <section><h3>Lists</h3>
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-6 col-12-xsmall"><h4>Unordered</h4>
';
        $buffer .= $indent . '                <ul>
';
        $buffer .= $indent . '                    <li>Dolor pulvinar etiam magna etiam.</li>
';
        $buffer .= $indent . '                    <li>Sagittis adipiscing lorem eleifend.</li>
';
        $buffer .= $indent . '                    <li>Felis enim feugiat dolore viverra.</li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '                <h4>Alternate</h4>
';
        $buffer .= $indent . '                <ul class="alt">
';
        $buffer .= $indent . '                    <li>Dolor pulvinar etiam magna etiam.</li>
';
        $buffer .= $indent . '                    <li>Sagittis adipiscing lorem eleifend.</li>
';
        $buffer .= $indent . '                    <li>Felis enim feugiat dolore viverra.</li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-6 col-12-xsmall"><h4>Ordered</h4>
';
        $buffer .= $indent . '                <ol>
';
        $buffer .= $indent . '                    <li>Dolor pulvinar etiam magna etiam.</li>
';
        $buffer .= $indent . '                    <li>Etiam vel felis at lorem sed viverra.</li>
';
        $buffer .= $indent . '                    <li>Felis enim feugiat dolore viverra.</li>
';
        $buffer .= $indent . '                    <li>Dolor pulvinar etiam magna etiam.</li>
';
        $buffer .= $indent . '                    <li>Etiam vel felis at lorem sed viverra.</li>
';
        $buffer .= $indent . '                    <li>Felis enim feugiat dolore viverra.</li>
';
        $buffer .= $indent . '                </ol>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <h4>Icons</h4>
';
        $buffer .= $indent . '        <ul class="d-inline list-unstyled">
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-twitter" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-facebook" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-instagram" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-github" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-dribbble" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '            <li class="d-inline m-r-1"><a class="fa fa-2x fa-tumblr" style="cursor: pointer;"></a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <h4>Actions</h4>
';
        $buffer .= $indent . '        <ul class="actions">
';
        $buffer .= $indent . '            <li><a class="btn btn-primary" style="cursor: pointer;">Default</a></li>
';
        $buffer .= $indent . '            <li><a class="btn" style="cursor: pointer;">Default</a></li>
';
        $buffer .= $indent . '            <li><a class="btn btn-secondary" style="cursor: pointer;">Default</a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <ul class="actions small">
';
        $buffer .= $indent . '            <li><a class="btn btn-primary small" style="cursor: pointer;">Small</a></li>
';
        $buffer .= $indent . '            <li><a class="btn small" style="cursor: pointer;">Small</a></li>
';
        $buffer .= $indent . '            <li><a class="btn btn-secondary small" style="cursor: pointer;">Small</a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <h3>Buttons</h3>
';
        $buffer .= $indent . '        <ul class="actions">
';
        $buffer .= $indent . '            <li><a class="btn btn-primary large" style="cursor: pointer;">Large</a></li>
';
        $buffer .= $indent . '            <li><a class="btn" style="cursor: pointer;">Default</a></li>
';
        $buffer .= $indent . '            <li><a class="btn btn-secondary small" style="cursor: pointer;">Small</a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="col-6 col-12-xsmall">
';
        $buffer .= $indent . '                <ul class="actions fit small">
';
        $buffer .= $indent . '                    <li><a class="btn fit small" style="cursor: pointer;">Fit + Small</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-secondary fit small" style="cursor: pointer;">Fit + Small</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <ul class="actions">
';
        $buffer .= $indent . '            <li><a class="btn btn-primary fa fa-download" style="cursor: pointer;">Icon</a></li>
';
        $buffer .= $indent . '            <li><a class="btn fa fa-download" style="cursor: pointer;">Icon</a></li>
';
        $buffer .= $indent . '            <li><a class="btn btn-secondary fa fa-download" style="cursor: pointer;">Icon</a></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <ul class="actions">
';
        $buffer .= $indent . '            <li><span class="btn primary disabled">Primary</span></li>
';
        $buffer .= $indent . '            <li><span class="btn disabled">Default</span></li>
';
        $buffer .= $indent . '            <li><span class="btn btn-secondary disabled">Alternate</span></li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '    <section><h3>Table</h3><h4>Default</h4>
';
        $buffer .= $indent . '        <div class="table-wrapper">
';
        $buffer .= $indent . '            <table class="table">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th>Name</th>
';
        $buffer .= $indent . '                    <th>Description</th>
';
        $buffer .= $indent . '                    <th>Price</th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 1</td>
';
        $buffer .= $indent . '                    <td>Ante turpis integer aliquet porttitor.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 2</td>
';
        $buffer .= $indent . '                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
';
        $buffer .= $indent . '                    <td>19.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 3</td>
';
        $buffer .= $indent . '                    <td> Morbi faucibus arcu accumsan lorem.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 4</td>
';
        $buffer .= $indent . '                    <td>Vitae integer tempus condimentum.</td>
';
        $buffer .= $indent . '                    <td>19.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 5</td>
';
        $buffer .= $indent . '                    <td>Ante turpis integer aliquet porttitor.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '                <tfoot>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td colspan="2">Total</td>
';
        $buffer .= $indent . '                    <td>100.00</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </tfoot>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <h4>Alternate</h4>
';
        $buffer .= $indent . '        <div class="table-wrapper table">
';
        $buffer .= $indent . '            <table class="table table-bordered table-hover table-striped">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th>Name</th>
';
        $buffer .= $indent . '                    <th>Description</th>
';
        $buffer .= $indent . '                    <th>Price</th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 1</td>
';
        $buffer .= $indent . '                    <td>Ante turpis integer aliquet porttitor.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 2</td>
';
        $buffer .= $indent . '                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
';
        $buffer .= $indent . '                    <td>19.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 3</td>
';
        $buffer .= $indent . '                    <td>Morbi faucibus arcu accumsan lorem.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 4</td>
';
        $buffer .= $indent . '                    <td>Vitae integer tempus condimentum.</td>
';
        $buffer .= $indent . '                    <td>19.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td>Item 5</td>
';
        $buffer .= $indent . '                    <td>Ante turpis integer aliquet porttitor.</td>
';
        $buffer .= $indent . '                    <td>29.99</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '                <tfoot>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <td colspan="2">Total</td>
';
        $buffer .= $indent . '                    <td>100.00</td>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '                </tfoot>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '    <section><h3>Form</h3>
';
        $buffer .= $indent . '        <form method="post" action="#" class="mform">
';
        $buffer .= $indent . '            <fieldset class="clearfix collapsible" id="id_moodle">
';
        $buffer .= $indent . '                <div class="fcontainer clearfix">
';
        $buffer .= $indent . '                    <div id="fitem_id_username" class="form-group row  fitem   ">
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '                        <span class="float-sm-right text-nowrap">
';
        $buffer .= $indent . '                            <a class="btn btn-link p-0" role="button" data-container="body" data-toggle="popover"
';
        $buffer .= $indent . '                               data-placement="right"
';
        $buffer .= $indent . '                               data-content="<div class=&quot;no-overflow&quot;><p>Vis ac commodo adipiscing arcu aliquet...</p></div>"
';
        $buffer .= $indent . '                               data-html="true"
';
        $buffer .= $indent . '                               tabindex="0" data-trigger="focus">
';
        $buffer .= $indent . '                              <i class="icon fa fa-question-circle text-info fa-fw " aria-hidden="true"></i>
';
        $buffer .= $indent . '                            </a>
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                            <label class="col-form-label d-inline " for="id_username">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-9 form-inline felement" data-fieldtype="text">
';
        $buffer .= $indent . '                            <input type="text" class="form-control " name="username" id="id_username" value="admin"
';
        $buffer .= $indent . '                                   size="20">
';
        $buffer .= $indent . '                            <div class="form-control-feedback invalid-feedback" id="id_error_username"></div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div id="fitem_id_newpassword" class="form-group row  fitem   ">
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '                            <label class="col-form-label d-inline " for="id_newpassword">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2662930185a94fc55b6e3cd425b28f7e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-9 form-inline felement" data-fieldtype="passwordunmask">
';
        $buffer .= $indent . '                            <span data-passwordunmask="wrapper" data-passwordunmaskid="id_newpassword">
';
        $buffer .= $indent . '                                <span data-passwordunmask="editor">
';
        $buffer .= $indent . '                                    <input type="text" name="newpassword" id="id_newpassword" value=""
';
        $buffer .= $indent . '                                           class="form-control d-inline-block" data-size="20">
';
        $buffer .= $indent . '                                </span>
';
        $buffer .= $indent . '                            </span>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="form-group row  fitem">
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div id="fitem_id_maildisplay" class="form-group row  fitem   ">
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '                            <label class="col-form-label d-inline " for="id_maildisplay">
';
        $buffer .= $indent . '                                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDb9dfd67d2a1086ebf8b9b9203a6d589($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="col-md-9 form-inline felement" data-fieldtype="select">
';
        $buffer .= $indent . '                            <select class="custom-select" name="maildisplay" id="id_maildisplay">
';
        $buffer .= $indent . '                                <option value="0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBf08b52fc743723e125d8fe8f3516936($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                                <option value="1" selected="">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section34d71f23b80646b413bad3b0e73e1032($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                                <option value="2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCb3d1da92ab36e67626f06c7f83613e9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                </option>
';
        $buffer .= $indent . '                            </select>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </fieldset>
';
        $buffer .= $indent . '        </form>
';
        $buffer .= $indent . '    </section>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
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
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2662930185a94fc55b6e3cd425b28f7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newpassword';
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
                
                $buffer .= 'newpassword';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb9dfd67d2a1086ebf8b9b9203a6d589(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emaildisplay';
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
                
                $buffer .= 'emaildisplay';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf08b52fc743723e125d8fe8f3516936(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emaildisplayno';
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
                
                $buffer .= 'emaildisplayno';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34d71f23b80646b413bad3b0e73e1032(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emaildisplayyes';
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
                
                $buffer .= 'emaildisplayyes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb3d1da92ab36e67626f06c7f83613e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'emaildisplaycourse';
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
                
                $buffer .= 'emaildisplaycourse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
