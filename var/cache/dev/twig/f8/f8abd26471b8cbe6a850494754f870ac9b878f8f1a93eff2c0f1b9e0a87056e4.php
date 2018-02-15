<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_efa47a9aedbd262bc45d6279a0f200ab7a2091ba5670dee4a3d917936763fb1e extends Twig_Template
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
        $__internal_a251cb6e45262e37140dd4d041a51a766400ac37193e4cc57b8ee0362d13b755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a251cb6e45262e37140dd4d041a51a766400ac37193e4cc57b8ee0362d13b755->enter($__internal_a251cb6e45262e37140dd4d041a51a766400ac37193e4cc57b8ee0362d13b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_27b7cbd8dbde2266155ad4d63e774d3331b591dffdccf185ad20db00b6c21739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b7cbd8dbde2266155ad4d63e774d3331b591dffdccf185ad20db00b6c21739->enter($__internal_27b7cbd8dbde2266155ad4d63e774d3331b591dffdccf185ad20db00b6c21739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a251cb6e45262e37140dd4d041a51a766400ac37193e4cc57b8ee0362d13b755->leave($__internal_a251cb6e45262e37140dd4d041a51a766400ac37193e4cc57b8ee0362d13b755_prof);

        
        $__internal_27b7cbd8dbde2266155ad4d63e774d3331b591dffdccf185ad20db00b6c21739->leave($__internal_27b7cbd8dbde2266155ad4d63e774d3331b591dffdccf185ad20db00b6c21739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
