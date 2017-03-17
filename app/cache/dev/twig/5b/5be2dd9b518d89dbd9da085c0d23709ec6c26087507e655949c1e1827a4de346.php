<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_cdf9612f7dec4fafa212ced5312beea7b0617f69accf29dd941b67bb7273c25f extends Twig_Template
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
        $__internal_d992b5b71788cbca9c547a9f78a0ca93fb2ceb6b7716fec492ec199ffb081aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d992b5b71788cbca9c547a9f78a0ca93fb2ceb6b7716fec492ec199ffb081aa9->enter($__internal_d992b5b71788cbca9c547a9f78a0ca93fb2ceb6b7716fec492ec199ffb081aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d992b5b71788cbca9c547a9f78a0ca93fb2ceb6b7716fec492ec199ffb081aa9->leave($__internal_d992b5b71788cbca9c547a9f78a0ca93fb2ceb6b7716fec492ec199ffb081aa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
