<?php

/* SonataAdminBundle:CRUD:show_choice.html.twig */
class __TwigTemplate_6f81dfe662d67fb4fa418591a25c0467913a2abd2368973188d71072dedd4938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_choice.html.twig", 11);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "multiple", array()) == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ( !twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                            // line 28
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $context["val"]);
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 38
                echo "
        ";
            } elseif (twig_in_filter(            // line 39
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array())))) {
                // line 40
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 49
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  140 => 51,  134 => 49,  132 => 48,  129 => 47,  126 => 46,  123 => 45,  120 => 44,  117 => 43,  114 => 42,  111 => 41,  108 => 40,  106 => 39,  103 => 38,  101 => 37,  98 => 36,  92 => 35,  89 => 34,  86 => 33,  83 => 32,  80 => 31,  77 => 30,  74 => 29,  71 => 28,  68 => 27,  66 => 26,  63 => 25,  60 => 24,  57 => 23,  54 => 22,  50 => 21,  47 => 20,  44 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  31 => 14,  28 => 13,  11 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/* {% spaceless %}*/
/*     {% if field_description.options.choices  is defined %}*/
/*         {% if field_description.options.multiple is defined and field_description.options.multiple==true and value is iterable %}*/
/* */
/*             {% set result = '' %}*/
/*             {% set delimiter = field_description.options.delimiter|default(', ') %}*/
/* */
/*             {% for val in value %}*/
/*                 {% if result is not empty %}*/
/*                     {% set result = result ~ delimiter %}*/
/*                 {% endif %}*/
/* */
/*                 {% if field_description.options.choices[val] is defined %}*/
/*                     {% if field_description.options.catalogue is not defined %}*/
/*                         {% set result = result ~ field_description.options.choices[val] %}*/
/*                     {% else %}*/
/*                         {% set result = result ~ field_description.options.choices[val]|trans({}, field_description.options.catalogue) %}*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {% set result = result ~ val %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             {% set value = result %}*/
/* */
/*         {% elseif value in field_description.options.choices|keys %}*/
/*             {% if field_description.options.catalogue is not defined %}*/
/*                 {% set value = field_description.options.choices[value] %}*/
/*             {% else %}*/
/*                 {% set value = field_description.options.choices[value]|trans({}, field_description.options.catalogue) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if field_description.options.safe %}*/
/*         {{ value|raw }}*/
/*     {% else %}*/
/*         {{ value }}*/
/*     {% endif %}*/
/* */
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
