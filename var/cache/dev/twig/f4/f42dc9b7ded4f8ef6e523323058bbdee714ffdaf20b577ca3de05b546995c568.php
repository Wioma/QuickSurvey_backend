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
        $__internal_17d485f2cd3403533007f330c02fab699da8056639b25172894dd19d51463f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d485f2cd3403533007f330c02fab699da8056639b25172894dd19d51463f36->enter($__internal_17d485f2cd3403533007f330c02fab699da8056639b25172894dd19d51463f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_def6d1f06f458bad9909128db6ee06472da0ce7dea471f73dbe8ecddac5c0831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def6d1f06f458bad9909128db6ee06472da0ce7dea471f73dbe8ecddac5c0831->enter($__internal_def6d1f06f458bad9909128db6ee06472da0ce7dea471f73dbe8ecddac5c0831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_17d485f2cd3403533007f330c02fab699da8056639b25172894dd19d51463f36->leave($__internal_17d485f2cd3403533007f330c02fab699da8056639b25172894dd19d51463f36_prof);

        
        $__internal_def6d1f06f458bad9909128db6ee06472da0ce7dea471f73dbe8ecddac5c0831->leave($__internal_def6d1f06f458bad9909128db6ee06472da0ce7dea471f73dbe8ecddac5c0831_prof);

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
