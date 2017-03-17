<?php

/* base.html.twig */
class __TwigTemplate_64cf2b90eb0ec73431255ca40fb0f9a8f517493088daeb79d1ee905f66d392c4 extends Twig_Template
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
        $__internal_b9b8148f131e7909933f8446641d69d5300b4ecc4b79e62f66be30aed800e5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b8148f131e7909933f8446641d69d5300b4ecc4b79e62f66be30aed800e5c1->enter($__internal_b9b8148f131e7909933f8446641d69d5300b4ecc4b79e62f66be30aed800e5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b9b8148f131e7909933f8446641d69d5300b4ecc4b79e62f66be30aed800e5c1->leave($__internal_b9b8148f131e7909933f8446641d69d5300b4ecc4b79e62f66be30aed800e5c1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_07565a004bfa7bc504c6e03c87ba2228465adaa9dd8577fcb9a9b637e9b5eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07565a004bfa7bc504c6e03c87ba2228465adaa9dd8577fcb9a9b637e9b5eabc->enter($__internal_07565a004bfa7bc504c6e03c87ba2228465adaa9dd8577fcb9a9b637e9b5eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07565a004bfa7bc504c6e03c87ba2228465adaa9dd8577fcb9a9b637e9b5eabc->leave($__internal_07565a004bfa7bc504c6e03c87ba2228465adaa9dd8577fcb9a9b637e9b5eabc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_adcdc89acf0d41ead3ada8b8e0b15007b5f533f709151a4cf1c1f8a777d3e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcdc89acf0d41ead3ada8b8e0b15007b5f533f709151a4cf1c1f8a777d3e6ef->enter($__internal_adcdc89acf0d41ead3ada8b8e0b15007b5f533f709151a4cf1c1f8a777d3e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_adcdc89acf0d41ead3ada8b8e0b15007b5f533f709151a4cf1c1f8a777d3e6ef->leave($__internal_adcdc89acf0d41ead3ada8b8e0b15007b5f533f709151a4cf1c1f8a777d3e6ef_prof);

    }

    // line 43
    public function block_nav($context, array $blocks = array())
    {
        $__internal_93bcd398c4ca056eaea6a617968a96d52e42bced617041d29005411afbc557f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bcd398c4ca056eaea6a617968a96d52e42bced617041d29005411afbc557f0->enter($__internal_93bcd398c4ca056eaea6a617968a96d52e42bced617041d29005411afbc557f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::Nav/nav.html.twig", "base.html.twig", 43)->display($context);
        
        $__internal_93bcd398c4ca056eaea6a617968a96d52e42bced617041d29005411afbc557f0->leave($__internal_93bcd398c4ca056eaea6a617968a96d52e42bced617041d29005411afbc557f0_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c8379e1184a6dcea459717158c7ccd3f983d8460004898dc138b10394ffe17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c8379e1184a6dcea459717158c7ccd3f983d8460004898dc138b10394ffe17->enter($__internal_60c8379e1184a6dcea459717158c7ccd3f983d8460004898dc138b10394ffe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60c8379e1184a6dcea459717158c7ccd3f983d8460004898dc138b10394ffe17->leave($__internal_60c8379e1184a6dcea459717158c7ccd3f983d8460004898dc138b10394ffe17_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6e5ac38f8be8d3466a6f24ebf1f89e47519117c7e6ba0b1913215832ed910ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e5ac38f8be8d3466a6f24ebf1f89e47519117c7e6ba0b1913215832ed910ab->enter($__internal_e6e5ac38f8be8d3466a6f24ebf1f89e47519117c7e6ba0b1913215832ed910ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e6e5ac38f8be8d3466a6f24ebf1f89e47519117c7e6ba0b1913215832ed910ab->leave($__internal_e6e5ac38f8be8d3466a6f24ebf1f89e47519117c7e6ba0b1913215832ed910ab_prof);

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
