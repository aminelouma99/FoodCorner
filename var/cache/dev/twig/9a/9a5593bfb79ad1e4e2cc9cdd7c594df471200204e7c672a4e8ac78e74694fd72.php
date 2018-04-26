<?php

/* RestoBundle::base.html.twig */
class __TwigTemplate_dc6bed2d3c30c91b7c43497bebbc0852969dea4ef6bb4820a477bf9afff9af11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1b86e26375a087acace40d2c1e150e346095c25ade62b1f43b7f1df1d157aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1b86e26375a087acace40d2c1e150e346095c25ade62b1f43b7f1df1d157aa->enter($__internal_cf1b86e26375a087acace40d2c1e150e346095c25ade62b1f43b7f1df1d157aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestoBundle::base.html.twig"));

        $__internal_abcfb5881a452310f58b061998134411568d13a9d6d7592da50b5be4673a906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcfb5881a452310f58b061998134411568d13a9d6d7592da50b5be4673a906a->enter($__internal_abcfb5881a452310f58b061998134411568d13a9d6d7592da50b5be4673a906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RestoBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>

<html>

<head>

    <meta charset=\"utf-8\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
</head>

<body>

    <div class=\"row\">

        <!-- Static navbar -->

        <nav class=\"navbar navbar-default navbar-fixed-top\">

            <div class=\"navbar-header\">

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">

            <span class=\"sr-only\">Toggle navigation</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

          </button>

                <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/resto/images/brand.png"), "html", null, true);
        echo "\" class=\"img-responsive brand\"></a>

            </div>

            <div id=\"navbar\" class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    <li class=\"active\"><a href=\"#\">Accueil</a></li>

                    <li><a href=\"#\">Menu</a></li>

                    <li><a href=\"#\">Reservation</a></li>

                    <li><a href=\"#\">Commande</a></li>

                    <li><a href=\"#\">A propos</a></li>

                    <li><a href=\"#\">Contact</a></li>

                </ul>

            </div>

            <!--/.nav-collapse -->

            <!--/.container-fluid -->

        </nav>

        <!-- Main component for a primary marketing message or call to action -->

    </div>

    <div class=\"container block\">

        <div class=\"row\">

            <div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-8 pull-left \">

                ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
            </div>

        </div>

    </div>

    <footer>

        <div class=\"footer\" id=\"footer\">

            <div class=\"container\">

                <div class=\"row\">

​

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

​

                        <i class=\"fa fa-map-marker fa-2x info\" aria-hidden=\"true\"></i><br/> 3 RUE THOMAS MANN
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-envelope fa-2x info\" aria-hidden=\"true\"></i><br/>foodcorner@gmail.com

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-phone fa-2x info\" aria-hidden=\"true\"></i><br/>12356712

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

                        <ul class=\"social\">

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-facebook\">  </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-twitter\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-pinterest\">   </i> </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--/.row-->

            </div>

            <!--/.container-->

        </div>

        <!--/.footer-->

        <div class=\"footer-bottom\">

            <div class=\"container\">

                <p class=\"text-center\"> Copyright @LOUMANI DIALLO UP7. All right reserved. </p>

            </div>

        </div>

        <!--/.footer-bottom-->

    </footer>

​</body>

</html>
";
        
        $__internal_cf1b86e26375a087acace40d2c1e150e346095c25ade62b1f43b7f1df1d157aa->leave($__internal_cf1b86e26375a087acace40d2c1e150e346095c25ade62b1f43b7f1df1d157aa_prof);

        
        $__internal_abcfb5881a452310f58b061998134411568d13a9d6d7592da50b5be4673a906a->leave($__internal_abcfb5881a452310f58b061998134411568d13a9d6d7592da50b5be4673a906a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_dff9cb79539cbdce768a64117a87ab4bd8bc6ad3bed55fd538bc63d89f668600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff9cb79539cbdce768a64117a87ab4bd8bc6ad3bed55fd538bc63d89f668600->enter($__internal_dff9cb79539cbdce768a64117a87ab4bd8bc6ad3bed55fd538bc63d89f668600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdb26cb3490eee3f9a771df0fc9db5e0df94c44294f4868eb6c00ca5a2a6dbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb26cb3490eee3f9a771df0fc9db5e0df94c44294f4868eb6c00ca5a2a6dbbd->enter($__internal_bdb26cb3490eee3f9a771df0fc9db5e0df94c44294f4868eb6c00ca5a2a6dbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Food Coner";
        
        $__internal_bdb26cb3490eee3f9a771df0fc9db5e0df94c44294f4868eb6c00ca5a2a6dbbd->leave($__internal_bdb26cb3490eee3f9a771df0fc9db5e0df94c44294f4868eb6c00ca5a2a6dbbd_prof);

        
        $__internal_dff9cb79539cbdce768a64117a87ab4bd8bc6ad3bed55fd538bc63d89f668600->leave($__internal_dff9cb79539cbdce768a64117a87ab4bd8bc6ad3bed55fd538bc63d89f668600_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8a44eb4fbf8df2bebcf1734ed3b5e57d8617b06ea53c459b5eeb7f51d7e994e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a44eb4fbf8df2bebcf1734ed3b5e57d8617b06ea53c459b5eeb7f51d7e994e->enter($__internal_d8a44eb4fbf8df2bebcf1734ed3b5e57d8617b06ea53c459b5eeb7f51d7e994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f7d77f0037122c1f3f47c65aead555e6d52704ea6848034b8ab0a49b91f22d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d77f0037122c1f3f47c65aead555e6d52704ea6848034b8ab0a49b91f22d62->enter($__internal_f7d77f0037122c1f3f47c65aead555e6d52704ea6848034b8ab0a49b91f22d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/resto/css/mystyle.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_f7d77f0037122c1f3f47c65aead555e6d52704ea6848034b8ab0a49b91f22d62->leave($__internal_f7d77f0037122c1f3f47c65aead555e6d52704ea6848034b8ab0a49b91f22d62_prof);

        
        $__internal_d8a44eb4fbf8df2bebcf1734ed3b5e57d8617b06ea53c459b5eeb7f51d7e994e->leave($__internal_d8a44eb4fbf8df2bebcf1734ed3b5e57d8617b06ea53c459b5eeb7f51d7e994e_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_58c9e62dbda053969dc429369111e125f6f4bfffe73454f6c283e05c29e1ce08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9e62dbda053969dc429369111e125f6f4bfffe73454f6c283e05c29e1ce08->enter($__internal_58c9e62dbda053969dc429369111e125f6f4bfffe73454f6c283e05c29e1ce08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66296386992a532bb12475231d353a956032e14f454decc6048071fe002b0082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66296386992a532bb12475231d353a956032e14f454decc6048071fe002b0082->enter($__internal_66296386992a532bb12475231d353a956032e14f454decc6048071fe002b0082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 90
        echo "
                <p class=\" text-justify presentation lead\">

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at tortor a urna ultricies sagittis ut sed dui. Vivamus non mollis libero, a tincidunt felis. Etiam augue libero, congue a velit nec, feugiat aliquam turpis. Integer id aliquet ante. Curabitur vulputate lectus vel sem vulputate convallis dapibus quis justo. Nulla sit amet tortor ac ante iaculis ultricies nec in ex. Fusce sit amet nisi neque. Aenean rutrum efficitur efficitur. In hac habitasse platea dictumst.

                </p>

                ";
        
        $__internal_66296386992a532bb12475231d353a956032e14f454decc6048071fe002b0082->leave($__internal_66296386992a532bb12475231d353a956032e14f454decc6048071fe002b0082_prof);

        
        $__internal_58c9e62dbda053969dc429369111e125f6f4bfffe73454f6c283e05c29e1ce08->leave($__internal_58c9e62dbda053969dc429369111e125f6f4bfffe73454f6c283e05c29e1ce08_prof);

    }

    public function getTemplateName()
    {
        return "RestoBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 90,  287 => 89,  274 => 21,  269 => 19,  264 => 17,  259 => 15,  254 => 13,  251 => 12,  242 => 11,  224 => 9,  117 => 98,  115 => 89,  72 => 49,  45 => 24,  43 => 11,  38 => 9,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>

<html>

<head>

    <meta charset=\"utf-8\">

    <title>{% block title %}Food Coner{% endblock %}</title>

    {% block stylesheets %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/resto/css/mystyle.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />

    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>

    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>

    {% endblock %}

</head>

<body>

    <div class=\"row\">

        <!-- Static navbar -->

        <nav class=\"navbar navbar-default navbar-fixed-top\">

            <div class=\"navbar-header\">

                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">

            <span class=\"sr-only\">Toggle navigation</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

          </button>

                <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('bundles/resto/images/brand.png') }}\" class=\"img-responsive brand\"></a>

            </div>

            <div id=\"navbar\" class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav\">

                    <li class=\"active\"><a href=\"#\">Accueil</a></li>

                    <li><a href=\"#\">Menu</a></li>

                    <li><a href=\"#\">Reservation</a></li>

                    <li><a href=\"#\">Commande</a></li>

                    <li><a href=\"#\">A propos</a></li>

                    <li><a href=\"#\">Contact</a></li>

                </ul>

            </div>

            <!--/.nav-collapse -->

            <!--/.container-fluid -->

        </nav>

        <!-- Main component for a primary marketing message or call to action -->

    </div>

    <div class=\"container block\">

        <div class=\"row\">

            <div class=\"col-lg-6 col-md-6 col-sm-8 col-xs-8 pull-left \">

                {% block body %}

                <p class=\" text-justify presentation lead\">

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at tortor a urna ultricies sagittis ut sed dui. Vivamus non mollis libero, a tincidunt felis. Etiam augue libero, congue a velit nec, feugiat aliquam turpis. Integer id aliquet ante. Curabitur vulputate lectus vel sem vulputate convallis dapibus quis justo. Nulla sit amet tortor ac ante iaculis ultricies nec in ex. Fusce sit amet nisi neque. Aenean rutrum efficitur efficitur. In hac habitasse platea dictumst.

                </p>

                {% endblock %}

            </div>

        </div>

    </div>

    <footer>

        <div class=\"footer\" id=\"footer\">

            <div class=\"container\">

                <div class=\"row\">

​

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

​

                        <i class=\"fa fa-map-marker fa-2x info\" aria-hidden=\"true\"></i><br/> 3 RUE THOMAS MANN
                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-envelope fa-2x info\" aria-hidden=\"true\"></i><br/>foodcorner@gmail.com

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 \">

                        <i class=\"fa fa-phone fa-2x info\" aria-hidden=\"true\"></i><br/>12356712

                    </div>

                    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">

                        <ul class=\"social\">

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-facebook\">  </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-twitter\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>

                            </li>

                            <li>

                                <a href=\"#\"> <i class=\"fa fa-pinterest\">   </i> </a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--/.row-->

            </div>

            <!--/.container-->

        </div>

        <!--/.footer-->

        <div class=\"footer-bottom\">

            <div class=\"container\">

                <p class=\"text-center\"> Copyright @LOUMANI DIALLO UP7. All right reserved. </p>

            </div>

        </div>

        <!--/.footer-bottom-->

    </footer>

​</body>

</html>
", "RestoBundle::base.html.twig", "/home/sircourtois/Documents/L3_S2/PW6/FoodCorner/src/RestoBundle/Resources/views/base.html.twig");
    }
}
