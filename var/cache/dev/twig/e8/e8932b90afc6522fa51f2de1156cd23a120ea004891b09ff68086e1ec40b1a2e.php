<?php

/* base.html.twig */
class __TwigTemplate_18988fdf2a9e10dfcc935ee30f72a546d3a9a563357438280e20b6362b137c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11398971021d02273803827783a6f196139938e5683552808193c3d067910eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11398971021d02273803827783a6f196139938e5683552808193c3d067910eef->enter($__internal_11398971021d02273803827783a6f196139938e5683552808193c3d067910eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ed86f972ffd6712e111b582efa160e103510a5373015c0368fd6fa558f9c3098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86f972ffd6712e111b582efa160e103510a5373015c0368fd6fa558f9c3098->enter($__internal_ed86f972ffd6712e111b582efa160e103510a5373015c0368fd6fa558f9c3098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_11398971021d02273803827783a6f196139938e5683552808193c3d067910eef->leave($__internal_11398971021d02273803827783a6f196139938e5683552808193c3d067910eef_prof);

        
        $__internal_ed86f972ffd6712e111b582efa160e103510a5373015c0368fd6fa558f9c3098->leave($__internal_ed86f972ffd6712e111b582efa160e103510a5373015c0368fd6fa558f9c3098_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9734124656bdb1da305ec76b0584ab8923bf7faa26306645a5434b401a29400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9734124656bdb1da305ec76b0584ab8923bf7faa26306645a5434b401a29400->enter($__internal_e9734124656bdb1da305ec76b0584ab8923bf7faa26306645a5434b401a29400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92e9a7fbc5f668404775ef383d74fe55d3f3cff5b25e4a138879dc14e14d9892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e9a7fbc5f668404775ef383d74fe55d3f3cff5b25e4a138879dc14e14d9892->enter($__internal_92e9a7fbc5f668404775ef383d74fe55d3f3cff5b25e4a138879dc14e14d9892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_92e9a7fbc5f668404775ef383d74fe55d3f3cff5b25e4a138879dc14e14d9892->leave($__internal_92e9a7fbc5f668404775ef383d74fe55d3f3cff5b25e4a138879dc14e14d9892_prof);

        
        $__internal_e9734124656bdb1da305ec76b0584ab8923bf7faa26306645a5434b401a29400->leave($__internal_e9734124656bdb1da305ec76b0584ab8923bf7faa26306645a5434b401a29400_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f9dbfd7d51ffb0747a9a4ed2253ebb5866e2a18074f103dec6a756009ddeaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9dbfd7d51ffb0747a9a4ed2253ebb5866e2a18074f103dec6a756009ddeaa7->enter($__internal_1f9dbfd7d51ffb0747a9a4ed2253ebb5866e2a18074f103dec6a756009ddeaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_19e8e7ae0b842a61d2dbaadecd38d557f038ae50eec171edcc33f34d40c063e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e8e7ae0b842a61d2dbaadecd38d557f038ae50eec171edcc33f34d40c063e9->enter($__internal_19e8e7ae0b842a61d2dbaadecd38d557f038ae50eec171edcc33f34d40c063e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19e8e7ae0b842a61d2dbaadecd38d557f038ae50eec171edcc33f34d40c063e9->leave($__internal_19e8e7ae0b842a61d2dbaadecd38d557f038ae50eec171edcc33f34d40c063e9_prof);

        
        $__internal_1f9dbfd7d51ffb0747a9a4ed2253ebb5866e2a18074f103dec6a756009ddeaa7->leave($__internal_1f9dbfd7d51ffb0747a9a4ed2253ebb5866e2a18074f103dec6a756009ddeaa7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6168db488e0bb5ee05f3d6bf1ccce00e3565c7425694754830566e5985846b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6168db488e0bb5ee05f3d6bf1ccce00e3565c7425694754830566e5985846b60->enter($__internal_6168db488e0bb5ee05f3d6bf1ccce00e3565c7425694754830566e5985846b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14148df7490662e1b9731210373d00b1c13f091c00192f118abdf5049bb99321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14148df7490662e1b9731210373d00b1c13f091c00192f118abdf5049bb99321->enter($__internal_14148df7490662e1b9731210373d00b1c13f091c00192f118abdf5049bb99321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14148df7490662e1b9731210373d00b1c13f091c00192f118abdf5049bb99321->leave($__internal_14148df7490662e1b9731210373d00b1c13f091c00192f118abdf5049bb99321_prof);

        
        $__internal_6168db488e0bb5ee05f3d6bf1ccce00e3565c7425694754830566e5985846b60->leave($__internal_6168db488e0bb5ee05f3d6bf1ccce00e3565c7425694754830566e5985846b60_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc5c24b0b83ac6451133907dfb60e1d640c1aabaa84f3e03c9e40ac131f3bbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5c24b0b83ac6451133907dfb60e1d640c1aabaa84f3e03c9e40ac131f3bbe3->enter($__internal_cc5c24b0b83ac6451133907dfb60e1d640c1aabaa84f3e03c9e40ac131f3bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e63abe85e2e1c8d93c7496d556fbd52095460dde984e5305dda0267a6538972c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63abe85e2e1c8d93c7496d556fbd52095460dde984e5305dda0267a6538972c->enter($__internal_e63abe85e2e1c8d93c7496d556fbd52095460dde984e5305dda0267a6538972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e63abe85e2e1c8d93c7496d556fbd52095460dde984e5305dda0267a6538972c->leave($__internal_e63abe85e2e1c8d93c7496d556fbd52095460dde984e5305dda0267a6538972c_prof);

        
        $__internal_cc5c24b0b83ac6451133907dfb60e1d640c1aabaa84f3e03c9e40ac131f3bbe3->leave($__internal_cc5c24b0b83ac6451133907dfb60e1d640c1aabaa84f3e03c9e40ac131f3bbe3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/app/Resources/views/base.html.twig");
    }
}
