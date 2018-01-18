<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ef420340127860c9d98cd5ac09906d862c4a3a4064e2f4d1ddb3ce6c50364369 extends Twig_Template
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
        $__internal_58c18baf136bec2f60988386b4f4577fdd28271cb3145fe876837c2402db9730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c18baf136bec2f60988386b4f4577fdd28271cb3145fe876837c2402db9730->enter($__internal_58c18baf136bec2f60988386b4f4577fdd28271cb3145fe876837c2402db9730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8daeb5f0ec89c866f0d07d61aaf970eed80ede56905d7a1c27d6c777c6e3a7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daeb5f0ec89c866f0d07d61aaf970eed80ede56905d7a1c27d6c777c6e3a7a0->enter($__internal_8daeb5f0ec89c866f0d07d61aaf970eed80ede56905d7a1c27d6c777c6e3a7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_58c18baf136bec2f60988386b4f4577fdd28271cb3145fe876837c2402db9730->leave($__internal_58c18baf136bec2f60988386b4f4577fdd28271cb3145fe876837c2402db9730_prof);

        
        $__internal_8daeb5f0ec89c866f0d07d61aaf970eed80ede56905d7a1c27d6c777c6e3a7a0->leave($__internal_8daeb5f0ec89c866f0d07d61aaf970eed80ede56905d7a1c27d6c777c6e3a7a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
