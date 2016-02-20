<?php

/* SonataNewsBundle:Block:recent_posts.html.twig */
class __TwigTemplate_8a0b1c021ccc5e864dfbcf089c7d99d91778a52547520a21b8822f760436832c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataNewsBundle:Block:recent_posts.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-post\">
        ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array())) {
            // line 16
            echo "            <h3 class=\"sonata-news-block-recent-post\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the recent posts block.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 20
        echo "
        <ul class=\"sonata-blog-post-container\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "                ";
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
                // line 24
                echo "                    <li>
                        ";
                // line 25
                if ($this->getAttribute($context["post"], "ispublic", array())) {
                    // line 26
                    echo "                            <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post_is_public", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                } else {
                    // line 28
                    echo "                            <span class=\"label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post_is_not_public", array(), "SonataNewsBundle"), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 30
                echo "
                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_news_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a> - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
                echo " - ";
                echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
                echo "</li>
                ";
            } else {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a> - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
                echo " - ";
                echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
                echo "</li>
                ";
            }
            // line 35
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </ul>

        ";
        // line 40
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "getSetting", array(0 => "mode"), "method") == "admin")) {
            // line 41
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("admin_sonata_news_post_list");
            echo "\" class=\"btn btn-primary btn-small\"><i class=\"icon-list icon-white\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_posts", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 43
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_news_archive");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("view_all_posts", array(), "SonataNewsBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 45
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Block:recent_posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  131 => 43,  123 => 41,  121 => 40,  117 => 38,  108 => 36,  103 => 35,  91 => 33,  80 => 31,  77 => 30,  71 => 28,  65 => 26,  63 => 25,  60 => 24,  57 => 23,  52 => 22,  48 => 20,  44 => 19,  41 => 18,  35 => 16,  33 => 15,  30 => 14,  27 => 13,  18 => 11,);
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
/*     <div class="sonata-news-block-recent-post">*/
/*         {% if settings.title %}*/
/*             <h3 class="sonata-news-block-recent-post">{{ settings.title }}</h3>*/
/*         {% endif %}*/
/* */
/*         {% sonata_template_box 'This is the recent posts block.' %}*/
/* */
/*         <ul class="sonata-blog-post-container">*/
/*             {% for post in pager.getResults() %}*/
/*                 {% if context.getSetting('mode') == 'admin' %}*/
/*                     <li>*/
/*                         {% if post.ispublic %}*/
/*                             <span class="label label-success">{{ 'post_is_public'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% else %}*/
/*                             <span class="label">{{ 'post_is_not_public'|trans({}, 'SonataNewsBundle') }}</span>*/
/*                         {% endif %}*/
/* */
/*                         <a href="{{ url('admin_sonata_news_post_edit', { 'id': post.id }) }}">{{ post.title }}</a> - {{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }} - {{ post.publicationDateStart | format_date }}</li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }) }}">{{ post.title }}</a> - {{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }} - {{ post.publicationDateStart | format_date }}</li>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 <li>{{ 'no_post_found'|trans({}, 'SonataNewsBundle') }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/* */
/*         {% if context.getSetting('mode') == 'admin' %}*/
/*             <a href="{{ url('admin_sonata_news_post_list') }}" class="btn btn-primary btn-small"><i class="icon-list icon-white"></i> {{ 'view_all_posts'|trans({}, 'SonataNewsBundle') }}</a>*/
/*         {% else %}*/
/*             <a href="{{ url('sonata_news_archive') }}"> {{ 'view_all_posts'|trans({}, 'SonataNewsBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
