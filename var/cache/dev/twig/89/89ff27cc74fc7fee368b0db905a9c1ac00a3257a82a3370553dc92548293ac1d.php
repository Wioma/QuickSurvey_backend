<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_14a3df1942be9392caef1142c83c80c3b6a33fbe3c9c0f69d9dcf26d9736d6a3 extends Twig_Template
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
        $__internal_87783445b2f182cebc0185c46be5194cedc932c4d9563d396a220a7fa5159b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87783445b2f182cebc0185c46be5194cedc932c4d9563d396a220a7fa5159b9f->enter($__internal_87783445b2f182cebc0185c46be5194cedc932c4d9563d396a220a7fa5159b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d2407980c68959c98f6d298b5adec32f1d670cfc06ebc692481037ae29cb3be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2407980c68959c98f6d298b5adec32f1d670cfc06ebc692481037ae29cb3be2->enter($__internal_d2407980c68959c98f6d298b5adec32f1d670cfc06ebc692481037ae29cb3be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_87783445b2f182cebc0185c46be5194cedc932c4d9563d396a220a7fa5159b9f->leave($__internal_87783445b2f182cebc0185c46be5194cedc932c4d9563d396a220a7fa5159b9f_prof);

        
        $__internal_d2407980c68959c98f6d298b5adec32f1d670cfc06ebc692481037ae29cb3be2->leave($__internal_d2407980c68959c98f6d298b5adec32f1d670cfc06ebc692481037ae29cb3be2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
