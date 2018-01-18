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
        $__internal_e387f0a528a2ae83576c1a4122aa517a263475371b3486451876dfa92a86afad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e387f0a528a2ae83576c1a4122aa517a263475371b3486451876dfa92a86afad->enter($__internal_e387f0a528a2ae83576c1a4122aa517a263475371b3486451876dfa92a86afad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e2c5ede80e22c241b15dbbff45bf300b6db7615755f17590164519a0c5007a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c5ede80e22c241b15dbbff45bf300b6db7615755f17590164519a0c5007a18->enter($__internal_e2c5ede80e22c241b15dbbff45bf300b6db7615755f17590164519a0c5007a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e387f0a528a2ae83576c1a4122aa517a263475371b3486451876dfa92a86afad->leave($__internal_e387f0a528a2ae83576c1a4122aa517a263475371b3486451876dfa92a86afad_prof);

        
        $__internal_e2c5ede80e22c241b15dbbff45bf300b6db7615755f17590164519a0c5007a18->leave($__internal_e2c5ede80e22c241b15dbbff45bf300b6db7615755f17590164519a0c5007a18_prof);

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
