<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fb2666e614112395793c6b5971081d79f2ee221491298c49417e41cb4e6755bd extends Twig_Template
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
        $__internal_7ee7e3ffa92060b1e5013d8252ffd6bfd561fbc7912e89b3f78e2de49a89cd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ee7e3ffa92060b1e5013d8252ffd6bfd561fbc7912e89b3f78e2de49a89cd9a->enter($__internal_7ee7e3ffa92060b1e5013d8252ffd6bfd561fbc7912e89b3f78e2de49a89cd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3bf47989a8497599e02a86cf5c1ec8523c2785af38ebd2d50368d360f5372d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf47989a8497599e02a86cf5c1ec8523c2785af38ebd2d50368d360f5372d30->enter($__internal_3bf47989a8497599e02a86cf5c1ec8523c2785af38ebd2d50368d360f5372d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7ee7e3ffa92060b1e5013d8252ffd6bfd561fbc7912e89b3f78e2de49a89cd9a->leave($__internal_7ee7e3ffa92060b1e5013d8252ffd6bfd561fbc7912e89b3f78e2de49a89cd9a_prof);

        
        $__internal_3bf47989a8497599e02a86cf5c1ec8523c2785af38ebd2d50368d360f5372d30->leave($__internal_3bf47989a8497599e02a86cf5c1ec8523c2785af38ebd2d50368d360f5372d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
