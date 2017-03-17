<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_622a010386fc90bffb66603be90ecbdedf384cb94754f68de183a0daaa7fbbb5 extends Twig_Template
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
        $__internal_1b61db93befe4cba1fa40ccc0f6791b1f9920cc69b21e5a2e3b9a273853c338e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b61db93befe4cba1fa40ccc0f6791b1f9920cc69b21e5a2e3b9a273853c338e->enter($__internal_1b61db93befe4cba1fa40ccc0f6791b1f9920cc69b21e5a2e3b9a273853c338e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1b61db93befe4cba1fa40ccc0f6791b1f9920cc69b21e5a2e3b9a273853c338e->leave($__internal_1b61db93befe4cba1fa40ccc0f6791b1f9920cc69b21e5a2e3b9a273853c338e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
