<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_47241ce9a15721c8d0004ef33adef79f2b482f3e8114586709a04b67d8fe9902 extends Twig_Template
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
        $__internal_11b24f9ddccedc69b581310e4e4085bede7d7bca1f89c474a9f21758a79a2ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b24f9ddccedc69b581310e4e4085bede7d7bca1f89c474a9f21758a79a2ddd->enter($__internal_11b24f9ddccedc69b581310e4e4085bede7d7bca1f89c474a9f21758a79a2ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_11b24f9ddccedc69b581310e4e4085bede7d7bca1f89c474a9f21758a79a2ddd->leave($__internal_11b24f9ddccedc69b581310e4e4085bede7d7bca1f89c474a9f21758a79a2ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
