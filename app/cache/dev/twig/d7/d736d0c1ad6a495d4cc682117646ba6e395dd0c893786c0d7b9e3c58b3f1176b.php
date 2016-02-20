<?php

/* SonataFormatterBundle:Ckeditor:upload.html.twig */
class __TwigTemplate_2a6485249778c07a2a4d87edca35e8872fa0d42cbac98642edd3f760eb3027f2 extends Twig_Template
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
        // line 1
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), twig_escape_filter($this->env, "reference", "js"));
        echo "\");</script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script>window.parent.CKEDITOR.tools.callFunction({{ app.request.get('CKEditorFuncNum')|escape('js') }}, "{% path object, 'reference'|escape('js') %}");</script>*/
/* */
