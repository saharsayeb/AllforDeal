<?php

/* SonataNewsBundle:Post:comments.html.twig */
class __TwigTemplate_926b0ee70642b324700516df7842bc4291b63234576a5463ccab3f8a7cd1165d extends Twig_Template
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
<div class=\"sonata-blog-comment-container\">
    <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_comments", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h3>

    <ul class=\"sonata-blog-comment-list\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "results", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "            <li class=\"sonata-blog-comment\">
                <div class=\"sonata-blog-comment-name\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "url", array()), "html", null, true);
            echo "\" target=\"new\" rel=\"nofollow\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
            echo "</a>
                </div>
                <div class=\"sonata-blog-comment-date\">
                    ";
            // line 24
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["comment"], "createdAt", array()));
            echo "
                </div>
                <div class=\"sonata-blog-comment-message\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "message", array()), "html", null, true);
            echo "
                </div>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_comments_available", array(), "SonataNewsBundle"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  61 => 31,  52 => 27,  46 => 24,  38 => 21,  34 => 19,  29 => 18,  23 => 15,  19 => 13,);
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
/* <div class="sonata-blog-comment-container">*/
/*     <h3>{{ 'title_comments'|trans({}, 'SonataNewsBundle') }}</h3>*/
/* */
/*     <ul class="sonata-blog-comment-list">*/
/*         {% for comment in pager.results %}*/
/*             <li class="sonata-blog-comment">*/
/*                 <div class="sonata-blog-comment-name">*/
/*                     <a href="{{ comment.url }}" target="new" rel="nofollow">{{ comment.name }}</a>*/
/*                 </div>*/
/*                 <div class="sonata-blog-comment-date">*/
/*                     {{ comment.createdAt | format_date }}*/
/*                 </div>*/
/*                 <div class="sonata-blog-comment-message">*/
/*                     {{ comment.message }}*/
/*                 </div>*/
/*             </li>*/
/*         {% else %}*/
/*             <li>{{ 'no_comments_available'|trans({}, 'SonataNewsBundle') }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
