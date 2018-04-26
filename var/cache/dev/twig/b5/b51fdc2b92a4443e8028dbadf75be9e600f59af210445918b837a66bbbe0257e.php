<?php

/* reservation/show.html.twig */
class __TwigTemplate_4a7f6b697faef03a0380884e8c3f7ea9f3c26f3fa0f37172e534bcff431c94a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/show.html.twig", 1);
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
        $__internal_46d250c0805f230f363e555a5d7b20405b14705723c1c1ada181fae16e06637a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d250c0805f230f363e555a5d7b20405b14705723c1c1ada181fae16e06637a->enter($__internal_46d250c0805f230f363e555a5d7b20405b14705723c1c1ada181fae16e06637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_a4e1a2c693bbd7a41f2bf655005939ac2c48e5c6e0fdae2d5df3fbcd8cbce471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e1a2c693bbd7a41f2bf655005939ac2c48e5c6e0fdae2d5df3fbcd8cbce471->enter($__internal_a4e1a2c693bbd7a41f2bf655005939ac2c48e5c6e0fdae2d5df3fbcd8cbce471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d250c0805f230f363e555a5d7b20405b14705723c1c1ada181fae16e06637a->leave($__internal_46d250c0805f230f363e555a5d7b20405b14705723c1c1ada181fae16e06637a_prof);

        
        $__internal_a4e1a2c693bbd7a41f2bf655005939ac2c48e5c6e0fdae2d5df3fbcd8cbce471->leave($__internal_a4e1a2c693bbd7a41f2bf655005939ac2c48e5c6e0fdae2d5df3fbcd8cbce471_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e999ac68069be1f101dbb512ee50e2630f1754bdf0a718a911057cb9574ec408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e999ac68069be1f101dbb512ee50e2630f1754bdf0a718a911057cb9574ec408->enter($__internal_e999ac68069be1f101dbb512ee50e2630f1754bdf0a718a911057cb9574ec408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d260b66d8ca82464149ea49a03ce81b2f58a906e1a060eafafe06aef7aa6583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d260b66d8ca82464149ea49a03ce81b2f58a906e1a060eafafe06aef7aa6583->enter($__internal_9d260b66d8ca82464149ea49a03ce81b2f58a906e1a060eafafe06aef7aa6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nbpersonne</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "nbPersonne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>";
        // line 38
        if ($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "heure", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "heure", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9d260b66d8ca82464149ea49a03ce81b2f58a906e1a060eafafe06aef7aa6583->leave($__internal_9d260b66d8ca82464149ea49a03ce81b2f58a906e1a060eafafe06aef7aa6583_prof);

        
        $__internal_e999ac68069be1f101dbb512ee50e2630f1754bdf0a718a911057cb9574ec408->leave($__internal_e999ac68069be1f101dbb512ee50e2630f1754bdf0a718a911057cb9574ec408_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  132 => 51,  126 => 48,  120 => 45,  108 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservation.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ reservation.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ reservation.prenom }}</td>
            </tr>
            <tr>
                <th>Nbpersonne</th>
                <td>{{ reservation.nbPersonne }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ reservation.tel }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ reservation.email }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Heure</th>
                <td>{% if reservation.heure %}{{ reservation.heure|date('H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservation/show.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/app/Resources/views/reservation/show.html.twig");
    }
}
