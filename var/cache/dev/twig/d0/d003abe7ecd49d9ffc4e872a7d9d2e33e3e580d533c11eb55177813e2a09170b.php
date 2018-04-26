<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd55e60d8a4547de6470da4273ffc1a3ec2a192dfc5313958a93a08c97017b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9338d6d643293708a81704fa9cc10b9b88fc063183cbea1539f4ef25e99addae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9338d6d643293708a81704fa9cc10b9b88fc063183cbea1539f4ef25e99addae->enter($__internal_9338d6d643293708a81704fa9cc10b9b88fc063183cbea1539f4ef25e99addae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a5e6accf153e7317c986fbfb189c9f81a0b1f0add1147fc46936771a6ca616a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e6accf153e7317c986fbfb189c9f81a0b1f0add1147fc46936771a6ca616a3->enter($__internal_a5e6accf153e7317c986fbfb189c9f81a0b1f0add1147fc46936771a6ca616a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9338d6d643293708a81704fa9cc10b9b88fc063183cbea1539f4ef25e99addae->leave($__internal_9338d6d643293708a81704fa9cc10b9b88fc063183cbea1539f4ef25e99addae_prof);

        
        $__internal_a5e6accf153e7317c986fbfb189c9f81a0b1f0add1147fc46936771a6ca616a3->leave($__internal_a5e6accf153e7317c986fbfb189c9f81a0b1f0add1147fc46936771a6ca616a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7d7ed080214c34101f20bda93545d67e44ef42325887ab49d7e51fc587ec78f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d7ed080214c34101f20bda93545d67e44ef42325887ab49d7e51fc587ec78f->enter($__internal_f7d7ed080214c34101f20bda93545d67e44ef42325887ab49d7e51fc587ec78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e447f3b3804df96d06c59cf04e0866cf23eaf5642d346fbd586e2be4a753331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e447f3b3804df96d06c59cf04e0866cf23eaf5642d346fbd586e2be4a753331->enter($__internal_3e447f3b3804df96d06c59cf04e0866cf23eaf5642d346fbd586e2be4a753331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3e447f3b3804df96d06c59cf04e0866cf23eaf5642d346fbd586e2be4a753331->leave($__internal_3e447f3b3804df96d06c59cf04e0866cf23eaf5642d346fbd586e2be4a753331_prof);

        
        $__internal_f7d7ed080214c34101f20bda93545d67e44ef42325887ab49d7e51fc587ec78f->leave($__internal_f7d7ed080214c34101f20bda93545d67e44ef42325887ab49d7e51fc587ec78f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e18553af3d07fda23c01bfacb25aec01fed72a0b81eca20e4de4e80f988176e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18553af3d07fda23c01bfacb25aec01fed72a0b81eca20e4de4e80f988176e4->enter($__internal_e18553af3d07fda23c01bfacb25aec01fed72a0b81eca20e4de4e80f988176e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d706a3bdb376e5287ca84be31c0b51d69808ebfd2376e901aa54f1658afa7d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d706a3bdb376e5287ca84be31c0b51d69808ebfd2376e901aa54f1658afa7d3c->enter($__internal_d706a3bdb376e5287ca84be31c0b51d69808ebfd2376e901aa54f1658afa7d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d706a3bdb376e5287ca84be31c0b51d69808ebfd2376e901aa54f1658afa7d3c->leave($__internal_d706a3bdb376e5287ca84be31c0b51d69808ebfd2376e901aa54f1658afa7d3c_prof);

        
        $__internal_e18553af3d07fda23c01bfacb25aec01fed72a0b81eca20e4de4e80f988176e4->leave($__internal_e18553af3d07fda23c01bfacb25aec01fed72a0b81eca20e4de4e80f988176e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac63f13975476bad68a4415e3c14397f3ce6b4b6e5b77626cb47333163d2732e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac63f13975476bad68a4415e3c14397f3ce6b4b6e5b77626cb47333163d2732e->enter($__internal_ac63f13975476bad68a4415e3c14397f3ce6b4b6e5b77626cb47333163d2732e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05fa06840eba0d04ff132e1d49868f62eea60aee5c1005cf6ddb23b38cc40aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fa06840eba0d04ff132e1d49868f62eea60aee5c1005cf6ddb23b38cc40aaa->enter($__internal_05fa06840eba0d04ff132e1d49868f62eea60aee5c1005cf6ddb23b38cc40aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_05fa06840eba0d04ff132e1d49868f62eea60aee5c1005cf6ddb23b38cc40aaa->leave($__internal_05fa06840eba0d04ff132e1d49868f62eea60aee5c1005cf6ddb23b38cc40aaa_prof);

        
        $__internal_ac63f13975476bad68a4415e3c14397f3ce6b4b6e5b77626cb47333163d2732e->leave($__internal_ac63f13975476bad68a4415e3c14397f3ce6b4b6e5b77626cb47333163d2732e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
