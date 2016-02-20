<?php

/* ProduitBundle:produit:ajoutP.html.twig */
class __TwigTemplate_2a9ee11d6d50635bbb91bcef85c6b6dead59cd76e154e29ab81afc1b3150c0e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:ajoutP.html.twig", 1);
        $this->blocks = array(
            't' => array($this, 'block_t'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProduitBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo "    
    <header class=\"page-header\">
    <h1>Ajouter un produit</h1>
    </header>
        <div name=\"Service\" class=\"box-lg\">
<form action=\"\"  method=\"post\" > 
 <div class=\"form-group\">
                    <label>Catégorie</label>
                    <input class=\"form-control\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "categorie", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>titre</label>
                    <input class=\"form-control\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>description</label>
                    <!--<textarea class=\"form-control\"";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</textarea>-->
              
                    <input ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_text_formatter')->transform($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget'), "markdown"), "html", null, true);
        echo "/>
                </div>
                 <div class=\"form-group\">
                    <label>prix</label>
                    <input class=\"form-control\" ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo "
                </div>
                    <div class=\"form-group\"> <label>  Gouvernerat </label><input class=\"navbar-main-search-category-select\" <option> ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "zone", array()), 'widget');
        echo "</option></div>
                    
     <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter Produit\" action=";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                    
    </form>";
        // line 32
        echo "        
</div>
        
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:ajoutP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  77 => 29,  72 => 27,  67 => 25,  60 => 21,  55 => 19,  48 => 15,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*     */
/*     <header class="page-header">*/
/*     <h1>Ajouter un produit</h1>*/
/*     </header>*/
/*         <div name="Service" class="box-lg">*/
/* <form action=""  method="post" > */
/*  <div class="form-group">*/
/*                     <label>Catégorie</label>*/
/*                     <input class="form-control" {{ form_widget(Form.categorie)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>titre</label>*/
/*                     <input class="form-control" {{ form_widget(Form.titre)}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label>description</label>*/
/*                     <!--<textarea class="form-control"{{ form_widget(Form.description) }}</textarea>-->*/
/*               */
/*                     <input {{ form_widget(Form.description)  | format_text('markdown') }}/>*/
/*                 </div>*/
/*                  <div class="form-group">*/
/*                     <label>prix</label>*/
/*                     <input class="form-control" {{ form_widget(Form.prix) }}*/
/*                 </div>*/
/*                     <div class="form-group"> <label>  Gouvernerat </label><input class="navbar-main-search-category-select" <option> {{ form_widget(Form.zone) }}</option></div>*/
/*                     */
/*      <input class="btn btn-primary" type="submit" value="Ajouter Produit" action={{ form_rest(Form) }}*/
/*                     */
/*     </form>{# empty Twig template #}*/
/*         */
/* </div>*/
/*         */
/* {% endblock %}*/
/* */
/* */
