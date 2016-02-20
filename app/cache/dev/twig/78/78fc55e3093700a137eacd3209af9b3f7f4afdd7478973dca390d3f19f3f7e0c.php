<?php

/* SonataNewsBundle:Post:archive.rss.twig */
class __TwigTemplate_5d49d15eba8ae37694bc3e7ef39be7cbf2ea7e4f920c28e6c9bed0eb5eab6040 extends Twig_Template
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
        // line 11
        echo "<?xml version=\"1.0\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        if ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag"))) {
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name", array()), "html", null, true);
        }
        echo "</title>
        <link>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "link", array()), "html", null, true);
        echo "</link>
        <description>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "description", array()), "html", null, true);
        echo "</description>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "             <item>
                  <title>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</title>
                  <link>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"])), true), "html", null, true);
            echo "</link>
                  <description><![CDATA[ ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "abstract", array()), "html", null, true);
            echo " ]]></description>
                  <pubDate>";
            // line 22
            echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute($context["post"], "publicationDateStart", array()), "eee, MM LLL yyyy HH:mm:ss ZZZ", "en");
            echo "</pubDate>
                  <guid>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink($context["post"])), true), "html", null, true);
            echo "</guid>
             </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  44 => 18,  40 => 17,  36 => 16,  32 => 15,  24 => 14,  19 => 11,);
    }
}
/* {#*/
/* /**/
/*  * This file is part of the Sonata package.*/
/*  **/
/*  * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/*  **/
/*  * For the full copyright and license information, please view the LICENSE*/
/*  * file that was distributed with this source code.*/
/*  *//* */
/* #}*/
/* <?xml version="1.0" ?>*/
/* <rss version="2.0">*/
/*     <channel>*/
/*         <title>{{ blog.title }}{%if tag %} : {{ tag.name }}{%endif%}</title>*/
/*         <link>{{ blog.link }}</link>*/
/*         <description>{{ blog.description }}</description>*/
/*         {% for post in pager.getResults() %}*/
/*              <item>*/
/*                   <title>{{ post.title }}</title>*/
/*                   <link>{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }, true) }}</link>*/
/*                   <description><![CDATA[ {{ post.abstract }} ]]></description>*/
/*                   <pubDate>{{ post.publicationDateStart | format_datetime('eee, MM LLL yyyy HH:mm:ss ZZZ', 'en')}}</pubDate>*/
/*                   <guid>{{ url('sonata_news_view', { 'permalink': sonata_news_permalink(post) }, true) }}</guid>*/
/*              </item>*/
/*         {% endfor %}*/
/*     </channel>*/
/* </rss>*/
/* */
