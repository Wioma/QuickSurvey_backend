<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6d48cf312d7d16ef1995d24b65ddc0de95e6dd4d9f38103a2a5a7912d637b901 extends Twig_Template
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
        $__internal_3ecae001bd2783b418199bf896e7363ffd7a2a22fc42ea02b7fc091e279a0901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecae001bd2783b418199bf896e7363ffd7a2a22fc42ea02b7fc091e279a0901->enter($__internal_3ecae001bd2783b418199bf896e7363ffd7a2a22fc42ea02b7fc091e279a0901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1648e7b4def12ed754b16df6c0693c87da21aaff65dbfb2cfc9c1bbe5a70268b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1648e7b4def12ed754b16df6c0693c87da21aaff65dbfb2cfc9c1bbe5a70268b->enter($__internal_1648e7b4def12ed754b16df6c0693c87da21aaff65dbfb2cfc9c1bbe5a70268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3ecae001bd2783b418199bf896e7363ffd7a2a22fc42ea02b7fc091e279a0901->leave($__internal_3ecae001bd2783b418199bf896e7363ffd7a2a22fc42ea02b7fc091e279a0901_prof);

        
        $__internal_1648e7b4def12ed754b16df6c0693c87da21aaff65dbfb2cfc9c1bbe5a70268b->leave($__internal_1648e7b4def12ed754b16df6c0693c87da21aaff65dbfb2cfc9c1bbe5a70268b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
