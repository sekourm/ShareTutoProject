<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4879cb266095b9c3661145c96c91ce0adb371f6b93472301fbf5a1a51278d066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44f8b90f2e7fa2c161aef92485a036922d133b2d4bf6d80a9667aa64e8d884ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f8b90f2e7fa2c161aef92485a036922d133b2d4bf6d80a9667aa64e8d884ae->enter($__internal_44f8b90f2e7fa2c161aef92485a036922d133b2d4bf6d80a9667aa64e8d884ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_44f8b90f2e7fa2c161aef92485a036922d133b2d4bf6d80a9667aa64e8d884ae->leave($__internal_44f8b90f2e7fa2c161aef92485a036922d133b2d4bf6d80a9667aa64e8d884ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
