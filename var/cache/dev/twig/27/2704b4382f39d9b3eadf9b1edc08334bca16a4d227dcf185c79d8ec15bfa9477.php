<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_86f829a32d6518aca31142ec37e75bd6d37efde5a5a84c594e95e7d82ed6c051 extends Twig_Template
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
        $__internal_afcae883d428de96d9633c651b7cdb505a1822067130f16b622bf2ae5eb138fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcae883d428de96d9633c651b7cdb505a1822067130f16b622bf2ae5eb138fd->enter($__internal_afcae883d428de96d9633c651b7cdb505a1822067130f16b622bf2ae5eb138fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_309fca5e981d26dfdb1f178f3e52e9f021a63f28148eb35681e6414e51b901e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309fca5e981d26dfdb1f178f3e52e9f021a63f28148eb35681e6414e51b901e0->enter($__internal_309fca5e981d26dfdb1f178f3e52e9f021a63f28148eb35681e6414e51b901e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_afcae883d428de96d9633c651b7cdb505a1822067130f16b622bf2ae5eb138fd->leave($__internal_afcae883d428de96d9633c651b7cdb505a1822067130f16b622bf2ae5eb138fd_prof);

        
        $__internal_309fca5e981d26dfdb1f178f3e52e9f021a63f28148eb35681e6414e51b901e0->leave($__internal_309fca5e981d26dfdb1f178f3e52e9f021a63f28148eb35681e6414e51b901e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
