<?php

/* reservation/new.html.twig */
class __TwigTemplate_e21e33f91227690bde4f5612f36b4ddeb784d2f842dcf100d5a01982dbb5347a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97bda33bd5f0351249f414f5c20ec5c53867f4701e606349f9c4c5b0d13e22b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bda33bd5f0351249f414f5c20ec5c53867f4701e606349f9c4c5b0d13e22b0->enter($__internal_97bda33bd5f0351249f414f5c20ec5c53867f4701e606349f9c4c5b0d13e22b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_f63848e93486a5f12e827744994d46e65eb0bed330bf7476fdf4be02bdb2c969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63848e93486a5f12e827744994d46e65eb0bed330bf7476fdf4be02bdb2c969->enter($__internal_f63848e93486a5f12e827744994d46e65eb0bed330bf7476fdf4be02bdb2c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97bda33bd5f0351249f414f5c20ec5c53867f4701e606349f9c4c5b0d13e22b0->leave($__internal_97bda33bd5f0351249f414f5c20ec5c53867f4701e606349f9c4c5b0d13e22b0_prof);

        
        $__internal_f63848e93486a5f12e827744994d46e65eb0bed330bf7476fdf4be02bdb2c969->leave($__internal_f63848e93486a5f12e827744994d46e65eb0bed330bf7476fdf4be02bdb2c969_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59be34871440ced199154561ba5c968501f6cd559b711fdf8bbbd3950417b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59be34871440ced199154561ba5c968501f6cd559b711fdf8bbbd3950417b6e->enter($__internal_a59be34871440ced199154561ba5c968501f6cd559b711fdf8bbbd3950417b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd4ade6c417745a412177b60cdbd0bc3cb66855ed0c19bd42acf9490fea91e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4ade6c417745a412177b60cdbd0bc3cb66855ed0c19bd42acf9490fea91e27->enter($__internal_bd4ade6c417745a412177b60cdbd0bc3cb66855ed0c19bd42acf9490fea91e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bd4ade6c417745a412177b60cdbd0bc3cb66855ed0c19bd42acf9490fea91e27->leave($__internal_bd4ade6c417745a412177b60cdbd0bc3cb66855ed0c19bd42acf9490fea91e27_prof);

        
        $__internal_a59be34871440ced199154561ba5c968501f6cd559b711fdf8bbbd3950417b6e->leave($__internal_a59be34871440ced199154561ba5c968501f6cd559b711fdf8bbbd3950417b6e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "reservation/new.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/app/Resources/views/reservation/new.html.twig");
    }
}
