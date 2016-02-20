<?php

/* SonataNewsBundle:Admin:inner_row_comment.html.twig */
class __TwigTemplate_31993f83c88c75522cf8a327f9834098519a2883d5063ecb053ef7fcd9647c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig", "SonataNewsBundle:Admin:inner_row_comment.html.twig", 12);
        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_row($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "valid")) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 18
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "invalid")) {
            // line 19
            echo "        <span class=\"label label-important\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "moderate")) {
            // line 21
            echo "        <span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 23
            echo "        <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "name", array(), "array"));
        echo " -
    ";
        // line 27
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "url", array(), "array"));
        echo " -
    ";
        // line 28
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "email", array(), "array"));
        echo " <br />

    <small>
        ";
        // line 31
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "message", array(), "array"));
        echo "
    </small>

";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Admin:inner_row_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  73 => 28,  69 => 27,  65 => 26,  62 => 25,  56 => 23,  50 => 21,  48 => 20,  43 => 19,  41 => 18,  36 => 17,  34 => 16,  31 => 15,  28 => 14,  11 => 12,);
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
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig' %}*/
/* */
/* {% block row %}*/
/* */
/*     {% if object.getStatusCode() == 'valid' %}*/
/*         <span class="label label-success">{{ object.getStatusCode() }}</span>*/
/*     {% elseif object.getStatusCode() == 'invalid' %}*/
/*         <span class="label label-important">{{ object.getStatusCode() }}</span>*/
/*     {% elseif object.getStatusCode() == 'moderate' %}*/
/*         <span class="label label-warning">{{ object.getStatusCode() }}</span>*/
/*     {% else %}*/
/*         <span class="label">{{ object.getStatusCode() }}</span>*/
/*     {% endif %}*/
/* */
/*     {{ object|render_list_element(admin.list['name']) }} -*/
/*     {{ object|render_list_element(admin.list['url']) }} -*/
/*     {{ object|render_list_element(admin.list['email']) }} <br />*/
/* */
/*     <small>*/
/*         {{ object|render_list_element(admin.list['message']) }}*/
/*     </small>*/
/* */
/* {% endblock %}*/
