<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_587e2e4734995c240a4572a35c170faaee0e1a65482638dc7483735a6d57648b extends Twig_Template
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
        $__internal_35ec3f4d842c69d454122780d4d1f371ea5faf0abc313f0517231060bc76708e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ec3f4d842c69d454122780d4d1f371ea5faf0abc313f0517231060bc76708e->enter($__internal_35ec3f4d842c69d454122780d4d1f371ea5faf0abc313f0517231060bc76708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_90c789f29871e7fbad1c0bb413b312985dc2ad6e521f688d35ccef8da409a6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c789f29871e7fbad1c0bb413b312985dc2ad6e521f688d35ccef8da409a6bd->enter($__internal_90c789f29871e7fbad1c0bb413b312985dc2ad6e521f688d35ccef8da409a6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_35ec3f4d842c69d454122780d4d1f371ea5faf0abc313f0517231060bc76708e->leave($__internal_35ec3f4d842c69d454122780d4d1f371ea5faf0abc313f0517231060bc76708e_prof);

        
        $__internal_90c789f29871e7fbad1c0bb413b312985dc2ad6e521f688d35ccef8da409a6bd->leave($__internal_90c789f29871e7fbad1c0bb413b312985dc2ad6e521f688d35ccef8da409a6bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
