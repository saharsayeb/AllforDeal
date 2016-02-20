<?php

/* SonataNewsBundle:Post:view.html.twig */
class __TwigTemplate_4f6ace89130ead1511027ba648641e526b46b007055f739cfd8bc6a1ffff47cc extends Twig_Template
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
    <strong>This is the post template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 15
        echo "
";
        // line 16
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 21
        echo "
<article class=\"sonata-blog-post-container\">
    <header>
        <div class=\"sonata-blog-post-date-container\">
            <h5>
                <i class=\"icon-calendar\"></i>
                ";
        // line 27
        echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publicationDateStart", array()));
        echo "
            </h5>
        </div>

        <h1 class=\"sonata-blog-post-title\">
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a>
            <span class=\"sonata-blog-post-author\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array())), "SonataNewsBundle"), "html", null, true);
        echo "</span>
        </h1>

        <div class=\"sonata-blog-post-information\">
            <div class=\"sonata-blog-post-tag-container\">
                <div class=\"sonata-blog-post-tag-title\">
                    ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())) > 1)) {
            // line 40
            echo "                        <i class=\"icon-tags\"></i>
                    ";
        } else {
            // line 42
            echo "                        <i class=\"icon-tag\"></i>
                    ";
        }
        // line 44
        echo "                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array())), array(), "SonataNewsBundle"), "html", null, true);
        echo "
                </div>
                <div class=\"sonata-blog-post-tag-list\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 48
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute($context["tag"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </div>
            </div>
        </div>
    </header>

    <div class=\"sonata-blog-post-content\">
        ";
        // line 56
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array());
        echo "
    </div>

    ";
        // line 59
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataNewsBundle:Post:comments", array("postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), array());
        // line 60
        echo "
    ";
        // line 61
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "iscommentable", array())) {
            // line 62
            echo "        ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataNewsBundle:Post:addCommentForm", array("postId" => $this->getAttribute(            // line 63
(isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "form" =>             // line 64
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), array());
            // line 66
            echo "    ";
        } else {
            // line 67
            echo "        <div>
            ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_comments_are_closed", array(), "SonataNewsBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 71
        echo "</article>
";
    }

    // line 16
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "news_post", "post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 18,  141 => 17,  138 => 16,  133 => 71,  127 => 68,  124 => 67,  121 => 66,  119 => 64,  118 => 63,  116 => 62,  114 => 61,  111 => 60,  109 => 59,  103 => 56,  95 => 50,  84 => 48,  80 => 47,  73 => 44,  69 => 42,  65 => 40,  63 => 39,  54 => 33,  48 => 32,  40 => 27,  32 => 21,  30 => 16,  27 => 15,  23 => 14,  20 => 13,);
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
/* {% sonata_template_box 'This is the post template. Feel free to override it.' %}*/
/* */
/* {% block sonata_page_breadcrumb %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': 'news_post', 'post': post, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <article class="sonata-blog-post-container">*/
/*     <header>*/
/*         <div class="sonata-blog-post-date-container">*/
/*             <h5>*/
/*                 <i class="icon-calendar"></i>*/
/*                 {{ post.publicationDateStart | format_date }}*/
/*             </h5>*/
/*         </div>*/
/* */
/*         <h1 class="sonata-blog-post-title">*/
/*             <a href="{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }) }}">{{ post.title }}</a>*/
/*             <span class="sonata-blog-post-author">{{ 'archive_author'|trans({'%author%': post.author }, 'SonataNewsBundle') }}</span>*/
/*         </h1>*/
/* */
/*         <div class="sonata-blog-post-information">*/
/*             <div class="sonata-blog-post-tag-container">*/
/*                 <div class="sonata-blog-post-tag-title">*/
/*                     {% if post.tags|length > 1 %}*/
/*                         <i class="icon-tags"></i>*/
/*                     {% else %}*/
/*                         <i class="icon-tag"></i>*/
/*                     {% endif %}*/
/*                     {{ 'published_under'|transchoice(post.tags|length, {}, 'SonataNewsBundle') }}*/
/*                 </div>*/
/*                 <div class="sonata-blog-post-tag-list">*/
/*                     {% for tag in post.tags %}*/
/*                         <a href="{{ url('sonata_news_tag', { 'tag': tag.slug } ) }}">{{ tag.name }}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <div class="sonata-blog-post-content">*/
/*         {{ post.content|raw }}*/
/*     </div>*/
/* */
/*     {% render(controller('SonataNewsBundle:Post:comments', {'postId': post.id})) %}*/
/* */
/*     {% if post.iscommentable %}*/
/*         {% render(controller('SonataNewsBundle:Post:addCommentForm', {*/
/*             'postId': post.id,*/
/*             'form': form*/
/*         })) %}*/
/*     {% else %}*/
/*         <div>*/
/*             {{ 'message_comments_are_closed'|trans({}, 'SonataNewsBundle') }}*/
/*         </div>*/
/*     {% endif %}*/
/* </article>*/
/* */
