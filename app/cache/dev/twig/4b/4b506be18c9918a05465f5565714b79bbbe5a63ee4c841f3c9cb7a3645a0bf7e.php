<?php

/* SonataNewsBundle:Post:comment_form.html.twig */
class __TwigTemplate_9d1f45d530f676d7555b9e4f1a78977ea9c1016b0b1d608f822cc89c26d949fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_leave_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_add_comment", array("id" => (isset($context["post_id"]) ? $context["post_id"] : $this->getContext($context, "post_id")))), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\" role=\"form\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"form-actions\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-pencil\"></i>&nbsp;";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_add_comment", array(), "SonataNewsBundle"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  34 => 20,  30 => 19,  24 => 16,  19 => 13,);
    }
}
/* {#*/
/* */
/* /**/
/*  * This file is part of the Sonata package.*/
/*  **/
/*  * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/*  **/
/*  * For the full copyright and license information, please view the LICENSE*/
/*  * file that was distributed with this source code.*/
/*  *//* */
/* */
/* #}*/
/* */
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*         <h3>{{'title_leave_comment'|trans({}, 'SonataNewsBundle') }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*         <form action="{{ url('sonata_news_add_comment', {'id': post_id}) }}" method="POST" class="form-horizontal" role="form">*/
/*             {{ form_widget(form) }}*/
/*             <div class="form-actions">*/
/*                 <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;{{'btn_add_comment'|trans({}, 'SonataNewsBundle') }}</button>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </div>*/
