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
        $__internal_08995dfc01aa2c888af53e440e0ce11662638d35d6733562ccfabb7e0a878d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08995dfc01aa2c888af53e440e0ce11662638d35d6733562ccfabb7e0a878d31->enter($__internal_08995dfc01aa2c888af53e440e0ce11662638d35d6733562ccfabb7e0a878d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b377989cc222533101198b3ed1768d997257269badd27f530c0a69778074f56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b377989cc222533101198b3ed1768d997257269badd27f530c0a69778074f56d->enter($__internal_b377989cc222533101198b3ed1768d997257269badd27f530c0a69778074f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_08995dfc01aa2c888af53e440e0ce11662638d35d6733562ccfabb7e0a878d31->leave($__internal_08995dfc01aa2c888af53e440e0ce11662638d35d6733562ccfabb7e0a878d31_prof);

        
        $__internal_b377989cc222533101198b3ed1768d997257269badd27f530c0a69778074f56d->leave($__internal_b377989cc222533101198b3ed1768d997257269badd27f530c0a69778074f56d_prof);

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
