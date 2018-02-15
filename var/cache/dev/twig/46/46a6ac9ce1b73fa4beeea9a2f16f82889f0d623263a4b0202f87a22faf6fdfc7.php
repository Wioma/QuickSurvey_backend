<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d8a39486ac19c2e61d47f168cc8fc5824e195ff51a840fde3f9266c5ab209afe extends Twig_Template
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
        $__internal_80b02d61d2333efdf62da4198d7645672f8aecd56f513adb40a4a70360e37805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b02d61d2333efdf62da4198d7645672f8aecd56f513adb40a4a70360e37805->enter($__internal_80b02d61d2333efdf62da4198d7645672f8aecd56f513adb40a4a70360e37805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_793bfda53f6dd94c227891b2586155b0595efd5f1986987c340320ff3d549218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793bfda53f6dd94c227891b2586155b0595efd5f1986987c340320ff3d549218->enter($__internal_793bfda53f6dd94c227891b2586155b0595efd5f1986987c340320ff3d549218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_80b02d61d2333efdf62da4198d7645672f8aecd56f513adb40a4a70360e37805->leave($__internal_80b02d61d2333efdf62da4198d7645672f8aecd56f513adb40a4a70360e37805_prof);

        
        $__internal_793bfda53f6dd94c227891b2586155b0595efd5f1986987c340320ff3d549218->leave($__internal_793bfda53f6dd94c227891b2586155b0595efd5f1986987c340320ff3d549218_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
