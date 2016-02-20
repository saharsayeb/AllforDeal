<?php

/* ServiceBundle:Service:offre.html.twig */
class __TwigTemplate_fe17018afb2f4c7b027b2f9249de8d1580843c330e7c7116f1a9870ce8e433a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ServiceBundle::layout2.html.twig", "ServiceBundle:Service:offre.html.twig", 2);
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
        echo "  <header class=\"page-header\"><h1>Les services disponibles</h1>
  </header>
<div name=\"Service\" class=\"box-lg\">
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serv"]) ? $context["serv"] : $this->getContext($context, "serv")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 8
            echo " <fieldset >
     <legend >Categorie:<label name=\"type\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "type", array()), "html", null, true);
            echo "</label><br></legend>
<label><b>Nom :</b></label><label name=\"nom\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomService", array()), "html", null, true);
            echo "</label><br>
<label><b>Date d'ajout:</b></label><label name=\"dateAjout\">";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateAjout", array()), "m/d/Y"), "html", null, true);
            echo "</label><br>
<label><b>Description :</b></label><label name=\"decription\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</label><br>
<label><b>zone:</b></label><label name=\"zone\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "zone", array()), "nom", array()), "html", null, true);
            echo "</label><br>
<label><b>Etat:</b></label><label name=\"etat\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "etat", array()), "html", null, true);
            echo "</label><br>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_modifier", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_supprimer", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a>
<a class=\"btn btn-lg btn-ghost btn-black\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_contacter", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">Contacter </a><br><div></div>
 </fieldset >
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ServiceBundle:Service:offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "ServiceBundle::layout2.html.twig" %}*/
/* {% block t %}*/
/*   <header class="page-header"><h1>Les services disponibles</h1>*/
/*   </header>*/
/* <div name="Service" class="box-lg">*/
/* {% for c in serv%}*/
/*  <fieldset >*/
/*      <legend >Categorie:<label name="type">{{c.type}}</label><br></legend>*/
/* <label><b>Nom :</b></label><label name="nom">{{c.nomService}}</label><br>*/
/* <label><b>Date d'ajout:</b></label><label name="dateAjout">{{c.dateAjout|date('m/d/Y')}}</label><br>*/
/* <label><b>Description :</b></label><label name="decription">{{c.description}}</label><br>*/
/* <label><b>zone:</b></label><label name="zone">{{c.zone.nom}}</label><br>*/
/* <label><b>Etat:</b></label><label name="etat">{{c.etat}}</label><br>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_modifier', {'id':c.id})}}">Modifier</a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_supprimer', {'id':c.id})}}">Supprimer </a>*/
/* <a class="btn btn-lg btn-ghost btn-black" href="{{path('service_contacter', {'id':c.id})}}">Contacter </a><br><div></div>*/
/*  </fieldset >*/
/* {% endfor %}*/
/* </div>*/
/* {% endblock  %}*/
/* */
/* */
/* */
