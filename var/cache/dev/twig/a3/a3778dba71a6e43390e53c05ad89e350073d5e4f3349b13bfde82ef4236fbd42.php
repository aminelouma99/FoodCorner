<?php

/* RestoBundle::ajoutPlat.html.twig */
class __TwigTemplate_75d8e4111c2812931c3750420a8373a51d582fc5986e7ca83a16930231e7235e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RestoBundle::base.html.twig", "RestoBundle::ajoutPlat.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RestoBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f270e5743a5a882a48dc226bab8e2b73701a00115356701e064c4baf16617ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f270e5743a5a882a48dc226bab8e2b73701a00115356701e064c4baf16617ea7->enter($__internal_f270e5743a5a882a48dc226bab8e2b73701a00115356701e064c4baf16617ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestoBundle::ajoutPlat.html.twig"));

        $__internal_cdd4558cbfb50aa732c595c506ff512fe0c72ca19ba297733e5ff295ca04c66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd4558cbfb50aa732c595c506ff512fe0c72ca19ba297733e5ff295ca04c66e->enter($__internal_cdd4558cbfb50aa732c595c506ff512fe0c72ca19ba297733e5ff295ca04c66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestoBundle::ajoutPlat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f270e5743a5a882a48dc226bab8e2b73701a00115356701e064c4baf16617ea7->leave($__internal_f270e5743a5a882a48dc226bab8e2b73701a00115356701e064c4baf16617ea7_prof);

        
        $__internal_cdd4558cbfb50aa732c595c506ff512fe0c72ca19ba297733e5ff295ca04c66e->leave($__internal_cdd4558cbfb50aa732c595c506ff512fe0c72ca19ba297733e5ff295ca04c66e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee263045674100a5d949fe6dc9f9d624c0381b1e5bf08e666a258b0e5ed02ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee263045674100a5d949fe6dc9f9d624c0381b1e5bf08e666a258b0e5ed02ab->enter($__internal_1ee263045674100a5d949fe6dc9f9d624c0381b1e5bf08e666a258b0e5ed02ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5493f2dd47afa2ccda687a344176ad26182d9bf3df0c3fa385c051c8d57b8c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5493f2dd47afa2ccda687a344176ad26182d9bf3df0c3fa385c051c8d57b8c8f->enter($__internal_5493f2dd47afa2ccda687a344176ad26182d9bf3df0c3fa385c051c8d57b8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container form-ajout\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-12 col-xs-12\">
            ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_5493f2dd47afa2ccda687a344176ad26182d9bf3df0c3fa385c051c8d57b8c8f->leave($__internal_5493f2dd47afa2ccda687a344176ad26182d9bf3df0c3fa385c051c8d57b8c8f_prof);

        
        $__internal_1ee263045674100a5d949fe6dc9f9d624c0381b1e5bf08e666a258b0e5ed02ab->leave($__internal_1ee263045674100a5d949fe6dc9f9d624c0381b1e5bf08e666a258b0e5ed02ab_prof);

    }

    public function getTemplateName()
    {
        return "RestoBundle::ajoutPlat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'RestoBundle::base.html.twig' %}
{%block body%}
<div class=\"container form-ajout\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-12 col-xs-12\">
            {{form_start(form)}} {{form_widget(form)}}
            <input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\" /> {{form_end(form)}}
        </div>
    </div>
</div>
{%endblock%}
", "RestoBundle::ajoutPlat.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/src/RestoBundle/Resources/views/ajoutPlat.html.twig");
    }
}
