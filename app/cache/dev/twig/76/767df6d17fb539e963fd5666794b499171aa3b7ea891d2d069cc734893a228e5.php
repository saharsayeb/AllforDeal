<?php

/* ProduitBundle:produit:modifierP.html.twig */
class __TwigTemplate_0959060964432f5a7d5295d29d84be5ca21491f2fc88130e2d6bb61a9a54b6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:modifierP.html.twig", 1);
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
        echo "    <h1> modifier votre Produit</h1>
<form action=\"\"  method=\"post\" > 
    <table>  
        <tr> <td> categorie </td> <td> ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "categorie", array()), 'widget');
        echo "</td> </tr>
        <tr> <td> titre </td> <td> ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "</td> </tr>
        <tr> <td> description </td> <td> ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "</td> </tr>
        <tr> <td> prix </td> <td> ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo "</td> </tr>
        <tr> <td> gouvernorat </td> <td> ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "gouvernorat", array()), 'widget');
        echo "</td> </tr>
        <tr> <td> ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "</td>  </td> </tr>
    </table>
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:modifierP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*     <h1> modifier votre Produit</h1>*/
/* <form action=""  method="post" > */
/*     <table>  */
/*         <tr> <td> categorie </td> <td> {{ form_widget(Form.categorie) }}</td> </tr>*/
/*         <tr> <td> titre </td> <td> {{ form_widget(Form.titre) }}</td> </tr>*/
/*         <tr> <td> description </td> <td> {{ form_widget(Form.description) }}</td> </tr>*/
/*         <tr> <td> prix </td> <td> {{ form_widget(Form.prix) }}</td> </tr>*/
/*         <tr> <td> gouvernorat </td> <td> {{ form_widget(Form.gouvernorat) }}</td> </tr>*/
/*         <tr> <td> {{ form_rest(Form) }}</td>  </td> </tr>*/
/*     </table>*/
/*     </form>*/
/*     */
/* {% endblock %}*/
