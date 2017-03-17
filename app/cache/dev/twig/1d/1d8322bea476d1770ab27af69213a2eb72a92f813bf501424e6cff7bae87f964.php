<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c2e741f9f03a20b6acdd0ebd810c7dfdf423c0c83b80dcaa87d9ad15c9dfe9fe extends Twig_Template
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
        $__internal_b4739c74036281bc76a3db105e1937af9551f0eeed080d8cb09f3d03a23a4e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4739c74036281bc76a3db105e1937af9551f0eeed080d8cb09f3d03a23a4e9e->enter($__internal_b4739c74036281bc76a3db105e1937af9551f0eeed080d8cb09f3d03a23a4e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b4739c74036281bc76a3db105e1937af9551f0eeed080d8cb09f3d03a23a4e9e->leave($__internal_b4739c74036281bc76a3db105e1937af9551f0eeed080d8cb09f3d03a23a4e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
