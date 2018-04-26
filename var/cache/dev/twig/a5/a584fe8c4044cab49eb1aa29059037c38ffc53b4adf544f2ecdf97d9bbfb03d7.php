<?php

/* reservation/index.html.twig */
class __TwigTemplate_7f1432c4ea5786a5139b68595e370df2934bc0f7d996730614075a3fb64652ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
        $__internal_fcd50d3ea3b2302d99b1b8ba546ebccee1b2b3ad6c80be118578e7141ef8f286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd50d3ea3b2302d99b1b8ba546ebccee1b2b3ad6c80be118578e7141ef8f286->enter($__internal_fcd50d3ea3b2302d99b1b8ba546ebccee1b2b3ad6c80be118578e7141ef8f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_478a7d7c700c8a36931e0b161a2d82e88b2a6bacde231a2471480faad2ed0610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478a7d7c700c8a36931e0b161a2d82e88b2a6bacde231a2471480faad2ed0610->enter($__internal_478a7d7c700c8a36931e0b161a2d82e88b2a6bacde231a2471480faad2ed0610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd50d3ea3b2302d99b1b8ba546ebccee1b2b3ad6c80be118578e7141ef8f286->leave($__internal_fcd50d3ea3b2302d99b1b8ba546ebccee1b2b3ad6c80be118578e7141ef8f286_prof);

        
        $__internal_478a7d7c700c8a36931e0b161a2d82e88b2a6bacde231a2471480faad2ed0610->leave($__internal_478a7d7c700c8a36931e0b161a2d82e88b2a6bacde231a2471480faad2ed0610_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05fc68775aa1d4859c5e8907b2cccf81fea42ce4f2f6ca3fbef7791964bf1056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fc68775aa1d4859c5e8907b2cccf81fea42ce4f2f6ca3fbef7791964bf1056->enter($__internal_05fc68775aa1d4859c5e8907b2cccf81fea42ce4f2f6ca3fbef7791964bf1056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5986569c262e5a69f41268d53cd754dce733d54211b47944b4ce8911fed42b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5986569c262e5a69f41268d53cd754dce733d54211b47944b4ce8911fed42b05->enter($__internal_5986569c262e5a69f41268d53cd754dce733d54211b47944b4ce8911fed42b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nbpersonne</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nbPersonne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["reservation"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["reservation"], "heure", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservation"], "heure", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_show", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\">Create a new reservation</a>
        </li>
    </ul>
";
        
        $__internal_5986569c262e5a69f41268d53cd754dce733d54211b47944b4ce8911fed42b05->leave($__internal_5986569c262e5a69f41268d53cd754dce733d54211b47944b4ce8911fed42b05_prof);

        
        $__internal_05fc68775aa1d4859c5e8907b2cccf81fea42ce4f2f6ca3fbef7791964bf1056->leave($__internal_05fc68775aa1d4859c5e8907b2cccf81fea42ce4f2f6ca3fbef7791964bf1056_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 48,  134 => 43,  122 => 37,  116 => 34,  107 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nbpersonne</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservation in reservations %}
            <tr>
                <td><a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">{{ reservation.id }}</a></td>
                <td>{{ reservation.nom }}</td>
                <td>{{ reservation.prenom }}</td>
                <td>{{ reservation.nbPersonne }}</td>
                <td>{{ reservation.tel }}</td>
                <td>{{ reservation.email }}</td>
                <td>{% if reservation.date %}{{ reservation.date|date('Y-m-d') }}{% endif %}</td>
                <td>{% if reservation.heure %}{{ reservation.heure|date('H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('reservation_show', { 'id': reservation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('reservation_edit', { 'id': reservation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('reservation_new') }}\">Create a new reservation</a>
        </li>
    </ul>
{% endblock %}
", "reservation/index.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/app/Resources/views/reservation/index.html.twig");
    }
}
