<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_a91f678f91d084308509176d70cfdb9f911d19f92642e5534d7336077f2ea1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::empty_layout.html.twig", "SonataFormatterBundle:Ckeditor:browser.html.twig", 12);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["ckParameters"] = array("CKEditor" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"));
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts", array()));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 36
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["context"], "providers", array())) == 0)) {
                // line 37
                echo "                ";
                $context["urlParams"] = twig_array_merge(array("context" => $context["name"]), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")));
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context["urlParams"] = twig_array_merge(array("context" => $context["name"], "provider" => $this->getAttribute($this->getAttribute($context["context"], "providers", array()), 0, array(), "array")), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")));
                // line 40
                echo "            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if (($context["name"] == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()))) {
                // line 43
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 45
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["name"], array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        ";
        // line 49
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array())), "method");
        // line 50
        echo "
        ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers"))) > 1)) {
            // line 52
            echo "            <li><a><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

            ";
            // line 54
            if ( !$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider", array())) {
                // line 55
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => null), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 57
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => null), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 61
                echo "                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider", array()) == $context["provider_name"])) {
                    // line 62
                    echo "                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => $context["provider_name"]), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["provider_name"], array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 64
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context", array()), "provider" => $context["provider_name"]), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["provider_name"], array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "    </ul>

";
    }

    // line 72
    public function block_list_table($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 74
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 75
            echo "        <table class=\"table table-bordered table-striped\">
            ";
            // line 76
            $this->displayBlock('table_header', $context, $blocks);
            // line 104
            echo "
            ";
            // line 105
            $this->displayBlock('table_body', $context, $blocks);
            // line 129
            echo "
            ";
            // line 130
            $this->displayBlock('table_footer', $context, $blocks);
            // line 201
            echo "        </table>
    ";
        } else {
            // line 203
            echo "        <p class=\"notice\">
            ";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 76
    public function block_table_header($context, array $blocks = array())
    {
        // line 77
        echo "                <thead>
                <tr class=\"sonata-ba-list-field-header\">
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 80
            echo "                        ";
            if ((($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch") || ($this->getAttribute($context["field_description"], "name", array()) == "_action"))) {
                // line 81
                echo "                            ";
                // line 82
                echo "                        ";
            } else {
                // line 83
                echo "                            ";
                $context["sortable"] = false;
                // line 84
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 85
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 86
                    echo "                                ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]);
                    // line 87
                    echo "                                ";
                    $context["sort_parameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")));
                    // line 88
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 89
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 90
                    echo "                            ";
                }
                // line 91
                echo "
                            ";
                // line 92
                ob_start();
                // line 93
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                    ";
                // line 94
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 95
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array())), "method"), "html", null, true);
                echo "
                                        ";
                // line 96
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 97
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tr>
                </thead>
            ";
    }

    // line 105
    public function block_table_body($context, array $blocks = array())
    {
        // line 106
        echo "                <tbody>
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 108
            echo "                        <tr>
                            <td colspan=\"";
            // line 109
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - 1), "html", null, true);
            echo "\">
                                <div>
                                    <a href=\"";
            // line 111
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('sonata_media')->thumbnail($context["object"], "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                    <strong><a href=\"";
            // line 113
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
            echo "</a></strong> <br />
                                    ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["object"], "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            if ($this->getAttribute($context["object"], "width", array())) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "width", array()), "html", null, true);
                if ($this->getAttribute($context["object"], "height", array())) {
                    echo "x";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "height", array()), "html", null, true);
                }
                echo "px";
            }
            // line 115
            echo "
                                    ";
            // line 116
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array")) > 0)) {
                // line 117
                echo "                                        - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                        ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 119
                    echo "                                            <a href=\"";
                    echo $this->env->getExtension('sonata_media')->path($context["object"], $context["name"]);
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a> ";
                    if ($this->getAttribute($context["format"], "width", array())) {
                        echo "(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "width", array()), "html", null, true);
                        if ($this->getAttribute($context["format"], "height", array())) {
                            echo "x";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "height", array()), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 120
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "                                    <br />
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </tbody>
            ";
    }

    // line 130
    public function block_table_footer($context, array $blocks = array())
    {
        // line 131
        echo "                <tr>
                    <th colspan=\"";
        // line 132
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - 2), "html", null, true);
        echo "\">
                        <div class=\"form-inline\">
                            <div class=\"pull-right\">
                                ";
        // line 135
        $this->displayBlock('pager_results', $context, $blocks);
        // line 157
        echo "                            </div>
                        </div>
                    </th>
                </tr>

                ";
        // line 162
        $this->displayBlock('pager_links', $context, $blocks);
        // line 199
        echo "
            ";
    }

    // line 135
    public function block_pager_results($context, array $blocks = array())
    {
        // line 136
        echo "                                    ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 140
        echo "
                                    ";
        // line 141
        $this->displayBlock('num_results', $context, $blocks);
        // line 145
        echo "
                                    ";
        // line 146
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 156
        echo "                                ";
    }

    // line 136
    public function block_num_pages($context, array $blocks = array())
    {
        // line 137
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 141
    public function block_num_results($context, array $blocks = array())
    {
        // line 142
        echo "                                        ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 143
        echo "                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 146
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 147
        echo "                                        <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                        <select class=\"per-page small\" id=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 150
            echo "                                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_per_page" => $context["per_page"]))), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">
                                                    ";
            // line 151
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                        </select>
                                    ";
    }

    // line 162
    public function block_pager_links($context, array $blocks = array())
    {
        // line 163
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 164
            echo "                        <tr>
                            <td colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())), "html", null, true);
            echo "\">
                                <div class=\"pagination pagination-centered\">
                                    <ul>
                                        ";
            // line 168
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
                // line 169
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 1), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                        ";
            }
            // line 171
            echo "
                                        ";
            // line 172
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array()))) {
                // line 173
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                        ";
            }
            // line 175
            echo "
                                        ";
            // line 177
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 178
                echo "                                            ";
                if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
                    // line 179
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                            ";
                } else {
                    // line 181
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 183
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "
                                        ";
            // line 185
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array()))) {
                // line 186
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                        ";
            }
            // line 188
            echo "
                                        ";
            // line 189
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())))) {
                // line 190
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                        ";
            }
            // line 192
            echo "                                    </ul>
                                </div>
                            </td>
                        </tr>

                    ";
        }
        // line 198
        echo "                ";
    }

    // line 209
    public function block_list_filters($context, array $blocks = array())
    {
        // line 210
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 211
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser"), "method"), "html", null, true);
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 213
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 215
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 218
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array())), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 220
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 221
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 228
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 229
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filters" => "reset"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters"))));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 237
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  741 => 239,  730 => 237,  726 => 236,  718 => 233,  713 => 231,  707 => 229,  705 => 228,  699 => 224,  690 => 221,  686 => 220,  680 => 219,  677 => 218,  673 => 217,  668 => 215,  661 => 213,  653 => 211,  650 => 210,  647 => 209,  643 => 198,  635 => 192,  627 => 190,  625 => 189,  622 => 188,  614 => 186,  612 => 185,  609 => 184,  603 => 183,  595 => 181,  587 => 179,  584 => 178,  579 => 177,  576 => 175,  568 => 173,  566 => 172,  563 => 171,  555 => 169,  553 => 168,  547 => 165,  544 => 164,  541 => 163,  538 => 162,  533 => 154,  524 => 151,  515 => 150,  511 => 149,  507 => 148,  500 => 147,  497 => 146,  492 => 143,  489 => 142,  486 => 141,  476 => 137,  473 => 136,  469 => 156,  467 => 146,  464 => 145,  462 => 141,  459 => 140,  456 => 136,  453 => 135,  448 => 199,  446 => 162,  439 => 157,  437 => 135,  431 => 132,  428 => 131,  425 => 130,  420 => 127,  410 => 122,  407 => 121,  401 => 120,  386 => 119,  382 => 118,  377 => 117,  375 => 116,  372 => 115,  361 => 114,  355 => 113,  348 => 111,  343 => 109,  340 => 108,  336 => 107,  333 => 106,  330 => 105,  324 => 101,  318 => 100,  315 => 99,  311 => 97,  307 => 96,  302 => 95,  296 => 94,  284 => 93,  282 => 92,  279 => 91,  276 => 90,  273 => 89,  270 => 88,  267 => 87,  264 => 86,  261 => 85,  258 => 84,  255 => 83,  252 => 82,  250 => 81,  247 => 80,  243 => 79,  239 => 77,  236 => 76,  228 => 204,  225 => 203,  221 => 201,  219 => 130,  216 => 129,  214 => 105,  211 => 104,  209 => 76,  206 => 75,  203 => 74,  200 => 73,  197 => 72,  191 => 68,  188 => 67,  182 => 66,  174 => 64,  166 => 62,  163 => 61,  159 => 60,  156 => 59,  148 => 57,  140 => 55,  138 => 54,  132 => 52,  130 => 51,  127 => 50,  125 => 49,  122 => 48,  116 => 47,  108 => 45,  100 => 43,  98 => 42,  95 => 41,  92 => 40,  89 => 39,  86 => 38,  83 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 32,  65 => 31,  55 => 23,  45 => 17,  42 => 16,  38 => 12,  36 => 14,  11 => 12,);
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
/* */
/* {% extends 'SonataAdminBundle::empty_layout.html.twig' %}*/
/* */
/* {% set ckParameters = {'CKEditor': app.request.get('CKEditor'), 'CKEditorFuncNum': app.request.get('CKEditorFuncNum')} %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* */
/*     <script>*/
/*         $(function () {*/
/*             $(".select").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 window.opener.CKEDITOR.tools.callFunction({{ app.request.get('CKEditorFuncNum')|escape('js') }}, $(this).attr("href"));*/
/*                 window.close();*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block preview %}*/
/* */
/*     <ul class="nav nav-pills">*/
/*         <li><a><strong>{{ "label.select_context"|trans({}, 'SonataMediaBundle') }}</strong></a></li>*/
/*         {% for name, context in media_pool.contexts %}*/
/*             {% if context.providers|length == 0 %}*/
/*                 {% set urlParams = {'context' : name}|merge(ckParameters) %}*/
/*             {% else %}*/
/*                 {% set urlParams = {'context' : name, 'provider' : context.providers[0]}|merge(ckParameters) %}*/
/*             {% endif %}*/
/* */
/*             {% if name == persistent_parameters.context %}*/
/*                 <li class="active"><a href="{{ admin.generateUrl('ckeditor_browser', urlParams) }}">{{ name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% else %}*/
/*                 <li><a href="{{ admin.generateUrl('ckeditor_browser', urlParams) }}">{{ name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% set providers = media_pool.getProviderNamesByContext(persistent_parameters.context) %}*/
/* */
/*         {% if providers|length > 1 %}*/
/*             <li><a><strong>{{ "label.select_provider"|trans({}, 'SonataMediaBundle') }}</strong></a></li>*/
/* */
/*             {% if not persistent_parameters.provider %}*/
/*                 <li class="active"><a href="{{ admin.generateUrl('ckeditor_browser', {'context': persistent_parameters.context, 'provider': null}|merge(ckParameters)) }}">{{ "link.all_providers"|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% else %}*/
/*                 <li><a href="{{ admin.generateUrl('ckeditor_browser', {'context': persistent_parameters.context, 'provider': null}|merge(ckParameters)) }}">{{ "link.all_providers"|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*             {% endif %}*/
/* */
/*             {% for provider_name in providers %}*/
/*                 {% if persistent_parameters.provider == provider_name%}*/
/*                     <li class="active"><a href="{{ admin.generateUrl('ckeditor_browser', {'context': persistent_parameters.context, 'provider': provider_name}|merge(ckParameters)) }}">{{ provider_name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ admin.generateUrl('ckeditor_browser', {'context': persistent_parameters.context, 'provider': provider_name}|merge(ckParameters)) }}">{{ provider_name|trans({}, 'SonataMediaBundle') }}</a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     {% set batchactions = admin.batchactions %}*/
/*     {% if admin.datagrid.results|length > 0 %}*/
/*         <table class="table table-bordered table-striped">*/
/*             {% block table_header %}*/
/*                 <thead>*/
/*                 <tr class="sonata-ba-list-field-header">*/
/*                     {% for field_description in admin.list.elements %}*/
/*                         {% if field_description.getOption('code') == '_batch' or field_description.name == '_action' %}*/
/*                             {# Disable batch and actions #}*/
/*                         {% else %}*/
/*                             {% set sortable = false %}*/
/*                             {% if field_description.options.sortable is defined and field_description.options.sortable%}*/
/*                                 {% set sortable             = true %}*/
/*                                 {% set current              = admin.datagrid.values._sort_by == field_description %}*/
/*                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid)|merge(ckParameters) %}*/
/*                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                             {% endif %}*/
/* */
/*                             {% spaceless %}*/
/*                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}">*/
/*                                     {% if sortable %}<a href="{{ admin.generateUrl('ckeditor_browser', sort_parameters) }}">{% endif %}*/
/*                                         {{ admin.trans(field_description.label) }}*/
/*                                         {% if sortable %}</a>{% endif %}*/
/*                                 </th>*/
/*                             {% endspaceless %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*                 </thead>*/
/*             {% endblock %}*/
/* */
/*             {% block table_body %}*/
/*                 <tbody>*/
/*                     {% for object in admin.datagrid.results %}*/
/*                         <tr>*/
/*                             <td colspan="{{ (admin.list.elements|length) - 1}}">*/
/*                                 <div>*/
/*                                     <a href="{% path object, 'reference' %}" class="select" style="float: left; margin-right: 6px;">{% thumbnail object, 'admin' with {'width': 75, 'height': 60} %}</a>*/
/* */
/*                                     <strong><a href="{% path object, 'reference' %}" class="select">{{ object.name }}</a></strong> <br />*/
/*                                     {{ object.providerName|trans({}, 'SonataMediaBundle') }}{% if object.width %}: {{ object.width }}{% if object.height %}x{{ object.height }}{% endif %}px{% endif %}*/
/* */
/*                                     {% if formats[object.id]|length > 0 %}*/
/*                                         - {{ 'title.formats'|trans({}, 'SonataMediaBundle') }}:*/
/*                                         {% for name, format in formats[object.id] %}*/
/*                                             <a href="{% path object, name %}" class="select">{{ name }}</a> {% if format.width %}({{ format.width }}{% if format.height %}x{{ format.height }}{% endif %}px){% endif %}*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                     <br />*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
/* */
/*             {% block table_footer %}*/
/*                 <tr>*/
/*                     <th colspan="{{ admin.list.elements|length - 2 }}">*/
/*                         <div class="form-inline">*/
/*                             <div class="pull-right">*/
/*                                 {% block pager_results %}*/
/*                                     {% block num_pages %}*/
/*                                         {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}*/
/*                                         &nbsp;-&nbsp;*/
/*                                     {% endblock %}*/
/* */
/*                                     {% block num_results %}*/
/*                                         {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*                                         &nbsp;-&nbsp;*/
/*                                     {% endblock %}*/
/* */
/*                                     {% block max_per_page %}*/
/*                                         <label class="control-label" for="{{ admin.uniqid }}_per_page">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>*/
/*                                         <select class="per-page small" id="{{ admin.uniqid }}_per_page" style="width: auto; height: auto">*/
/*                                             {% for per_page in admin.getperpageoptions %}*/
/*                                                 <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('ckeditor_browser', {'filter': admin.datagrid.values|merge({'_per_page': per_page})}|merge(ckParameters)) }}">*/
/*                                                     {{ per_page }}*/
/*                                                 </option>*/
/*                                             {% endfor %}*/
/*                                         </select>*/
/*                                     {% endblock %}*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </th>*/
/*                 </tr>*/
/* */
/*                 {% block pager_links %}*/
/*                     {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                         <tr>*/
/*                             <td colspan="{{ admin.list.elements|length }}">*/
/*                                 <div class="pagination pagination-centered">*/
/*                                     <ul>*/
/*                                         {% if admin.datagrid.pager.page > 2  %}*/
/*                                             <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, 1)|merge(ckParameters)) }}" title="{{ 'link_first_pager'|trans({}, 'SonataAdminBundle') }}">&laquo;</a></li>*/
/*                                         {% endif %}*/
/* */
/*                                         {% if admin.datagrid.pager.page != admin.datagrid.pager.previouspage %}*/
/*                                             <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.previouspage)|merge(ckParameters)) }}" title="{{ 'link_previous_pager'|trans({}, 'SonataAdminBundle') }}">&lsaquo;</a></li>*/
/*                                         {% endif %}*/
/* */
/*                                         {# Set the number of pages to display in the pager #}*/
/*                                         {% for page in admin.datagrid.pager.getLinks() %}*/
/*                                             {% if page == admin.datagrid.pager.page %}*/
/*                                                 <li class="active"><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, page)|merge(ckParameters)) }}">{{ page }}</a></li>*/
/*                                             {% else %}*/
/*                                                 <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, page)|merge(ckParameters)) }}">{{ page }}</a></li>*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/* */
/*                                         {% if admin.datagrid.pager.page != admin.datagrid.pager.nextpage %}*/
/*                                             <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.nextpage)|merge(ckParameters)) }}" title="{{ 'link_next_pager'|trans({}, 'SonataAdminBundle') }}">&rsaquo;</a></li>*/
/*                                         {% endif %}*/
/* */
/*                                         {% if admin.datagrid.pager.page != admin.datagrid.pager.lastpage and admin.datagrid.pager.lastpage != admin.datagrid.pager.nextpage %}*/
/*                                             <li><a href="{{ admin.generateUrl('ckeditor_browser', admin.modelmanager.paginationparameters(admin.datagrid, admin.datagrid.pager.lastpage)|merge(ckParameters)) }}" title="{{ 'link_last_pager'|trans({}, 'SonataAdminBundle') }}">&raquo;</a></li>*/
/*                                         {% endif %}*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/* */
/*                     {% endif %}*/
/*                 {% endblock %}*/
/* */
/*             {% endblock %}*/
/*         </table>*/
/*     {% else %}*/
/*         <p class="notice">*/
/*             {{ 'no_result'|trans({}, 'SonataAdminBundle') }}*/
/*         </p>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         <form class="sonata-filter-form {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('ckeditor_browser') }}" method="GET">*/
/*             <fieldset class="filter_legend">*/
/*                 <legend class="filter_legend {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">{{ 'label_filters'|trans({}, 'SonataAdminBundle') }}</legend>*/
/* */
/*                 <div class="filter_container {{ admin.datagrid.hasActiveFilters ? 'active' : 'inactive' }}">*/
/*                     <div>*/
/*                         {% for filter in admin.datagrid.filters %}*/
/*                             <div class="clearfix">*/
/*                                 <label for="{{ form.children[filter.formName].children['value'].vars.id }}">{{ admin.trans(filter.label) }}</label>*/
/*                                 {{ form_widget(form.children[filter.formName].children['type'], {'attr': {'class': 'span8 sonata-filter-option'}}) }}*/
/*                                 {{ form_widget(form.children[filter.formName].children['value'], {'attr': {'class': 'span8'}}) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/* */
/*                     <input type="hidden" name="filter[_page]" id="filter__page" value="1" />*/
/* */
/*                     {% set foo = form.children['_page'].setRendered() %}*/
/*                     {{ form_rest(form) }}*/
/* */
/*                     <input type="submit" class="btn btn-primary" value="{{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}" />*/
/* */
/*                     <a class="btn" href="{{ admin.generateUrl('ckeditor_browser', {filters: 'reset'}|merge(ckParameters)) }}">{{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                 </div>*/
/* */
/*                 {% for paramKey, paramValue in admin.persistentParameters|merge(ckParameters) %}*/
/*                     <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}" />*/
/*                 {% endfor %}*/
/*             </fieldset>*/
/*         </form>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
