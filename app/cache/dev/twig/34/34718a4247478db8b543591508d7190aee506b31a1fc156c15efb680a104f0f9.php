<?php

/* SonataNewsBundle:Block:recent_comments.html.twig */
class __TwigTemplate_fd900e12f8e7262b750d2229eef65d71a8029e19909542f34b23205ca4c09400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataNewsBundle:Block:recent_comments.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-comment\">
        ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 16
            echo "            <h3 class=\"sonata-news-block-recent-comment\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the recent posts comments block.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
        <ul class=\"sonata-blog-post-container\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 23
            echo "                ";
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 24
                echo "                    <li>
                        ";
                // line 25
                if (($this->getAttribute($context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_INVALID"))) {
                    // line 26
                    echo "                            <span class=\"label label-important\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_invalid", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                } elseif (($this->getAttribute(                // line 27
$context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_VALID"))) {
                    // line 28
                    echo "                            <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_valid", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                } elseif (($this->getAttribute(                // line 29
$context["comment"], "status", array()) == twig_constant("Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_MODERATE"))) {
                    // line 30
                    echo "                            <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_comment_moderate", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 32
                    echo "                            <span class=\"label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_unknown_status", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 34
                echo "
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_news_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "message", array()), 30), "html", null, true);
                echo "</a>
                    </li>
                ";
            } else {
                // line 38
                echo "                    <li>
                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($this->getAttribute($context["comment"], "post", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "message", array()), 30), "html", null, true);
                echo "</a>
                    </li>
                ";
            }
            // line 42
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_comment_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </ul>

        ";
        // line 47
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_sonata_news_comment_list");
            echo "\" class=\"btn btn-primary btn-small\"><i class=\"icon-list icon-white\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_comments", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 50
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Block:recent_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  137 => 48,  135 => 47,  131 => 45,  122 => 43,  117 => 42,  107 => 39,  104 => 38,  94 => 35,  91 => 34,  85 => 32,  79 => 30,  77 => 29,  72 => 28,  70 => 27,  65 => 26,  63 => 25,  60 => 24,  57 => 23,  52 => 22,  48 => 20,  44 => 19,  41 => 18,  35 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="sonata-news-block-recent-comment">*/
/*         {% if settings.title %}*/
/*             <h3 class="sonata-news-block-recent-comment">{{ settings.title }}</h3>*/
/*         {% endif %}*/
/* */
/*         {% sonata_template_box 'This is the recent posts comments block.' %}*/
/* */
/*         <ul class="sonata-blog-post-container">*/
/*             {% for comment in pager.getResults() %}*/
/*                 {% if context.getSetting('mode') == 'admin' %}*/
/*                     <li>*/
/*                         {% if comment.status == constant('Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_INVALID') %}*/
/*                             <span class="label label-important">{{ 'label_comment_invalid'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% elseif comment.status == constant('Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_VALID') %}*/
/*                             <span class="label label-success">{{ 'label_comment_valid'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% elseif comment.status == constant('Sonata\\NewsBundle\\Model\\CommentInterface::STATUS_MODERATE') %}*/
/*                             <span class="label label-warning">{{ 'label_comment_moderate'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% else %}*/
/*                             <span class="label">{{ 'label_unknown_status'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% endif %}*/
/* */
/*                         <a href="{{ url('admin_sonata_news_comment_edit', { 'id': comment.id }) }}">{{ comment.name }} - {{ comment.message|truncate(30) }}</a>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li>*/
/*                         <a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(comment.post) }) }}">{{ comment.name }} - {{ comment.message|truncate(30) }}</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <li>{{ 'no_comment_found'|trans({}, 'SonataNewsBundle') }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*         {% if context.getSetting('mode') == 'admin' %}*/
/*             <a href="{{ url('admin_sonata_news_comment_list') }}" class="btn btn-primary btn-small"><i class="icon-list icon-white"></i> {{ 'view_all_comments'|trans({}, 'SonataNewsBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
