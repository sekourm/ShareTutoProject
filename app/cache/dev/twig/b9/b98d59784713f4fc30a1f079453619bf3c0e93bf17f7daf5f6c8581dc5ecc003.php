<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e7aafcbc302da2bfa034815e761d22d11fffa76f34edc9a4938a8d3a9b4f95e0 extends Twig_Template
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
        $__internal_e4532d61557dbda372a71f330b3e05343ff13194a33410197d24db622006b5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4532d61557dbda372a71f330b3e05343ff13194a33410197d24db622006b5c8->enter($__internal_e4532d61557dbda372a71f330b3e05343ff13194a33410197d24db622006b5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e4532d61557dbda372a71f330b3e05343ff13194a33410197d24db622006b5c8->leave($__internal_e4532d61557dbda372a71f330b3e05343ff13194a33410197d24db622006b5c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
