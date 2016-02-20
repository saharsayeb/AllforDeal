<?php

/* ServiceBundle:Service:modifier.html.twig */
class __TwigTemplate_3406591a77b7a9d4fb653baef86d71c53ff54068bc2abdbbb421c0051bb44846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:modifier.html.twig", 2);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ServiceBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_t($context, array $blocks = array())
    {
        // line 4
        echo "<header class=\"page-header\">
    <h1>Modifier un service</h1>
    </header>
        <div name=\"Service\" class=\"box-lg\">
<form action=\"\"  method=\"post\" > 
 <div class=\"form-group\">
                    <label>Nom de service</label>
                    <input class=\"form-control\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomService", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Description</label>
                    <input class=\"form-control\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>type</label>
                    <input class=\"form-control\" ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'widget');
        echo "
                </div>
                    <div class=\"form-group\"> <label>  Zone </label><input class=\"navbar-main-search-category-select\" <option> ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "zone", array()), 'widget');
        echo "</option></div>
                    
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Modidier\" action=";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo " <br>
                    
    </form>";
        // line 26
        echo "        
</div>
    ";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  64 => 23,  59 => 21,  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/* <header class="page-header">*/
/*     <h1>Modifier un service</h1>*/
/*     </header>*/
/*         <div name="Service" class="box-lg">*/
/* <form action=""  method="post" > */
/*  <div class="form-group">*/
/*                     <label>Nom de service</label>*/
/*                     <input class="form-control" {{ form_widget(Form.nomService)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>Description</label>*/
/*                     <input class="form-control" {{ form_widget(Form.description)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>type</label>*/
/*                     <input class="form-control" {{ form_widget(Form.type) }}*/
/*                 </div>*/
/*                     <div class="form-group"> <label>  Zone </label><input class="navbar-main-search-category-select" <option> {{ form_widget(Form.zone) }}</option></div>*/
/*                     */
/*                     <input class="btn btn-primary" type="submit" value="Modidier" action={{ form_rest(Form) }} <br>*/
/*                     */
/*     </form>{# empty Twig template #}*/
/*         */
/* </div>*/
/*     {% endblock  %}*/
