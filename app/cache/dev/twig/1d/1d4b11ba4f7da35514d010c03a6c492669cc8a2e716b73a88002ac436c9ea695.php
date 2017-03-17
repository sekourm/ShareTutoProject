<?php

/* base.html.twig */
class __TwigTemplate_0ac926ecef84398aad2143d20dae62a1d90db76b4dab02d6ef1cbe754d0e47fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81050a708917edecc200f61e30970ab1c56ac6e3b902882fe005f53b36c3e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81050a708917edecc200f61e30970ab1c56ac6e3b902882fe005f53b36c3e9d6->enter($__internal_81050a708917edecc200f61e30970ab1c56ac6e3b902882fe005f53b36c3e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "
        <!-- Boostrap css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- Css to the project -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/form_anonymous.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tutorial.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/file_tutorial.css"), "html", null, true);
        echo "\">

        <!-- Css to the plugin wisiwig -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugin/wysiwyg.css"), "html", null, true);
        echo "\">

        <!-- Css to the plugin upload -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/plugin/jquery.filer.css"), "html", null, true);
        echo "\">

        <!-- favicon to the project -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- jquery -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Boostrap Js -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- search js -->
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

        <!-- js card of tutorial -->
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/cards/cards.js"), "html", null, true);
        echo "\"></script>

        <!-- Plugin upload Js -->
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/jquery.filer.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugin/custom.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 43
        $this->displayBlock('nav', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_81050a708917edecc200f61e30970ab1c56ac6e3b902882fe005f53b36c3e9d6->leave($__internal_81050a708917edecc200f61e30970ab1c56ac6e3b902882fe005f53b36c3e9d6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac042fa3a496bf959c3ab6977a6efaece6701d38a2bb22213653b1b4e3c8a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac042fa3a496bf959c3ab6977a6efaece6701d38a2bb22213653b1b4e3c8a9d->enter($__internal_aac042fa3a496bf959c3ab6977a6efaece6701d38a2bb22213653b1b4e3c8a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aac042fa3a496bf959c3ab6977a6efaece6701d38a2bb22213653b1b4e3c8a9d->leave($__internal_aac042fa3a496bf959c3ab6977a6efaece6701d38a2bb22213653b1b4e3c8a9d_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b074cd3b07e6f180dd5edd69b8871a8243b2f605f39e565e319db4f7305be69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b074cd3b07e6f180dd5edd69b8871a8243b2f605f39e565e319db4f7305be69a->enter($__internal_b074cd3b07e6f180dd5edd69b8871a8243b2f605f39e565e319db4f7305be69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b074cd3b07e6f180dd5edd69b8871a8243b2f605f39e565e319db4f7305be69a->leave($__internal_b074cd3b07e6f180dd5edd69b8871a8243b2f605f39e565e319db4f7305be69a_prof);

    }

    // line 43
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ba643398980617cba76c0955bc897d354a47869470c1b5efba73b6fc8dee1a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba643398980617cba76c0955bc897d354a47869470c1b5efba73b6fc8dee1a2c->enter($__internal_ba643398980617cba76c0955bc897d354a47869470c1b5efba73b6fc8dee1a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::Nav/nav.html.twig", "base.html.twig", 43)->display($context);
        
        $__internal_ba643398980617cba76c0955bc897d354a47869470c1b5efba73b6fc8dee1a2c->leave($__internal_ba643398980617cba76c0955bc897d354a47869470c1b5efba73b6fc8dee1a2c_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_104a448e42d76970a97e08b137e993941268def469b5684613600dcd2b93e691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104a448e42d76970a97e08b137e993941268def469b5684613600dcd2b93e691->enter($__internal_104a448e42d76970a97e08b137e993941268def469b5684613600dcd2b93e691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_104a448e42d76970a97e08b137e993941268def469b5684613600dcd2b93e691->leave($__internal_104a448e42d76970a97e08b137e993941268def469b5684613600dcd2b93e691_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_183195a6d21aa53637e5e8f484bbffba5f3684de42b8780857fd0a3ecd115e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183195a6d21aa53637e5e8f484bbffba5f3684de42b8780857fd0a3ecd115e30->enter($__internal_183195a6d21aa53637e5e8f484bbffba5f3684de42b8780857fd0a3ecd115e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_183195a6d21aa53637e5e8f484bbffba5f3684de42b8780857fd0a3ecd115e30->leave($__internal_183195a6d21aa53637e5e8f484bbffba5f3684de42b8780857fd0a3ecd115e30_prof);

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
        return array (  179 => 45,  168 => 44,  156 => 43,  145 => 7,  133 => 6,  124 => 46,  121 => 45,  118 => 44,  116 => 43,  110 => 40,  106 => 39,  100 => 36,  94 => 33,  88 => 30,  82 => 27,  76 => 24,  70 => 21,  64 => 18,  58 => 15,  54 => 14,  50 => 13,  44 => 10,  40 => 8,  38 => 7,  34 => 6,  27 => 1,);
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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}

        <!-- Boostrap css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\">

        <!-- Css to the project -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/form_anonymous.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/tutorial.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/file_tutorial.css') }}\">

        <!-- Css to the plugin wisiwig -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugin/wysiwyg.css') }}\">

        <!-- Css to the plugin upload -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/plugin/jquery.filer.css') }}\">

        <!-- favicon to the project -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- jquery -->
        <script src=\"{{ asset('js/jquery.js') }}\"></script>

        <!-- Boostrap Js -->
        <script src=\"{{ asset('js/bootstrap/bootstrap.min.js') }}\"></script>

        <!-- search js -->
        <script src=\"{{ asset('js/search.js') }}\"></script>

        <!-- js card of tutorial -->
        <script src=\"{{ asset('js/cards/cards.js') }}\"></script>

        <!-- Plugin upload Js -->
        <script src=\"{{ asset('js/plugin/jquery.filer.min.js') }}\"></script>
        <script src=\"{{ asset('js/plugin/custom.js') }}\"></script>
    </head>
    <body>
        {% block nav %}{% include '::Nav/nav.html.twig' %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/ShareTutoProject/app/Resources/views/base.html.twig");
    }
}
