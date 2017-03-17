<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_204517da8eba422b7cea018f72251291e944ea6bd0d920bdce749ef175c5a1d3 extends Twig_Template
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
        $__internal_25bed6e604e78383eed51a28751678f909dd29d7cec764a2c486b83aa50804bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25bed6e604e78383eed51a28751678f909dd29d7cec764a2c486b83aa50804bc->enter($__internal_25bed6e604e78383eed51a28751678f909dd29d7cec764a2c486b83aa50804bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_25bed6e604e78383eed51a28751678f909dd29d7cec764a2c486b83aa50804bc->leave($__internal_25bed6e604e78383eed51a28751678f909dd29d7cec764a2c486b83aa50804bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/ShareTutoProject/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
