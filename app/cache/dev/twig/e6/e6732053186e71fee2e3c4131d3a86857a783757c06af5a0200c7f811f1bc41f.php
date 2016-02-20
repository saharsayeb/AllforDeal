<?php

/* SonataNewsBundle:Post:archive.html.twig */
class __TwigTemplate_11fbfa5ee58422991573c7267c547224e5ac53b3cd62391e43bd25e504b72ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the archive template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 15
        echo "
";
        // line 16
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 21
        echo "
<h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_archive", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h1>

<div class=\"sonata-blog-post-list\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "        <div class=\"sonata-blog-post-container\">
            <header>
                <h2 class=\"sonata-blog-post-title\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>
                </h2>

                <div class=\"sonata-blog-post-information\">
                    <span class=\"sonata-blog-post-author\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute($context["post"], "author", array())), "SonataNewsBundle"), "html", null, true);
            echo "</span> |

                    <i class=\"icon-calendar\"></i>
                    ";
            // line 36
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($context["post"], "publicationDateStart", array()));
            echo " |

                    <i class=\"icon-comment\"></i>
                    <span class=\"sonata-blog-post-comments-count\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comments_count", array("%comments_count%" => $this->getAttribute($context["post"], "commentsCount", array())), "SonataNewsBundle"), "html", null, true);
            echo "</span>

                    <div class=\"sonata-blog-post-tags\">
                        ";
            // line 42
            if ((twig_length_filter($this->env, $this->getAttribute($context["post"], "tags", array())) > 1)) {
                // line 43
                echo "                            <i class=\"icon-tags\"></i>
                        ";
            } else {
                // line 45
                echo "                            <i class=\"icon-tag\"></i>
                        ";
            }
            // line 47
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute($context["post"], "tags", array())), array(), "SonataNewsBundle"), "html", null, true);
            echo "

                        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "tags", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 51
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </div>
                </div>
            </header>

            <div class=\"sonata-blog-post-abtract\">
                ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "abstract", array()), "html", null, true);
            echo "
            </div>
        </div>

        <hr />
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
    <ul class=\"pager\">
        <li";
        // line 67
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "lastPage", array()))) {
            echo " class=\"disabled\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "nextpage", array())))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "</a>
        <li";
        // line 68
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "firstPage", array()))) {
            echo " class=\"disabled\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "previouspage", array())))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</div>
";
    }

    // line 16
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "news_archive", "collection" => (isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), "tag" => (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 18,  196 => 17,  193 => 16,  177 => 68,  165 => 67,  161 => 65,  152 => 63,  141 => 57,  134 => 52,  120 => 51,  111 => 50,  94 => 49,  88 => 47,  84 => 45,  80 => 43,  78 => 42,  72 => 39,  66 => 36,  60 => 33,  51 => 29,  46 => 26,  41 => 25,  35 => 22,  32 => 21,  30 => 16,  27 => 15,  23 => 14,  20 => 13,);
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
/* {% sonata_template_box 'This is the archive template. Feel free to override it.' %}*/
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'news_archive', 'collection': collection, 'tag': tag, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h1>{{ 'title_archive'|trans({}, 'SonataNewsBundle') }}</h1>*/
/* */
/* <div class="sonata-blog-post-list">*/
/*     {% for post in pager.getResults() %}*/
/*         <div class="sonata-blog-post-container">*/
/*             <header>*/
/*                 <h2 class="sonata-blog-post-title">*/
/*                     <a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }) }}">{{ post.title }}</a>*/
/*                 </h2>*/
/* */
/*                 <div class="sonata-blog-post-information">*/
/*                     <span class="sonata-blog-post-author">{{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }}</span> |*/
/* */
/*                     <i class="icon-calendar"></i>*/
/*                     {{ post.publicationDateStart | format_date }} |*/
/* */
/*                     <i class="icon-comment"></i>*/
/*                     <span class="sonata-blog-post-comments-count">{{ 'comments_count'|trans({'%comments_count%': post.commentsCount }, 'SonataNewsBundle') }}</span>*/
/* */
/*                     <div class="sonata-blog-post-tags">*/
/*                         {% if post.tags|length > 1 %}*/
/*                             <i class="icon-tags"></i>*/
/*                         {% else %}*/
/*                             <i class="icon-tag"></i>*/
/*                         {% endif %}*/
/*                         {{ 'published_under'|transchoice(post.tags|length, {}, 'SonataNewsBundle') }}*/
/* */
/*                         {% for tag in post.tags %}*/
/*                             <a href="{{ url('sonata_news_tag', { 'tag': tag.slug } ) }}">{{ tag.name }}</a>{% if not loop.last %},{% endif %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/* */
/*             <div class="sonata-blog-post-abtract">*/
/*                 {{ post.abstract }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/*     {% else %}*/
/*         {{ 'no_post_found'|trans({}, 'SonataNewsBundle') }}*/
/*     {% endfor %}*/
/* */
/*     <ul class="pager">*/
/*         <li{% if pager.page == pager.lastPage %} class="disabled"{% endif %}><a href="{{ url(route, route_parameters|merge({'page': pager.nextpage})) }}" title="{{ 'link_previous_page'|trans({}, 'SonataNewsBundle') }}">{{ 'link_previous_page'|trans({}, 'SonataNewsBundle') }}</a>*/
/*         <li{% if pager.page == pager.firstPage %} class="disabled"{% endif %}><a href="{{ url(route, route_parameters|merge({'page': pager.previouspage})) }}" title="{{ 'link_next_page'|trans({}, 'SonataNewsBundle') }}">{{ 'link_next_page'|trans({}, 'SonataNewsBundle') }}</a></li>*/
/*     </ul>*/
/* </div>*/
/* */
