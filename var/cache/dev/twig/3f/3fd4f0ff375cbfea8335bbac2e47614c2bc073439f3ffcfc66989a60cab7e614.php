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
        $__internal_8697ad81fd978440eb068729ebc9e3515c0fa9ace795714294b522d5a17d252b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8697ad81fd978440eb068729ebc9e3515c0fa9ace795714294b522d5a17d252b->enter($__internal_8697ad81fd978440eb068729ebc9e3515c0fa9ace795714294b522d5a17d252b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_03dd848e72982c8b6b9f70400b212126b20d3d3dcd3ec44f8f8a5f7396171d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dd848e72982c8b6b9f70400b212126b20d3d3dcd3ec44f8f8a5f7396171d26->enter($__internal_03dd848e72982c8b6b9f70400b212126b20d3d3dcd3ec44f8f8a5f7396171d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8697ad81fd978440eb068729ebc9e3515c0fa9ace795714294b522d5a17d252b->leave($__internal_8697ad81fd978440eb068729ebc9e3515c0fa9ace795714294b522d5a17d252b_prof);

        
        $__internal_03dd848e72982c8b6b9f70400b212126b20d3d3dcd3ec44f8f8a5f7396171d26->leave($__internal_03dd848e72982c8b6b9f70400b212126b20d3d3dcd3ec44f8f8a5f7396171d26_prof);

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
