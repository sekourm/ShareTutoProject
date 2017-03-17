<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2c220cd889e6ba03d31a489ba697b7dc74fb6eb475ed63634c454b31ece8a944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7743320318a8d09b1819da22faadbe6df2c8980baff0d37c8a82be198f0b3667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7743320318a8d09b1819da22faadbe6df2c8980baff0d37c8a82be198f0b3667->enter($__internal_7743320318a8d09b1819da22faadbe6df2c8980baff0d37c8a82be198f0b3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7743320318a8d09b1819da22faadbe6df2c8980baff0d37c8a82be198f0b3667->leave($__internal_7743320318a8d09b1819da22faadbe6df2c8980baff0d37c8a82be198f0b3667_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd9817c4b6f2dbe8b478b202c2e32a1ee9bad9df7f85bf8d22758deb57d75bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9817c4b6f2dbe8b478b202c2e32a1ee9bad9df7f85bf8d22758deb57d75bf6->enter($__internal_bd9817c4b6f2dbe8b478b202c2e32a1ee9bad9df7f85bf8d22758deb57d75bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bd9817c4b6f2dbe8b478b202c2e32a1ee9bad9df7f85bf8d22758deb57d75bf6->leave($__internal_bd9817c4b6f2dbe8b478b202c2e32a1ee9bad9df7f85bf8d22758deb57d75bf6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f99c7c56c319b8b702507f07da60c21ec1d79acdd865ef2808cfd0a1f79fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f99c7c56c319b8b702507f07da60c21ec1d79acdd865ef2808cfd0a1f79fcf->enter($__internal_a0f99c7c56c319b8b702507f07da60c21ec1d79acdd865ef2808cfd0a1f79fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0f99c7c56c319b8b702507f07da60c21ec1d79acdd865ef2808cfd0a1f79fcf->leave($__internal_a0f99c7c56c319b8b702507f07da60c21ec1d79acdd865ef2808cfd0a1f79fcf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d93b40c52d7c39242c60956b4022eaa2f7a614f9d69fd5bd7b245b7eddd25d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93b40c52d7c39242c60956b4022eaa2f7a614f9d69fd5bd7b245b7eddd25d0b->enter($__internal_d93b40c52d7c39242c60956b4022eaa2f7a614f9d69fd5bd7b245b7eddd25d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d93b40c52d7c39242c60956b4022eaa2f7a614f9d69fd5bd7b245b7eddd25d0b->leave($__internal_d93b40c52d7c39242c60956b4022eaa2f7a614f9d69fd5bd7b245b7eddd25d0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
