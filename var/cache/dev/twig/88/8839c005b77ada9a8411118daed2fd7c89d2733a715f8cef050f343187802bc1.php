<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f9863957df1810f8c446571836959c8a94fc6eae21e83bc242d170c8ef959fde extends Twig_Template
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
        $__internal_f76dc06f379401a9a28e0d96543c54d5ae24bd24ae4de62baf2e3c4bd77756df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76dc06f379401a9a28e0d96543c54d5ae24bd24ae4de62baf2e3c4bd77756df->enter($__internal_f76dc06f379401a9a28e0d96543c54d5ae24bd24ae4de62baf2e3c4bd77756df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6547250f61191259fd06e252f1d82cf064e94ee59b171159b5d96b7cd51436ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6547250f61191259fd06e252f1d82cf064e94ee59b171159b5d96b7cd51436ac->enter($__internal_6547250f61191259fd06e252f1d82cf064e94ee59b171159b5d96b7cd51436ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f76dc06f379401a9a28e0d96543c54d5ae24bd24ae4de62baf2e3c4bd77756df->leave($__internal_f76dc06f379401a9a28e0d96543c54d5ae24bd24ae4de62baf2e3c4bd77756df_prof);

        
        $__internal_6547250f61191259fd06e252f1d82cf064e94ee59b171159b5d96b7cd51436ac->leave($__internal_6547250f61191259fd06e252f1d82cf064e94ee59b171159b5d96b7cd51436ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}