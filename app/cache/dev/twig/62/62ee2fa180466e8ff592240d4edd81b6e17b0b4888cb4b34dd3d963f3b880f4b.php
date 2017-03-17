<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dbcabfb623d6c3c1ed98dcccc6af03656334eceb386b76d308ae5e2fd5d85fdc extends Twig_Template
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
        $__internal_2d1dd0b438bc710da2a35dc96a9cbb1bc0c6def1118b3a5b9d91d87dd6f1beef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1dd0b438bc710da2a35dc96a9cbb1bc0c6def1118b3a5b9d91d87dd6f1beef->enter($__internal_2d1dd0b438bc710da2a35dc96a9cbb1bc0c6def1118b3a5b9d91d87dd6f1beef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2d1dd0b438bc710da2a35dc96a9cbb1bc0c6def1118b3a5b9d91d87dd6f1beef->leave($__internal_2d1dd0b438bc710da2a35dc96a9cbb1bc0c6def1118b3a5b9d91d87dd6f1beef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
