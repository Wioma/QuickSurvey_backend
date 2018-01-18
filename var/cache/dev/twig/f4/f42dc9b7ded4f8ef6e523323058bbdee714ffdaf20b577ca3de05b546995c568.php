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
        $__internal_eefcb8c15afc92e3259cd202eb5ed372fb19e62955782548dd00443ff7d8bac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefcb8c15afc92e3259cd202eb5ed372fb19e62955782548dd00443ff7d8bac4->enter($__internal_eefcb8c15afc92e3259cd202eb5ed372fb19e62955782548dd00443ff7d8bac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_182bc92edbf3d13266a1fa2a0aaf342b185aac305ac815ee22cd3e44ca06d4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182bc92edbf3d13266a1fa2a0aaf342b185aac305ac815ee22cd3e44ca06d4d1->enter($__internal_182bc92edbf3d13266a1fa2a0aaf342b185aac305ac815ee22cd3e44ca06d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_eefcb8c15afc92e3259cd202eb5ed372fb19e62955782548dd00443ff7d8bac4->leave($__internal_eefcb8c15afc92e3259cd202eb5ed372fb19e62955782548dd00443ff7d8bac4_prof);

        
        $__internal_182bc92edbf3d13266a1fa2a0aaf342b185aac305ac815ee22cd3e44ca06d4d1->leave($__internal_182bc92edbf3d13266a1fa2a0aaf342b185aac305ac815ee22cd3e44ca06d4d1_prof);

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
