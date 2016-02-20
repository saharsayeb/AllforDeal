<?php

/* ProduitBundle:produit:afficheP.html.twig */
class __TwigTemplate_37f65d91075e581495e9ef06dce4fa39931cd5bf28030c6f78176a7499083bf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProduitBundle::layout2.html.twig", "ProduitBundle:produit:afficheP.html.twig", 1);
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
        echo " <header class=\"page-header\"><h1>Les produits disponibles</h1>
  </header>
    <div name=\"Service\" class=\"box-lg\">
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Produit"]) ? $context["Produit"] : $this->getContext($context, "Produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            echo "    <fieldset >
        <legend >Categorie :";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "categorie", array()), "html", null, true);
            echo "</legend>
        <label><b>titre :</b></label><label name=\"nom\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titre", array()), "html", null, true);
            echo "</label><br>
        <label><b>description :</b></label><label name=\"decription\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</label><br>
        <label><b>prix :</b></label><label name=\"prix\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</label><br>
        <label><b>gouvernorat:</b></label><label name=\"gouvernorat\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
         <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_supprimerP", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Supprimer </a>
       <a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_modifierP", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\"> Modifier </a>

    </fieldset>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "ProduitBundle:produit:afficheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'ProduitBundle::layout2.html.twig' %}*/
/* {% block t %}*/
/*  <header class="page-header"><h1>Les produits disponibles</h1>*/
/*   </header>*/
/*     <div name="Service" class="box-lg">*/
/* {% for p in Produit %}*/
/*     <fieldset >*/
/*         <legend >Categorie :{{p.categorie}}</legend>*/
/*         <label><b>titre :</b></label><label name="nom">{{p.titre}}</label><br>*/
/*         <label><b>description :</b></label><label name="decription">{{p.description}}</label><br>*/
/*         <label><b>prix :</b></label><label name="prix">{{p.prix}}</label><br>*/
/*         <label><b>gouvernorat:</b></label><label name="gouvernorat">{{p.zone.nom}}</label><br>*/
/*          <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_supprimerP',{'id':p.id}) }}"> Supprimer </a>*/
/*        <a class="btn btn-lg btn-ghost btn-black" href="{{ path('produit_modifierP',{'id':p.id}) }}"> Modifier </a>*/
/* */
/*     </fieldset>*/
/* */
/* {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
