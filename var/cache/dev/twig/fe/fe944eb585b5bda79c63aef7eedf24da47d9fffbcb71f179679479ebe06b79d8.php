<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2089e81ed079e6b9ec5300d1817d30109f875b26752427245a1914ed7855360a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_718569026345d297685e1f5a276278818ab4b8d5d2c3cb1da49c798db16a0455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718569026345d297685e1f5a276278818ab4b8d5d2c3cb1da49c798db16a0455->enter($__internal_718569026345d297685e1f5a276278818ab4b8d5d2c3cb1da49c798db16a0455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_74e90189c58c2a60e9417f43dca9a2c774d46b16b76e54bed64a47cf3ab5eb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e90189c58c2a60e9417f43dca9a2c774d46b16b76e54bed64a47cf3ab5eb19->enter($__internal_74e90189c58c2a60e9417f43dca9a2c774d46b16b76e54bed64a47cf3ab5eb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718569026345d297685e1f5a276278818ab4b8d5d2c3cb1da49c798db16a0455->leave($__internal_718569026345d297685e1f5a276278818ab4b8d5d2c3cb1da49c798db16a0455_prof);

        
        $__internal_74e90189c58c2a60e9417f43dca9a2c774d46b16b76e54bed64a47cf3ab5eb19->leave($__internal_74e90189c58c2a60e9417f43dca9a2c774d46b16b76e54bed64a47cf3ab5eb19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c028b45442f8d7d4dfa2b3e962e753e21b6b9ac76fca6b45e82374879c2274f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c028b45442f8d7d4dfa2b3e962e753e21b6b9ac76fca6b45e82374879c2274f->enter($__internal_2c028b45442f8d7d4dfa2b3e962e753e21b6b9ac76fca6b45e82374879c2274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d48c4481bc20c4cd0b638c76a66f06196bf53b36934763f5501871745361fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d48c4481bc20c4cd0b638c76a66f06196bf53b36934763f5501871745361fad->enter($__internal_6d48c4481bc20c4cd0b638c76a66f06196bf53b36934763f5501871745361fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6d48c4481bc20c4cd0b638c76a66f06196bf53b36934763f5501871745361fad->leave($__internal_6d48c4481bc20c4cd0b638c76a66f06196bf53b36934763f5501871745361fad_prof);

        
        $__internal_2c028b45442f8d7d4dfa2b3e962e753e21b6b9ac76fca6b45e82374879c2274f->leave($__internal_2c028b45442f8d7d4dfa2b3e962e753e21b6b9ac76fca6b45e82374879c2274f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b7f540710e02fdb8312c81c96381665361b3e9abf199431a139dd7a172ae606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b7f540710e02fdb8312c81c96381665361b3e9abf199431a139dd7a172ae606->enter($__internal_6b7f540710e02fdb8312c81c96381665361b3e9abf199431a139dd7a172ae606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81610549ee597fb6552788f562385b2bb7323e0c7a234c7dcb9b3ca4cd3ce071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81610549ee597fb6552788f562385b2bb7323e0c7a234c7dcb9b3ca4cd3ce071->enter($__internal_81610549ee597fb6552788f562385b2bb7323e0c7a234c7dcb9b3ca4cd3ce071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81610549ee597fb6552788f562385b2bb7323e0c7a234c7dcb9b3ca4cd3ce071->leave($__internal_81610549ee597fb6552788f562385b2bb7323e0c7a234c7dcb9b3ca4cd3ce071_prof);

        
        $__internal_6b7f540710e02fdb8312c81c96381665361b3e9abf199431a139dd7a172ae606->leave($__internal_6b7f540710e02fdb8312c81c96381665361b3e9abf199431a139dd7a172ae606_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebdd0c4381dfe678cb509dec17921044bea06b4c2ac7c6ac072aeda2481a93d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdd0c4381dfe678cb509dec17921044bea06b4c2ac7c6ac072aeda2481a93d4->enter($__internal_ebdd0c4381dfe678cb509dec17921044bea06b4c2ac7c6ac072aeda2481a93d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_742d527a8f078ad3691e8bb40968e99938d9c0c13d57a1e2b52ad3a7e906a8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742d527a8f078ad3691e8bb40968e99938d9c0c13d57a1e2b52ad3a7e906a8af->enter($__internal_742d527a8f078ad3691e8bb40968e99938d9c0c13d57a1e2b52ad3a7e906a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_742d527a8f078ad3691e8bb40968e99938d9c0c13d57a1e2b52ad3a7e906a8af->leave($__internal_742d527a8f078ad3691e8bb40968e99938d9c0c13d57a1e2b52ad3a7e906a8af_prof);

        
        $__internal_ebdd0c4381dfe678cb509dec17921044bea06b4c2ac7c6ac072aeda2481a93d4->leave($__internal_ebdd0c4381dfe678cb509dec17921044bea06b4c2ac7c6ac072aeda2481a93d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
