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
        $__internal_d5532d82cbfe56a93b992e8c2073c79580ea12e480c02ee116fc14e4d9690fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5532d82cbfe56a93b992e8c2073c79580ea12e480c02ee116fc14e4d9690fe8->enter($__internal_d5532d82cbfe56a93b992e8c2073c79580ea12e480c02ee116fc14e4d9690fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 44
        $this->displayBlock('nav', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_d5532d82cbfe56a93b992e8c2073c79580ea12e480c02ee116fc14e4d9690fe8->leave($__internal_d5532d82cbfe56a93b992e8c2073c79580ea12e480c02ee116fc14e4d9690fe8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2b485d7cde48e8a978a3ee365a5a0ed08240422393a9923b17a24f1ca67911a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b485d7cde48e8a978a3ee365a5a0ed08240422393a9923b17a24f1ca67911a->enter($__internal_c2b485d7cde48e8a978a3ee365a5a0ed08240422393a9923b17a24f1ca67911a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2b485d7cde48e8a978a3ee365a5a0ed08240422393a9923b17a24f1ca67911a->leave($__internal_c2b485d7cde48e8a978a3ee365a5a0ed08240422393a9923b17a24f1ca67911a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e0eb503c77f4206290723b6850e770776390c88dfcfa6d503f9dac01ac6326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0eb503c77f4206290723b6850e770776390c88dfcfa6d503f9dac01ac6326a->enter($__internal_3e0eb503c77f4206290723b6850e770776390c88dfcfa6d503f9dac01ac6326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e0eb503c77f4206290723b6850e770776390c88dfcfa6d503f9dac01ac6326a->leave($__internal_3e0eb503c77f4206290723b6850e770776390c88dfcfa6d503f9dac01ac6326a_prof);

    }

    // line 44
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c82baa34ca02872db2950cedc1a8f3a8a4be1a1262a219c13becbd1b5b0d0861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82baa34ca02872db2950cedc1a8f3a8a4be1a1262a219c13becbd1b5b0d0861->enter($__internal_c82baa34ca02872db2950cedc1a8f3a8a4be1a1262a219c13becbd1b5b0d0861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::Nav/nav.html.twig", "base.html.twig", 44)->display($context);
        
        $__internal_c82baa34ca02872db2950cedc1a8f3a8a4be1a1262a219c13becbd1b5b0d0861->leave($__internal_c82baa34ca02872db2950cedc1a8f3a8a4be1a1262a219c13becbd1b5b0d0861_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_91117a0a73a166184d8bb1477b12dc84e1a646872df4631bc5c3f956cabefbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91117a0a73a166184d8bb1477b12dc84e1a646872df4631bc5c3f956cabefbb0->enter($__internal_91117a0a73a166184d8bb1477b12dc84e1a646872df4631bc5c3f956cabefbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91117a0a73a166184d8bb1477b12dc84e1a646872df4631bc5c3f956cabefbb0->leave($__internal_91117a0a73a166184d8bb1477b12dc84e1a646872df4631bc5c3f956cabefbb0_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_356748f1ef10e7b6401beead7ef9b91076c89fd55ff627b31c8602cdbe65f4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356748f1ef10e7b6401beead7ef9b91076c89fd55ff627b31c8602cdbe65f4bb->enter($__internal_356748f1ef10e7b6401beead7ef9b91076c89fd55ff627b31c8602cdbe65f4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_356748f1ef10e7b6401beead7ef9b91076c89fd55ff627b31c8602cdbe65f4bb->leave($__internal_356748f1ef10e7b6401beead7ef9b91076c89fd55ff627b31c8602cdbe65f4bb_prof);

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
        return array (  180 => 46,  169 => 45,  157 => 44,  146 => 7,  134 => 6,  125 => 47,  122 => 46,  119 => 45,  117 => 44,  110 => 40,  106 => 39,  100 => 36,  94 => 33,  88 => 30,  82 => 27,  76 => 24,  70 => 21,  64 => 18,  58 => 15,  54 => 14,  50 => 13,  44 => 10,  40 => 8,  38 => 7,  34 => 6,  27 => 1,);
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
