<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_300e24664072000e31f28e62c3b4619602262d1587aec5122bf0f42584fd9ca8 extends Twig_Template
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
        $__internal_783bec552e316eeb22b2373945d21fb819be16d1b3c02e596eb7459137bf1dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783bec552e316eeb22b2373945d21fb819be16d1b3c02e596eb7459137bf1dcd->enter($__internal_783bec552e316eeb22b2373945d21fb819be16d1b3c02e596eb7459137bf1dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_753fbd9777a139230a1335afccd7ba8ba941dbb4485118933281151c68a53b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753fbd9777a139230a1335afccd7ba8ba941dbb4485118933281151c68a53b27->enter($__internal_753fbd9777a139230a1335afccd7ba8ba941dbb4485118933281151c68a53b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_783bec552e316eeb22b2373945d21fb819be16d1b3c02e596eb7459137bf1dcd->leave($__internal_783bec552e316eeb22b2373945d21fb819be16d1b3c02e596eb7459137bf1dcd_prof);

        
        $__internal_753fbd9777a139230a1335afccd7ba8ba941dbb4485118933281151c68a53b27->leave($__internal_753fbd9777a139230a1335afccd7ba8ba941dbb4485118933281151c68a53b27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
