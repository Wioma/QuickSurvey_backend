<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b8f535b9d99cb3cec7420622f7fa1d64b5e0e102180f113717ce325e387b37b5 extends Twig_Template
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
        $__internal_0ec67a3106ade0696258c06009124c21754bf924fb43ac175b0970c95d2e5361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec67a3106ade0696258c06009124c21754bf924fb43ac175b0970c95d2e5361->enter($__internal_0ec67a3106ade0696258c06009124c21754bf924fb43ac175b0970c95d2e5361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c2b4d6f4ccf8e39f5f6103a4956c371747ba3ce131d62dbe9cd304512057b276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b4d6f4ccf8e39f5f6103a4956c371747ba3ce131d62dbe9cd304512057b276->enter($__internal_c2b4d6f4ccf8e39f5f6103a4956c371747ba3ce131d62dbe9cd304512057b276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0ec67a3106ade0696258c06009124c21754bf924fb43ac175b0970c95d2e5361->leave($__internal_0ec67a3106ade0696258c06009124c21754bf924fb43ac175b0970c95d2e5361_prof);

        
        $__internal_c2b4d6f4ccf8e39f5f6103a4956c371747ba3ce131d62dbe9cd304512057b276->leave($__internal_c2b4d6f4ccf8e39f5f6103a4956c371747ba3ce131d62dbe9cd304512057b276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
