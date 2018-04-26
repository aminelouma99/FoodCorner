<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4af8032cf6c84ca0fa65473f470a827519135499bbecad697c4e14f589dbf415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff3554960754826b14ef2ec37753e577a0e98b3edc44a4a1fddabce6e93d0690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3554960754826b14ef2ec37753e577a0e98b3edc44a4a1fddabce6e93d0690->enter($__internal_ff3554960754826b14ef2ec37753e577a0e98b3edc44a4a1fddabce6e93d0690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8b372abe39c3c3eef26cf88071dcbb6d5eef88568b0ec045772632085b6b1a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b372abe39c3c3eef26cf88071dcbb6d5eef88568b0ec045772632085b6b1a2a->enter($__internal_8b372abe39c3c3eef26cf88071dcbb6d5eef88568b0ec045772632085b6b1a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff3554960754826b14ef2ec37753e577a0e98b3edc44a4a1fddabce6e93d0690->leave($__internal_ff3554960754826b14ef2ec37753e577a0e98b3edc44a4a1fddabce6e93d0690_prof);

        
        $__internal_8b372abe39c3c3eef26cf88071dcbb6d5eef88568b0ec045772632085b6b1a2a->leave($__internal_8b372abe39c3c3eef26cf88071dcbb6d5eef88568b0ec045772632085b6b1a2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_abbe96a554c0522a13f2f7723f2234481bcdc5006c2f58ba07621fe3040b9878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbe96a554c0522a13f2f7723f2234481bcdc5006c2f58ba07621fe3040b9878->enter($__internal_abbe96a554c0522a13f2f7723f2234481bcdc5006c2f58ba07621fe3040b9878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ca88fda57bd713e1d4f736d046101720eda1b61a1679fb311c6243e61086824b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca88fda57bd713e1d4f736d046101720eda1b61a1679fb311c6243e61086824b->enter($__internal_ca88fda57bd713e1d4f736d046101720eda1b61a1679fb311c6243e61086824b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca88fda57bd713e1d4f736d046101720eda1b61a1679fb311c6243e61086824b->leave($__internal_ca88fda57bd713e1d4f736d046101720eda1b61a1679fb311c6243e61086824b_prof);

        
        $__internal_abbe96a554c0522a13f2f7723f2234481bcdc5006c2f58ba07621fe3040b9878->leave($__internal_abbe96a554c0522a13f2f7723f2234481bcdc5006c2f58ba07621fe3040b9878_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_894703bc3e6f221673497ba410bac27243bae3710cdec1ab2d8a59dc90c709ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894703bc3e6f221673497ba410bac27243bae3710cdec1ab2d8a59dc90c709ab->enter($__internal_894703bc3e6f221673497ba410bac27243bae3710cdec1ab2d8a59dc90c709ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3655b62d880484ceb565438d478a1d538aa792962213c46cde357737ba828860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3655b62d880484ceb565438d478a1d538aa792962213c46cde357737ba828860->enter($__internal_3655b62d880484ceb565438d478a1d538aa792962213c46cde357737ba828860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3655b62d880484ceb565438d478a1d538aa792962213c46cde357737ba828860->leave($__internal_3655b62d880484ceb565438d478a1d538aa792962213c46cde357737ba828860_prof);

        
        $__internal_894703bc3e6f221673497ba410bac27243bae3710cdec1ab2d8a59dc90c709ab->leave($__internal_894703bc3e6f221673497ba410bac27243bae3710cdec1ab2d8a59dc90c709ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a11a9ca99bb44d3a2d1e79cdc96c8562cab9fb285efb058f7a0a49ec808cc008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11a9ca99bb44d3a2d1e79cdc96c8562cab9fb285efb058f7a0a49ec808cc008->enter($__internal_a11a9ca99bb44d3a2d1e79cdc96c8562cab9fb285efb058f7a0a49ec808cc008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_724d1a6e727155b3e29859ad7520065e6c6881b3ea82e46b535d070a50915494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724d1a6e727155b3e29859ad7520065e6c6881b3ea82e46b535d070a50915494->enter($__internal_724d1a6e727155b3e29859ad7520065e6c6881b3ea82e46b535d070a50915494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_724d1a6e727155b3e29859ad7520065e6c6881b3ea82e46b535d070a50915494->leave($__internal_724d1a6e727155b3e29859ad7520065e6c6881b3ea82e46b535d070a50915494_prof);

        
        $__internal_a11a9ca99bb44d3a2d1e79cdc96c8562cab9fb285efb058f7a0a49ec808cc008->leave($__internal_a11a9ca99bb44d3a2d1e79cdc96c8562cab9fb285efb058f7a0a49ec808cc008_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
