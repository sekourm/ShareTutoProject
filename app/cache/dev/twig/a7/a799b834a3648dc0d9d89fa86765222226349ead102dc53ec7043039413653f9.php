<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f7abe9b3f0c2b5e68288fc3af65385d1d3cbc38840aac44b6e57a14e4f3309f0 extends Twig_Template
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
        $__internal_fd84621349b2a4f7f8b9bb4db8e37588b68788974651eb353ee7fcf4333a57b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd84621349b2a4f7f8b9bb4db8e37588b68788974651eb353ee7fcf4333a57b4->enter($__internal_fd84621349b2a4f7f8b9bb4db8e37588b68788974651eb353ee7fcf4333a57b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fd84621349b2a4f7f8b9bb4db8e37588b68788974651eb353ee7fcf4333a57b4->leave($__internal_fd84621349b2a4f7f8b9bb4db8e37588b68788974651eb353ee7fcf4333a57b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
