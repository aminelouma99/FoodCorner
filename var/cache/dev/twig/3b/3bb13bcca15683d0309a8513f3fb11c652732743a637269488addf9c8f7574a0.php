<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_58501d5cba2b32954ff284bb7a6b09ceadc72cc1021390cb848ba2fb1dd6115c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee689358a8b0855daf001ebde30d10a1726be76324b30abeb71f56a7f0400cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee689358a8b0855daf001ebde30d10a1726be76324b30abeb71f56a7f0400cfc->enter($__internal_ee689358a8b0855daf001ebde30d10a1726be76324b30abeb71f56a7f0400cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9dd039cc1996fc0a9e3e0a6a24726abf3225eff1a79b619169d36bb976c72a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd039cc1996fc0a9e3e0a6a24726abf3225eff1a79b619169d36bb976c72a76->enter($__internal_9dd039cc1996fc0a9e3e0a6a24726abf3225eff1a79b619169d36bb976c72a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee689358a8b0855daf001ebde30d10a1726be76324b30abeb71f56a7f0400cfc->leave($__internal_ee689358a8b0855daf001ebde30d10a1726be76324b30abeb71f56a7f0400cfc_prof);

        
        $__internal_9dd039cc1996fc0a9e3e0a6a24726abf3225eff1a79b619169d36bb976c72a76->leave($__internal_9dd039cc1996fc0a9e3e0a6a24726abf3225eff1a79b619169d36bb976c72a76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e97668e9dda1fe33c57fc5a007c8b6faf0ac5546892856b95a5975c8dca4f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e97668e9dda1fe33c57fc5a007c8b6faf0ac5546892856b95a5975c8dca4f5c->enter($__internal_0e97668e9dda1fe33c57fc5a007c8b6faf0ac5546892856b95a5975c8dca4f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b46a06528f2084bd398293e4bc58a62c91ff237c92acbb4cf486c2e39cd8e3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46a06528f2084bd398293e4bc58a62c91ff237c92acbb4cf486c2e39cd8e3f6->enter($__internal_b46a06528f2084bd398293e4bc58a62c91ff237c92acbb4cf486c2e39cd8e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b46a06528f2084bd398293e4bc58a62c91ff237c92acbb4cf486c2e39cd8e3f6->leave($__internal_b46a06528f2084bd398293e4bc58a62c91ff237c92acbb4cf486c2e39cd8e3f6_prof);

        
        $__internal_0e97668e9dda1fe33c57fc5a007c8b6faf0ac5546892856b95a5975c8dca4f5c->leave($__internal_0e97668e9dda1fe33c57fc5a007c8b6faf0ac5546892856b95a5975c8dca4f5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
