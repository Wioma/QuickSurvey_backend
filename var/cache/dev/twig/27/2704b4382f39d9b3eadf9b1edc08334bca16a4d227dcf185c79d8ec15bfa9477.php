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
        $__internal_3e3e943de435df49ee7b44d6ece54bef603f6cafbfe8168182871563dff32bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e943de435df49ee7b44d6ece54bef603f6cafbfe8168182871563dff32bcb->enter($__internal_3e3e943de435df49ee7b44d6ece54bef603f6cafbfe8168182871563dff32bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_784f8fc02f3200ef09ce4c1c77548c55a4f8105acc7efa51356855f576814479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784f8fc02f3200ef09ce4c1c77548c55a4f8105acc7efa51356855f576814479->enter($__internal_784f8fc02f3200ef09ce4c1c77548c55a4f8105acc7efa51356855f576814479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3e3e943de435df49ee7b44d6ece54bef603f6cafbfe8168182871563dff32bcb->leave($__internal_3e3e943de435df49ee7b44d6ece54bef603f6cafbfe8168182871563dff32bcb_prof);

        
        $__internal_784f8fc02f3200ef09ce4c1c77548c55a4f8105acc7efa51356855f576814479->leave($__internal_784f8fc02f3200ef09ce4c1c77548c55a4f8105acc7efa51356855f576814479_prof);

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
