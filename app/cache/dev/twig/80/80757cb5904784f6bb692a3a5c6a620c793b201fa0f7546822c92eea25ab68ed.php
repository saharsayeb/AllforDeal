<?php

/* ServiceBundle:Service:ajout.html.twig */
class __TwigTemplate_aa7296e6ddc6942a435bbe9aa63060fd6682ad53f2dd44756af3a8a9e7c62052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:ajout.html.twig", 1);
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

    // line 2
    public function block_t($context, array $blocks = array())
    {
        // line 3
        echo "    <header class=\"page-header\">
    <h1>Ajouter un service</h1>
    </header>
        <div name=\"Service\" class=\"box-lg\">
<form action=\"\"  method=\"post\" > 
 <div class=\"form-group\">
                    <label>Nom de service</label>
                    <input class=\"form-control\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomService", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Description</label>
                    <input class=\"form-control\" ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "
                </div>
                <div class=\"form-group\">
                    <label>Catégorie</label>
                    <textarea class=\"form-control\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'widget');
        echo "</textarea>
                </div>
                    <div class=\"form-group\"> <label>  Gouvernorat </label><input class=\"navbar-main-search-category-select\" <option> ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "zone", array()), 'widget');
        echo "</option></div>
                    
     <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter Service\" action=";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                    
    </form>";
        // line 25
        echo "        
</div>
  
    ";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  64 => 22,  59 => 20,  54 => 18,  47 => 14,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*     <header class="page-header">*/
/*     <h1>Ajouter un service</h1>*/
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
/*                     <label>Catégorie</label>*/
/*                     <textarea class="form-control" {{ form_widget(Form.type) }}</textarea>*/
/*                 </div>*/
/*                     <div class="form-group"> <label>  Gouvernorat </label><input class="navbar-main-search-category-select" <option> {{ form_widget(Form.zone) }}</option></div>*/
/*                     */
/*      <input class="btn btn-primary" type="submit" value="Ajouter Service" action={{ form_rest(Form) }}*/
/*                     */
/*     </form>{# empty Twig template #}*/
/*         */
/* </div>*/
/*   */
/*     {% endblock  %}*/
/* {#*/
/* <table>  */
/*         <tr> <td>Nom de Service </td> <td> <input class="form-control"{{ form_widget(Form.nomService)}}  </td> </tr>*/
/*         <tr> <td> Description </td> <td> <input class="form-control" {{ form_widget(Form.description) }}</td> </tr>*/
/*         <tr> <td> Type </td> <td> <input class="form-control" {{ form_widget(Form.type) }}</td> </tr>*/
/*         <tr> <td> Zone </td> <td> {{ form_widget(Form.zone) }}</td> </tr>*/
/*                     */
/* */
/* */
/*         <tr> <td><input class="btn btn-primary" type=submit" value="Ajouter Produit" action={{ form_rest(Form) }} </td> </tr><br>*/
/*     </table>#}*/
