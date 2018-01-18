<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_db7f40fdec2f18c74ab2e48f662cdfc61f40bb2481790310866fcc2b20639788 extends Twig_Template
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
        $__internal_72adbf1e6c589d305b9fe40ef49b84a43ce5d22e1678484f718fd72c17e75655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72adbf1e6c589d305b9fe40ef49b84a43ce5d22e1678484f718fd72c17e75655->enter($__internal_72adbf1e6c589d305b9fe40ef49b84a43ce5d22e1678484f718fd72c17e75655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_49c727ca8ba5e7ef6a7a1c0316dd34ab3ef0ed99a3381bf4fa753af144949f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c727ca8ba5e7ef6a7a1c0316dd34ab3ef0ed99a3381bf4fa753af144949f02->enter($__internal_49c727ca8ba5e7ef6a7a1c0316dd34ab3ef0ed99a3381bf4fa753af144949f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_72adbf1e6c589d305b9fe40ef49b84a43ce5d22e1678484f718fd72c17e75655->leave($__internal_72adbf1e6c589d305b9fe40ef49b84a43ce5d22e1678484f718fd72c17e75655_prof);

        
        $__internal_49c727ca8ba5e7ef6a7a1c0316dd34ab3ef0ed99a3381bf4fa753af144949f02->leave($__internal_49c727ca8ba5e7ef6a7a1c0316dd34ab3ef0ed99a3381bf4fa753af144949f02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
